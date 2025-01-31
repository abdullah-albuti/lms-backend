<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FetchBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://api.example.com/books');
        $books = $response->json();
    
        foreach ($books as $book) {
            Book::updateOrCreate(
                ['external_id' => $book['id']],
                ['title' => $book['title'], 'author' => $book['author']]
            );
        }
    
        $this->info('Books fetched successfully.');
    }
    
}
