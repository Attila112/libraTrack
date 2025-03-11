<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $admin = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => hash('sha256', 'password'),
            'role' => 'admin',
        ]);

        $this->actingAs($admin);
    }
    use RefreshDatabase;
    use WithFaker;

    public function test_index_displays_books()
    {
        $books = Book::factory()->count(3)->create();

        $response = $this->get(route('books.index'));

        $response->assertStatus(200);

        foreach ($books as $book) {
            $response->assertSee($book->title);
            $response->assertSee($book->author);
        }
    }

    public function test_store_creates_new_book()
    {
        $data = [
            'title' => 'Test Book',
            'author' => 'John Doe',
            'year' => 2023,
            'pages' => 250,
            'available_copies' => 10,
            'is_borrowed' => false,
        ];

        $response = $this->post(route('books.store'), $data);

        $response->assertRedirect(route('books.index'));

        $this->assertDatabaseHas('books', $data);
    }

    public function test_show_displays_book_details()
    {
        $book = Book::factory()->create();

        $response = $this->get(route('books.show', $book));

        $response->assertStatus(200);

        $response->assertSee($book->title);
        $response->assertSee($book->author);
    }

    public function test_update_modifies_book_details()
    {
        $book = Book::factory()->create();

        $updatedData = [
            'title' => 'Updated Title',
            'author' => 'Updated Author',
            'year' => 2024,
            'pages' => 300,
            'available_copies' => 5,
        ];

        $response = $this->put(route('books.update', $book), $updatedData);

        $this->assertDatabaseHas('books', $updatedData);
    }

    public function test_destroy_deletes_book()
    {
        $book = Book::factory()->create();

        $response = $this->delete(route('books.destroy', $book));

        $response->assertRedirect(route('books.index'));

        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }


    public function test_search_filters_books_by_title()
    {
        Book::factory()->create(['title' => 'Laravel Basics']);
        Book::factory()->create(['title' => 'Advanced PHP']);

        $response = $this->get(route('books.search', ['title' => 'Laravel']));

        $response->assertStatus(200);
        $response->assertSee('Laravel Basics');
        $response->assertDontSee('Advanced PHP');
    }


    public function test_search_filters_only_available_books()
    {
        Book::factory()->create(['title' => 'Available Book', 'available_copies' => 5]);
        Book::factory()->create(['title' => 'Unavailable Book', 'available_copies' => 0]);

        $response = $this->get(route('books.search', ['only_available' => true]));

        $response->assertStatus(200);
        $response->assertSee('Available Book');
        $response->assertDontSee('Unavailable Book');
    }
}
