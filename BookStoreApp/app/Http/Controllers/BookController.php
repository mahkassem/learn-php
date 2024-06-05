<?php

namespace App\Http\Controllers;

use App\Http\Requests\Books\StoreBookRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return Book::with('authors')->get();
    }

    public function getById(int $id)
    {
        return Book::with('authors')->findOrFail($id);
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());

        // update or create authors
        $authors = collect($request->get('authors'));

        $authors->each(function ($author) use ($book) {
            $author = Author::firstOrCreate(['name' => $author['name']]);
            $book->authors()->attach($author->id);
        });

        return $book;
    }

    public function update(Request $request, int $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return $book;
    }

    public function destroy(int $id)
    {
        $book = Book::findOrFail($id);
        $book->delete($id);
        return $book;
    }
}
