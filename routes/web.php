<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FreelancerSkillController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ResultController;
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

// localization route
Route::get('/locale/{lang}', [LocalizationController::class, 'setLang']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $title = 'Contact';
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

    Route::get('/freelancers', [FreelancerController::class, 'index']);
    Route::get('/freelancers/{id}', [FreelancerController::class, 'show'])->name('freelancer.show');

    // create an offer as a freelancer 
    Route::get('/offer/{id}', [OfferController::class, 'index'])->name('offer.create');
    Route::post('/offer/{id}', [OfferController::class, 'store'])->name('offer.create');

    // see the offers received from the freelancer and accept/reject them
    // see all the offers
    Route::get('/offers/client', [OfferController::class, 'show'])->name('offer.show');
    // accept/reject particular offer
    Route::get('/offers/client/{id}', [OfferController::class, 'edit'])->name('offer.edit');
    Route::patch('/offers/client/{id}', [OfferController::class, 'update'])->name('offer.edit');

    // see the offers that you submitted as a freelancer that have response of true (1)
    Route::get('/offers/freelancer', [ResultController::class, 'index'])->name('result.index');

    // submit a result as freelancer
    Route::get('/offers/freelancer/{id}', [ResultController::class, 'create'])->name('result.create');
    Route::post('/offers/freelancer/{id}', [ResultController::class, 'store'])->name('result.create');

    // see all the results
    Route::get('/results/client', [ResultController::class, 'show'])->name('result.show');
    // accept/reject result as a client
    Route::get('/results/client/{id}', [ResultController::class, 'edit'])->name('result.edit');
    Route::patch('/results/client/{id}', [ResultController::class, 'update'])->name('result.edit');

    // see the results that have the status of true (accepted)
    Route::get('/results/freelancer', [ResultController::class, 'success'])->name('result.success');
});

require __DIR__ . '/auth.php';
