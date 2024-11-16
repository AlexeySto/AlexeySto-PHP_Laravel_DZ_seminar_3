<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Алексей',
        'age' => 29,
        'position' => 'Инженер',
        'address' => 'г. Ростов, ул. Ленина, д. 19'
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'г. Ростов, ул. Ленина, д. 19',
        'post_code' => 152150,
        'email' => 'alexey@test.ru',
        'phone' => 89008887766
    ]);
});

Route::get('/test_database', function () {
    $employee = new \App\Models\Employee();
    $employee->name = "Иван Иванов";
    $employee->position = "Разработчик";
    $employee->save();

    return "Сотрудник добавлен в базу данных!";
});
