<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerPromotionController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentAccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/scrap/provider', [GameController::class, 'getProvider']);
Route::get('/scrap/games', [GameController::class, 'getProviderGames']);
Route::post('/process/login', [AuthController::class, 'login']);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/setting/general', [GeneralSettingController::class, 'index'])->name('setting.general');
Route::post('/setting/general/save', [GeneralSettingController::class, 'saveSettings'])->name('setting.general.save');
Route::get('/member/list', [MemberController::class, 'index'])->name('member.list');

Route::get('/payment/list', [PaymentController::class, 'index'])->name('payment.list');
Route::get('/payment/generate', [PaymentController::class, 'generatePayment'])->name('payment.generate');

Route::get('/payment-account/list', [PaymentAccountController::class, 'index'])->name('paymentaccount.list');
Route::post('/payment-account/save', [PaymentAccountController::class, 'store'])->name('paymentaccount.store');
Route::get('/payment-account/toggle/{a}', [PaymentAccountController::class, 'toggleAccountStatus'])->name('paymentaccount.toggle');
Route::post('/payment-account/update/{a}', [PaymentAccountController::class, 'update'])->name('paymentaccount.update');


Route::get('/promotion/banner/list', [BannerPromotionController::class, 'index'])->name('bannerpromotion.list');
Route::post('/promotion/banner/save', [BannerPromotionController::class, 'store'])->name('bannerpromotion.store');
Route::post('/promotion/banner/update/{a}', [BannerPromotionController::class, 'update'])->name('bannerpromotion.update');

Route::get('/promotion/list', [PromotionController::class, 'index'])->name('promotion.list');
Route::get('/promotion/create', [PromotionController::class, 'create'])->name('promotion.create');
Route::post('/promotion/store', [PromotionController::class, 'store'])->name('promotion.store');
Route::post('/ckeditor/upload', [CkeditorController::class, 'uploadImage'])->name('posts.uploadImage');