<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardAccommodationController;
use App\Http\Controllers\DashboardServiceController;
use App\Http\Controllers\DashboardPromotionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardExploreController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\CKEditorController;

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth
Route::get('dashboard/login', [DashboardController::class, 'login'])->name('dashboard.login');
Route::post('dashboard/checkLogin', [DashboardController::class, 'checkLogin'])->name('dashboard.checkLogin');
Route::get('dashboard/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');

// Dashboard
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::resource('gallery', DashboardGalleryController::class);
        Route::resource('explores', DashboardExploreController::class);
        Route::resource('promotions', DashboardPromotionController::class);
        Route::resource('services', DashboardServiceController::class);
        Route::resource('accommodations', DashboardAccommodationController::class);
        Route::post('ckeditor-upload', [CKEditorController::class, 'ckeditorUploadImage'])->name('ckeditor.upload');
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::post('/upload-image-home', [DashboardController::class, 'uploadImageHome'])->name('dashboard.uploadImageHome');
    });
});

// Accommodation
Route::get('accommodations', [AccommodationController::class, 'index'])->name('accommodations.index');
Route::get('accommodations/{slug}', [AccommodationController::class, 'show'])->name('accommodations.show');
// Service
Route::get('services/{slug}', [ServiceController::class, 'show'])->name('services.show');
// Promotion
Route::get('promotions', [PromotionController::class, 'index'])->name('promotions.index');
Route::get('promotions/{slug}', [PromotionController::class, 'show'])->name('promotions.show');
// Explore
Route::get('explores/{slug}', [ExploreController::class, 'show'])->name('explores.show');
// Gallery
Route::get('galleries', [GalleryController::class, 'index'])->name('galleries.index');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'vi', 'cn', 'ru'])) {
        abort(400);
    }
    session()->put('locale', $locale);
    return redirect()->back();

    //
});
Route::get('/RoomAvailable', [HomeController::class, 'create']);
Route::post('/email', [HomeController::class, 'sendEmail'])->name('send.email');
Route::get('/home/overview', function () {
    return view('GioiThieu.GioiThieu');
});

// Loại phòng



// Route::get('room/Deluxe-city-view', [HomeController::class, 'gotoRoomPage1']);
// Route::get('room/premier-deluxe-city', [HomeController::class, 'gotoRoomPage2']);
// Route::get('room/senior-deluxe-room', [HomeController::class, 'gotoRoomPage3']);
// Route::get('room/deluxe-family-room', [HomeController::class, 'gotoRoomPage4']);
// Route::get('room/executive-family', [HomeController::class, 'gotoRoomPage5']);
// Route::get('room/balcony-signature', [HomeController::class, 'gotoRoomPage6']);
// Route::get('room/triple-city-view', [HomeController::class, 'gotoRoomPage7']);
// Route::get('room/king-family-suite', [HomeController::class, 'gotoRoomPage8']);
// Dịch vụ
// Route::get('/meeting-function/Services', [HomeController::class, 'Services']);
// Route::get('/meeting-function/restaurant', [HomeController::class, 'restaurant']);
// Khuyến mãi

// Route::get('/promotions/{slug}', [HomeController::class, 'viewPromotion'])->name('viewPromotion');
// Route::get('/promotions', [HomeController::class, 'KhuyenMai']);
// Route::get('/promotion/eternity-honeymoon-package', [HomeController::class, 'KhuyenMai1']);

// khám phá 
// Route::get('/explores/{slug}', [HomeController::class, 'viewExplore'])->name('viewExplore');
Route::get('/locations/diep-son-nha-trang', [HomeController::class, 'DiepSonNhaTrang']);
Route::get('/locations/10-mon-ngon', [HomeController::class, 'TenFood']);
Route::get('/locations/nha-trang-speciality-can-cake', [HomeController::class, 'NhaTrangSpecialityCanCake']);
Route::get('/locations/tourist-attractions-nha-trang', [HomeController::class, 'TouristAttractionsNhaTrang']);
Route::get('/locations/bo-nuong-lac-canh', [HomeController::class, 'BoNuongLacCanh']);
Route::get('/locations/vinh-cam-ranh', [HomeController::class, 'VinhCamRanh']);
Route::get('/locations/bai-dai', [HomeController::class, 'BaiDai']);
// Thư viện hình ảnh
// Route::get('/gallery', [HomeController::class, 'gallery']);
// Route::get('/galleries/balcony-hotel-reception', [HomeController::class, 'gallery1']);
// Route::get('/galleries/balcony-hotel-restaurant', [HomeController::class, 'gallery2']);
// Route::get('/galleries/balcony-hotel-service', [HomeController::class, 'gallery3']);
// Route::get('/galleries/balcony-hotel-accommodation-block-a', [HomeController::class, 'gallery4']);
// Route::get('/galleries/balcony-hotel-accommodation-block-b', [HomeController::class, 'gallery5']);
// Đặt phòng

// Route::get('/RoomAvailable', function () {
//     return view('DatPhong.DatPhong1');
// });
// // Dịch vụ
// Services
// restaurant
// // Khuyến mãi
// EternityHoneymoonPackage
// // khám phá 
// DiepSonNhaTrang
// TenFood
// NhaTrangSpecialityCanCake
// TouristAttractionsNhaTrang
// BoNuongLacCanh
// VinhCamRanh
// BaiDai
// // Thư viện hình ảnh
// gallery