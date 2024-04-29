<?php

// auth()->loginUsingId(1);

use App\Http\Controllers\SendContactEmailController;
use App\Http\Middleware\TrackOnlineUser;
use App\Http\Middleware\TrackVisits;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\SiteConfig;
use App\Livewire\Admin\ContactMessage;
use Illuminate\Support\Facades\Route;

Route::middleware([TrackOnlineUser::class, TrackVisits::class])->group(function(){
    Route::view('/', 'site.index')->name('site.index');
    Route::view('/sobre', 'site.about')->name('site.about');
    Route::view('/contato', 'site.contact')->name('site.contact');
    Route::view('/servicos', 'site.services')->name('site.services');
    Route::view('/software', 'site.software')->name('site.software');

    Route::post('/contato', SendContactEmailController::class)->name('site.contact-post');

    Route::view('/teste', 'welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('site-config', SiteConfig::class)->name('site.config');
    Route::get('mensagens-contato', ContactMessage::class)->name('site.contacts-messages');
    Route::view('profile', 'profile')->name('profile');
});




require __DIR__.'/auth.php';
