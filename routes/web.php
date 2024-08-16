<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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




// List all contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Show the form to create a new contact
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Store a new contact
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Show a specific contact
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Show the form to edit a contact
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Update a contact
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

// Delete a contact
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
