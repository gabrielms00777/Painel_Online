<?php

auth()->loginUsingId(1);

use App\Http\Middleware\TrackOnlineUser;
use App\Http\Middleware\TrackVisits;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->middleware([TrackOnlineUser::class, TrackVisits::class]);
Route::view('/teste', 'welcome')->middleware([TrackOnlineUser::class, TrackVisits::class]);

// Route::get('/a', function () {
//     Artisan::call('onlineusers:clean');

//     // ...
// });

Route::get('dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
