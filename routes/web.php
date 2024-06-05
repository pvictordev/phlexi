<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FreelancerSkillController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ReviewController;
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
    return view('contact');
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/freelancer', [DashboardController::class, 'freelancer'])->middleware(['auth', 'verified'])->name('freelancer');
Route::get('/dashboard/client', [DashboardController::class, 'client'])->middleware(['auth', 'verified'])->name('client');

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

    Route::get('/market/all', [ProjectController::class, 'index']);
    // show a specific category of projects
    Route::get('/market/{id}', [ProjectController::class, 'category'])->name('market.category');

    Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancer.freelancers');
    Route::get('/freelancers/{id}', [FreelancerController::class, 'show'])->name('freelancer.show');

    // create an offer as a freelancer 
    Route::get('/offer/{id}', [OfferController::class, 'create'])->name('offer.create');
    Route::post('/offer/{id}', [OfferController::class, 'store'])->name('offer.create');

    // see all the offers received from the freelancers as a client and accept/reject them
    Route::get('/offers/received', [OfferController::class, 'show'])->name('offer.show');
    Route::get('/offers/received/{id}', [OfferController::class, 'edit'])->name('offer.edit');
    Route::patch('/offers/received/{id}', [OfferController::class, 'update'])->name('offer.edit');

    // see the accepted offers
    // user should only see this as a freelancer
    Route::get('/offers/accepted', [OfferController::class, 'accepted'])->name('offer.accepted');

    //see all the results
    Route::get('/results', [ResultController::class, 'index'])->name('result.index');
});

// only the users who created an offer for a certain project can submit a result on it (freelancer)
Route::middleware(['auth', 'hasOffer'])->group(function () {
    // submit a result as freelancer
    Route::get('/result/submit/{id}', [ResultController::class, 'create'])->name('result.create');
    Route::post('/result/submit/{id}', [ResultController::class, 'store'])->name('result.create');
});

// only the users who own the project with the result on it can accept or reject these results, leave reviews and make transactions (client)
Route::middleware(['auth', 'isOwner'])->group(function () {
    // accept/reject result as a client
    Route::get('/result/{id}', [ResultController::class, 'edit'])->name('result.edit');
    Route::patch('/result/{id}', [ResultController::class, 'update'])->name('result.edit');

    Route::get('/review/{id}/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/{id}/create', [ReviewController::class, 'store'])->name('review.create');
    Route::get('/review/{id}', [ReviewController::class, 'edit'])->name('review.edit');
    Route::patch('/review/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::delete('/review/{id}/remove', [ReviewController::class, 'destroy'])->name('review.destroy');
});

require __DIR__ . '/auth.php';
