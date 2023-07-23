<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\BotController;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {return redirect('/admin/site')->with('info', 'Welcome Back');})->name('dashboard');
    Route::get('/admin', function() {return redirect('/admin/site');});

    /* Admin */
    Route::put('/admin/change-order', [AdminController::class, 'changeOrder'])->name('admin.change-order');
    Route::put('/admin/toggle-show', [AdminController::class, 'toggleShow'])->name('admin.toggle-show');
    Route::delete('/admin/destroy-image/{image}', [AdminController::class, 'destroyImage'])->name('admin.image.destroy');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* Site */
    Route::get('/admin/site', [SiteController::class, 'index'])->name('admin.site.index');
    Route::post('/admin/site', [SiteController::class, 'create'])->name('admin.site.create');
    Route::get('/admin/site/{site}', [SiteController::class, 'edit'])->name('admin.site.edit');
    Route::put('/admin/site/{site}', [SiteController::class, 'update'])->name('admin.site.update');
    Route::delete('/admin/site/{site}', [SiteController::class, 'destroy'])->name('admin.site.destroy');

    /* Bot */
    Route::get('/admin/bot', [BotController::class, 'index'])->name('admin.bot.index');
    Route::post('/admin/bot', [BotController::class, 'create'])->name('admin.bot.create');
    Route::get('/admin/bot/{bot}', [BotController::class, 'edit'])->name('admin.bot.edit');
    Route::put('/admin/bot/{bot}', [BotController::class, 'update'])->name('admin.bot.update');
    Route::delete('/admin/bot/{bot}', [BotController::class, 'destroy'])->name('admin.bot.destroy');
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
