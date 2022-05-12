<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::post('Delete',[ProductController::class, 'Delete']);
Route::post('Edit',[ProductController::class, 'Edit']);




