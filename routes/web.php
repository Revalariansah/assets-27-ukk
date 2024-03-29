<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriController;
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
 
// Route::get('/peminjam', function(){
//     return view('minjam.peminjam');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::resource('/peminjam', App\Http\Controllers\PeminjamanController::class);
 
Route::get('/about', [ProfilController::class, 'about'])->name('about');

Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name('register');
        Route::post('register', 'doregister')->name('doregister');
     
        Route::get('login', 'login')->name('login');
        Route::post('login', 'dologin')->name('dologin');     
    });
});
 
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfilController::class, 'userprofile'])->name('profile');

});
Route::middleware('auth')->group(function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::resource('product', ProductController::class);
    // Route::get('/products', [ProductController::class, 'index'])->name('products');
    // Route::get('/products/create', [ProductController::class, 'create'])->name('products/create');
    // Route::post('/products/store', [ProductController::class, 'store'])->name('products/store');
    // Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products/show');
    // Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products/edit');
    // Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products/update');
    // Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products/destroy');
    Route::resource('kategori',KategoriController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('user', UserController::class);
});