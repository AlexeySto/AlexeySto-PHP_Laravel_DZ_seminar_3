<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('get-form_book');
    }

    public function store(Request $request) {

        // Валидация данных
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:books,title',
            'author' => 'required|string|max:100',
            'genre' => 'required|string',
        ], [
            'title.required' => 'Название книги обязательно к заполнению.',
            'title.string' => 'Название книги должно быть строкой.',
            'title.max' => 'Название книги не может превышать 255 символов.',
            'title.unique' => 'Книга с таким названием уже существует.',
            'author.required' => 'Автор обязателен к заполнению.',
            'author.string' => 'Имя автора должно быть строкой.',
            'author.max' => 'Имя автора не может превышать 100 символов.',
            'genre.required' => 'Жанр обязательно к заполнению.',
            'genre.string' => 'Жанр должен быть строкой.',
        ]);

        // Сохраняем данные в модель Book
        // \App\Models\Book::create($validatedData);

        // Возвращаем успешный ответ
        return response()->json('Book is successfully validated and data has been saved');
    }
}
