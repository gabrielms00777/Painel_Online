<?php

// auth()->loginUsingId(1);

use App\Http\Controllers\SendContactEmailController;
use App\Http\Middleware\TrackOnlineUser;
use App\Http\Middleware\TrackVisits;
use App\Livewire\Admin\ContactMessage;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Profile;
use App\Livewire\Admin\SiteConfig;
use App\Livewire\Admin\User;
use App\Livewire\Admin\Software;
use App\Mail\ContactMessageReceived;
use App\Mail\TesteMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::middleware([TrackOnlineUser::class, TrackVisits::class])->group(function(){
    Route::view('/', 'site.index')->name('site.index');
    Route::view('/sobre', 'site.about')->name('site.about');
    Route::view('/contato', 'site.contact')->name('site.contact');
    Route::view('/servicos', 'site.services')->name('site.services');
    Route::view('/software', 'site.software')->name('site.software');

    Route::post('/contato', SendContactEmailController::class)->name('site.contact-post');
    // Route::post('/contato', function(Request $request){
    //     $email = $request->get('email');

    //     // return new TesteMail;
    //     Mail::to('admin@admin')->send(new TesteMail());
    // })->name('site.contact-post');

    Route::view('/teste', 'welcome');
});


Route::middleware('auth')->group(function(){
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('site-config', SiteConfig::class)->name('site.config');
    Route::get('mensagens-contato', ContactMessage::class)->name('site.contacts-messages');

    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('users', User\Index::class)->name('users.index');
    Route::get('users/create', User\Create::class)->name('users.create');
    Route::get('users/{user}/edit', User\Edit::class)->name('users.edit');
    Route::get('softwares', Software\Index::class)->name('softwares.index');
    Route::get('softwares/create', Software\Create::class)->name('softwares.create');
    Route::get('softwares/{user}/edit', Software\Edit::class)->name('softwares.edit');

    Route::get('profile', Profile::class)->name('profile');

    Route::get('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    })->name('logout');
});

require __DIR__.'/auth.php';
