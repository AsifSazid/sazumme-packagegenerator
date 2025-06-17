<?php
use Illuminate\Support\Facades\Route;
use Sazumme\Packagegenerator\Http\Controllers\PackageController;

Route::get('/dashboard', function () {
    return view('packagegenerator::dashboard');
})->name('package.dashboard');
Route::get('/package-generator', function () {
    return view('packagegenerator::package-gen');
})->name('package.generator');
Route::post('/package/generate', [PackageController::class, 'generate'])->name('package.generate');