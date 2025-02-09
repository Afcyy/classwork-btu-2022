<?php

use App\Models\MenuItem;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use function Ramsey\Uuid\v1;

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
    return view('index');
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

    Route::get("/add", function (){
        return view('admin.add');
    })->name('add');

    Route::post("/addMenuItem", function (Request $request) {
        MenuItem::create($request->all());

        return back();
    })->name('.add.menu.item');
});