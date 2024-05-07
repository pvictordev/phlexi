<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FreelancerSkillController;
use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/project', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/{id}/edit', [ProjectController::class, 'update'])->name('project.edit');
    Route::delete('/project/{id}/remove', [ProjectController::class, 'destroy'])->name('project.destroy');

    Route::get('/skill', [FreelancerSkillController::class, 'create'])->name('skill.create');
    Route::post('/skill', [FreelancerSkillController::class, 'store'])->name('skill.create');
    Route::get('/skill/{id}/remove', [FreelancerSkillController::class, 'remove'])->name('skill.destroy');
    Route::delete('/skill/{id}/remove', [FreelancerSkillController::class, 'destroy'])->name('skill.destroy');

    Route::get('/freelancer/{id}/edit', [FreelancerController::class, 'edit'])->name('freelancer.edit');
    Route::put('/freelancer/{id}/edit', [FreelancerController::class, 'update'])->name('freelancer.update');

    Route::get('/market', [ProjectController::class, 'show']);
});

require __DIR__ . '/auth.php';
