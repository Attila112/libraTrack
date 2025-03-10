<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DueDateReminder extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($borrowing)
    {
        $this->borrowing = $borrowing;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Könyv visszahozási emlékeztető')
            ->line("Ne felejtsd el visszahozni a(z) '{$this->borrowing->book->title}' című könyvet!")
            ->line("Határidő: {$this->borrowing->due_date}")
            ->action('Részletek megtekintése', url('/'))
            ->line('Köszönjük, hogy használod a könyvtári rendszert!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
