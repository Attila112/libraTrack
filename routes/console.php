<?php

use App\Models\Borrowing;
use App\Notifications\DueDateReminder;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

app()->booted(function () {
    $schedule = app(Schedule::class);

    $schedule->call(function () {
        Borrowing::whereDate('due_date', now()->addDays(1))
            ->whereNull('returned_at')
            ->get()
            ->each(function ($borrowing) {
                $borrowing->user->notify(new DueDateReminder($borrowing));
            });
    })->daily();
});

