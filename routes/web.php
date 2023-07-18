<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Frontend
// GET routes
$optionalLanguageRoutes = function() {
    $locale = request()->segment(1) == 'ua' ? 'ua' : 'en';
    app()->setLocale($locale);

    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/sites', [FrontendController::class, 'sites'])->name('sites');
    Route::get('/bots', [FrontendController::class, 'bots'])->name('bots');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/{slug}', [FrontendController::class, 'page'])->name('page');
};

// POST routes
Route::group([
    'as' => 'front.',
    // 'namespace' => 'Front'
], function() {
  Route::post('/email', [FrontendController::class, 'email'])->name('email');
});

Route::group([
    'prefix' => 'ua',
    'as' => 'ua.front.',
    // 'namespace' => 'Front'
],$optionalLanguageRoutes);

Route::group([
    'as' => 'front.',
    // 'namespace' => 'Front'
], $optionalLanguageRoutes);