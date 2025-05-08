<?php

use App\Models\Menu;
use App\Models\Team;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $reviews = Review::all();
    $menus = Menu::all();
    $teams = Team::all();
    return view('home.index', compact('reviews', 'menus', 'teams'));
});

Route::get('/about', function () {
    $teams = Team::all();
    return view('home.about', compact('teams'));
});

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::get('/menu', [MenuController::class, 'indexFe']);



Route::get('/auth/registration', [AuthController::class, 'registration']);
Route::post('/auth/registration/submit', [AuthController::class, 'submitRegistration'])->name('registration.submit');

Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/admin', function () {
        $reviewsCount = Review::count();
        $menusCount = Menu::count();
        $teamsCount = Team::count();
        return view('admin.index', compact('reviewsCount', 'menusCount', 'teamsCount'));
    });
    
    Route::resource('admin/menu', \App\Http\Controllers\MenuController::class);
    Route::resource('admin/review', \App\Http\Controllers\ReviewController::class);
    Route::resource('admin/team', \App\Http\Controllers\TeamController::class);
    Route::resource('admin/message', \App\Http\Controllers\MessageController::class);
});

// Send Email
// Route::get('home/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('home/contact', [ContactController::class, 'sendEnquiry'])->name('contact.sendEnquiry');


?>

