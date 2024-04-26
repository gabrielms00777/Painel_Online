<?php

// auth()->loginUsingId(1);

use App\Http\Middleware\TrackOnlineUser;
use App\Http\Middleware\TrackVisits;
use App\Livewire\Admin\{Dashboard, User};
use Illuminate\Support\Facades\Route;

Route::view('/', 'site.index')->middleware([TrackOnlineUser::class, TrackVisits::class])->name('site.index');
Route::view('/sobre', 'site.about')->middleware([TrackOnlineUser::class, TrackVisits::class])->name('site.about');


Route::view('/teste', 'welcome')->middleware([TrackOnlineUser::class, TrackVisits::class]);

Route::middleware('auth')->group(function(){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('users', User\Index::class)->name('users.index');
    Route::get('users/create', User\Create::class)->name('users.create');
    Route::get('users/{user}/edit', User\Edit::class)->name('users.edit');

    Route::view('profile', 'profile')->name('profile');
});


require __DIR__.'/auth.php';
