<?php 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\KontakController; 

Route::get('/', function () { 
    return view('welcome'); // Route langsung ke view tanpa controller
}); 

Route::resource('kontaks', KontakController::class); 
// Route resource untuk mengakses KontakController melalui URL '/kontaks'
