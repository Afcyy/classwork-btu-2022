<?php

use Illuminate\Support\Facades\Route;
use App\Models\MenuItem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $menuItems = MenuItem::all();

    return view('index', compact('menuItems'));
});

Route::get('/contact', function () {
    return view('components.contact-page.index');
});

Route::get('/search', function () {
    return view('components.search-page.index');
});

Route::prefix("admin")->name("admin")->group(function() {
    Route::get("", function () {
        return view('admin.index');
    });
});