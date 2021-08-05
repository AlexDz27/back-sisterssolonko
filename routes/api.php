<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DressesController;

Route::get('/dresses', [DressesController::class, 'all']);
