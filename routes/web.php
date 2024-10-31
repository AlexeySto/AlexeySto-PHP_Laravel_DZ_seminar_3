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
    return view('welcome');
});

Route::get('/test_database', function () {
    $employee = new \App\Models\Employee();
    $employee->name = "Иван Иванов";
    $employee->position = "Разработчик";
    $employee->save();

    return "Сотрудник добавлен в базу данных!";
});
