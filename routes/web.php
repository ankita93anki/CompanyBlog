<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePassController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\FeatureController;
use App\Models\User;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $homeabouts = DB::table('home_abouts')->first();
    $portfolios = DB::table('multipics')->get();
    return view('welcome',compact('brands','homeabouts','portfolios'));
});

Route::get('/home', function () {
    echo "this is home page";
});

Route::get('/about', function () {
    return view('about');
});

//category
Route::get('/category/all',[CategoryController::class, 'allcat'])->name('all.category');
Route::post('/category/store',[CategoryController::class, 'addcat'])->name('store.category');
Route::get('category/edit/{id}',[CategoryController::class, 'edit']);
Route::post('category/update/{id}',[CategoryController::class, 'categoryupdate']);
Route::get('softdelete/category/{id}',[CategoryController::class, 'softdelete']);
Route::get('category/restore/{id}',[CategoryController::class, 'restore']);
Route::get('category/forcedelete/{id}',[CategoryController::class, 'forcedelete']);
 

//For Setup Brand page
Route::get('/brand/all',[BrandController::class, 'allbrand'])->name('all.brand');
Route::post('/brand/store',[BrandController::class, 'storebrand'])->name('store.brand');
Route::get('brand/edit/{id}',[BrandController::class, 'editbrand']);
Route::post('brand/update/{id}',[BrandController::class, 'brandupdate']);
Route::get('brand/delete/{id}',[BrandController::class, 'deletebrand']);

//Multiimage
Route::get('/multiimage/all',[BrandController::class, 'allMultiImage'])->name('all.multiimage');
Route::post('/multiimage/store',[BrandController::class, 'storeMultiImage'])->name('store.multiplepic');

//Admin Slider
Route::get('/home/slider',[HomeController::class, 'homeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class, 'addSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class, 'storeSlider'])->name('store.slider');
Route::get('slider/edit/{id}',[HomeController::class, 'editSlider']);
Route::post('slider/update/{id}',[HomeController::class, 'updateSlider']);
Route::get('slider/delete/{id}',[HomeController::class, 'deleteSlider']);

//Admin Blog
Route::get('/home/blog',[BlogController::class, 'homeBlog'])->name('home.blog');
Route::get('/add/blog',[BlogController::class, 'addBlog'])->name('add.blog');
Route::post('/store/blog',[BlogController::class, 'storeBlog'])->name('store.blog');
Route::get('blog/edit/{id}',[BlogController::class, 'editBlog']);
Route::post('blog/update/{id}',[BlogController::class, 'updateBlog']);
Route::get('blog/delete/{id}',[BlogController::class, 'deleteBlog']);

//Admin Home About Section
Route::get('/home/about',[AboutController::class, 'index'])->name('home.about');
Route::get('/add/home/about',[AboutController::class, 'addAbout'])->name('add.home.about');
Route::post('/store/home/about',[AboutController::class, 'storeAbout'])->name('store.home.about');
Route::get('home/about/edit/{id}',[AboutController::class, 'editAbout']);
Route::post('home/about/update/{id}',[AboutController::class, 'updateAbout']);
Route::get('home/about/delete/{id}',[AboutController::class, 'deleteAbout']);


//Admin Home Service Section
Route::get('/home/service',[ServiceController::class, 'index'])->name('home.service');
Route::get('/add/home/service',[ServiceController::class, 'addService'])->name('add.home.service');
Route::post('/store/home/service',[ServiceController::class, 'storeService'])->name('store.home.service');
Route::get('home/service/edit/{id}',[ServiceController::class, 'editService']);
Route::post('home/service/update/{id}',[ServiceController::class, 'updateService']);
Route::get('home/service/delete/{id}',[ServiceController::class, 'deleteService']);

//Admin Team & Testimonial
Route::get('/team',[TeamController::class, 'index'])->name('admin.team');
Route::post('/team/store',[TeamController::class, 'storeTeam'])->name('store.team');
Route::get('team/edit/{id}',[TeamController::class, 'editTeam']);
Route::post('team/update/{id}',[TeamController::class, 'teamUpdate']);
Route::get('team/delete/{id}',[TeamController::class, 'deleteTeam']);

Route::get('/testimonial',[TestiController::class, 'index'])->name('admin.testi');
Route::post('/testimonial/store',[TestiController::class, 'storeTesti'])->name('store.testi');
Route::get('testimonial/edit/{id}',[TestiController::class, 'editTesti']);
Route::post('testimonial/update/{id}',[TestiController::class, 'testiUpdate']);
Route::get('testimonial/delete/{id}',[TestiController::class, 'deleteTesti']);

//Admin Feature
Route::get('/feature',[FeatureController::class, 'index'])->name('admin.feature');
Route::post('/feature/store',[FeatureController::class, 'storeFeature'])->name('store.feature');
Route::get('feature/edit/{id}',[FeatureController::class, 'editFeature']);
Route::post('feature/update/{id}',[FeatureController::class, 'featureUpdate']);
Route::get('feature/delete/{id}',[FeatureController::class, 'deleteFeature']);


//Portfolio
Route::get('/portfolio',[AboutController::class, 'portfolio'])->name('portfolio');


//Admin Contact
Route::get('/admin/contact',[ContactController::class, 'adminContact'])->name('admin.contact'); 
Route::get('/admin/add/contact',[ContactController::class, 'adminAddContact'])->name('add.contact');
Route::post('admin/store/contact',[ContactController::class, 'storeContact'])->name('store.contact');
Route::get('admin/contact/edit/{id}',[ContactController::class, 'editContact']);
Route::post('admin/contact/update/{id}',[ContactController::class, 'updateContact']);
Route::get('admin/contact/delete/{id}',[ContactController::class, 'deleteContact']);

Route::get('/admin/contact/message',[ContactController::class, 'contactMessage'])->name('admin.contact.message');
Route::get('admin/message/contact/delete/{id}',[ContactController::class, 'deleteContactMessage']);

//Home Contact
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::post('/contact/form',[ContactController::class, 'contactForm'])->name('contact.form');

//Home aboutus
Route::get('/home/aboutus',[FrontController::class, 'aboutus'])->name('home.aboutus');
Route::get('/home',[FrontController::class, 'home'])->name('homepage');

//home team and testimonials
Route::get('/home/team',[FrontController::class, 'homeTeam'])->name('home.team');
Route::get('/home/testimonials',[FrontController::class, 'homeTesti'])->name('home.testi');

//home services
Route::get('/home/services',[FrontController::class, 'homeServices'])->name('home.services');

//home blogs
Route::get('/home/blogs',[FrontController::class, 'blogs'])->name('blogs');
Route::get('pages/blog/edit/{id}',[FrontController::class, 'blogsSelected']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   // $users = User::all();
    $users = DB::table('users')->count();
    $contact_form = DB::table('contact_forms')->count();
    $testis = DB::table('testis')->count();
    $testist = DB::table('testis')->get();
    return view('admin.index',compact('users','contact_form','testis','testist'));
})->name('dashboard');

Route::get('/user/logout',[BrandController::class, 'logout'])->name('user.logout');

//Change Passsword
Route::get('/user/password',[ChangePassController::class, 'cPass'])->name('change.password');
Route::post('/password/update',[ChangePassController::class, 'updatePassword'])->name('password.update');

//user profile
Route::get('/user/profile',[ChangePassController::class, 'pUpdate'])->name('profile.update');
Route::post('/user/password/update',[ChangePassController::class, 'updateProfile'])->name('update.user.profile');
