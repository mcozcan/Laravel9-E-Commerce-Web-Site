<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\AdminPanel\Ordercontroller;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\UserController;
use App\Models\ShopCart;

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


//****************************ADMİN PANEL *///////////////////////////////////////////////
Route::middleware('auth')->group(function() {

    Route::prefix('userpanel')->name('userpanel.')->group(function() {
        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/reviews',[UserController::class,'reviews'])->name('reviews');
        Route::get('/commentdestroy/{id}',[UserController::class,'commentdestroy'])->name('commentdestroy');
        Route::get('/orders',[UserController::class,'orders'])->name('orders');
        Route::get('/orderdetail/{id}',[UserController::class,'orderdetail'])->name('orderdetail');
    });

    Route::prefix('/shopcart')->group(function() {
        Route::get('/',[ShopCartController::class,'index'])->name('shopcart');
        Route::get('/create',[ShopCartController::class,'create'])->name('shopcart.create');
        Route::post('/store',[ShopCartController::class,'store'])->name('shopcart.store');
        Route::get('/add/{id}',[ShopCartController::class,'add'])->name('shopcart.add');   
        Route::post('/update/{id}',[ShopCartController::class,'update'])->name('shopcart.update');
        Route::get('/show/{id}',[ShopCartController::class,'show'])->name('shopcart.show');
        Route::get('/destroy/{id}',[ShopCartController::class,'destroy'])->name('shopcart.destroy');
        Route::post('/order',[ShopCartController::class,'order'])->name('shopcart.order');
        Route::post('/storeorder',[ShopCartController::class,'storeorder'])->name('shopcart.storeorder');
        Route::get('/ordercomplete',[ShopCartController::class,'ordercomplete'])->name('shopcart.ordercomplete');


    });

Route::middleware('admin')->prefix('adminpanel')->group(function() {

    Route::get('/',[AdminHomeController::class,'index'])->name('admin');
    Route::get('/setting',[AdminHomeController::class,'setting'])->name('adminpanel.setting');
    Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('adminpanel.setting.update');
   
    //****************************ADMİN CATEGORY *///////////////////////////////////////////////
Route::prefix('category')->group(function() {
    Route::get('/',[CategoryController::class,'index'])->name('adminpanel.category');
    Route::get('/create',[CategoryController::class,'create'])->name('adminpanel.category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('adminpanel.category.store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('adminpanel.category.edit');   
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('adminpanel.category.update');
    Route::get('/show/{id}',[CategoryController::class,'show'])->name('adminpanel.category.show');
    Route::get('/destroy/{id}',[CategoryController::class,'destroy'])->name('adminpanel.category.destroy');
});



Route::prefix('/comment')->group(function() {
    Route::get('/',[CommentController::class,'index'])->name('adminpanel.comment');
    Route::get('/show/{id}',[CommentController::class,'show'])->name('adminpanel.comment.show');
    Route::get('/destroy/{id}',[CommentController::class,'destroy'])->name('adminpanel.comment.destroy');
});

Route::prefix('/message')->group(function() {
    Route::get('/',[MessageController::class,'index'])->name('adminpanel.message');
    Route::get('/show/{id}',[MessageController::class,'show'])->name('adminpanel.message.show');
    Route::get('/destroy/{id}',[MessageController::class,'destroy'])->name('adminpanel.message.destroy');
});

Route::prefix('/user')->group(function() {
    Route::get('/',[AdminUserController::class,'index'])->name('adminpanel.user');
    Route::get('/show/{id}',[AdminUserController::class,'show'])->name('adminpanel.user.show');
    Route::post('/addrole/{id}',[AdminUserController::class,'addrole'])->name('adminpanel.user.addrole');  
    Route::get('/destroy/{id}',[AdminUserController::class,'destroy'])->name('adminpanel.user.destroy');
});
    //****************************ADMİN ORDERS *///////////////////////////////////////////////

Route::prefix('/order')->group(function() {
    Route::get('/{slug}',[Ordercontroller::class,'index'])->name('adminpanel.order');
    Route::get('show/{id}',[Ordercontroller::class,'show'])->name('adminpanel.order.show');
    Route::post('/update/{id}',[Ordercontroller::class,'update'])->name('adminpanel.order.update');
    Route::post('/aprove/{id}',[Ordercontroller::class,'aprove'])->name('adminpanel.order.aprove');
    Route::post('/cancel/{id}',[Ordercontroller::class,'cancel'])->name('adminpanel.order.cancel');  
    
    Route::get('/create',[AdminProductController::class,'create'])->name('adminpanel.product.create');
    Route::post('/store',[Ordercontroller::class,'store'])->name('adminpanel.order.store');
    Route::get('/edit/{id}',[AdminProductController::class,'edit'])->name('adminpanel.product.edit');   


    Route::get('/destroy/{id}',[AdminProductController::class,'destroy'])->name('adminpanel.product.destroy');
});

    //****************************ADMİN PRODUCT *///////////////////////////////////////////////
Route::prefix('/product')->group(function() {
    Route::get('/',[AdminProductController::class,'index'])->name('adminpanel.product');
    Route::get('/create',[AdminProductController::class,'create'])->name('adminpanel.product.create');
    Route::post('/store',[AdminProductController::class,'store'])->name('adminpanel.product.store');
    Route::get('/edit/{id}',[AdminProductController::class,'edit'])->name('adminpanel.product.edit');   
    Route::post('/update/{id}',[AdminProductController::class,'update'])->name('adminpanel.product.update');
    Route::get('/show/{id}',[AdminProductController::class,'show'])->name('adminpanel.product.show');
    Route::get('/destroy/{id}',[AdminProductController::class,'destroy'])->name('adminpanel.product.destroy');
});

    //****************************ADMİN IMAGE *///////////////////////////////////////////////
    Route::prefix('/image')->group(function() {
        Route::get('/{pid}',[ImageController::class,'index'])->name('adminpanel.image');
        Route::post('/store/{pid}',[ImageController::class,'store'])->name('adminpanel.image.store');
        Route::post('/update/{pid}/{id}',[ImageController::class,'update'])->name('adminpanel.image.update');
        Route::get('/destroy/{pid}/{id}',[ImageController::class,'destroy'])->name('adminpanel.image.destroy');
    });

        //****************************ADMİN Settings *///////////////////////////////////////////////
   
    
    });

});



Route::get('/logoutadmin',[AdminHomeController::class,'logout'])->name('adminpanel.logout');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('home.loginadmincheck');
Route::view('/loginadminpanel','admin.login')->name('loginadminpanel');


Route::get('/', function () {
    return view('hello');
});
// Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

// Controller View
Route::get('/test',[HomeController::class,'test'])->name('test');

//  5
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//  6
Route::post('/save',[HomeController::class,'save'])->name('save');
Route::get('/references',[HomeController::class,'references'])->name('home.references');
Route::get('/contactus',[HomeController::class,'contactus'])->name('home.contactus');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('home.storemessage');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('home.aboutus');
Route::get('/faq',[HomeController::class,'faq'])->name('home.faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])->name('home.storecomment');

Route::get('/product/{id}',[HomeController::class,'product'])->name('product');

Route::prefix('/categoryproduct')->group(function() {
    Route::get('/{id}',[HomeController::class,'categoryproduct'])->name('categoryproduct');
});

Route::view('/loginuser','home.login');
Route::view('/registeruser','home.register');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');

Route::middleware([

    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
