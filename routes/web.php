<?php

use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* 
====================####################====================
                      Frontend starts
====================####################====================
*/
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/service', [FrontendController::class, 'service']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/blog/details/{id}', [FrontendController::class, 'blog_details'])->name('blog.details');
Route::get('/faq', [FrontendController::class, 'faq']);
Route::get('/contact', [FrontendController::class, 'contact']);
/* 
====================####################====================
                      Frontend ends
====================####################====================
*/


/* 
====================####################====================
                      Backend starts
====================####################====================
*/    
    Route::middleware('auth')->prefix('admin')->group(function () {
        Route::get('/message', [ContactController::class, 'index'])->name('messages');
        Route::post('message', [ContactController::class, 'store'])->name('message_store');
        Route::get('message/{id}', [ContactController::class, 'show'])->name('single_message');


        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('profile', AdminProfileController::class);

        Route::resource('service', ServiceController::class);

        Route::resource('blog', BlogController::class);

        Route::resource('gallery', GalleryController::class);

        Route::resource('category', CategoryController::class);

        Route::resource('team', TeamController::class);

        Route::resource('faq', FaqController::class);
    });

/* 
====================####################====================
                      Backend end
====================####################====================
*/ 

require __DIR__.'/auth.php';
