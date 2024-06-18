<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\CharactersCountController;
use App\Http\Controllers\FindMinController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\WordController;

Route::get('count', [CharactersCountController::class, 'countCharacters'])->name('countCharacters');
Route::get('minimum', [FindMinController::class, 'findMinimum'])->name('findMinimum');
Route::get('sum', [SumController::class, 'sumOddElements'])->name('sumOddElements');
Route::get('word', [WordController::class, 'declineWord'])->name('declineWord');

Route::match(['get', 'post'],'/count-characters', [AlgorithmController::class, 'countCharacters'])->name('countCharacters');
Route::match(['get', 'post'],'/find-minimum', [AlgorithmController::class, 'findMinimum'])->name('findMinimum');
Route::match(['get', 'post'],'/sum-odd-elements', [AlgorithmController::class, 'sumOddElements'])->name('sumOddElements');
Route::match(['get', 'post'],'/decline-word', [AlgorithmController::class, 'declineWord'])->name('declineWord');
