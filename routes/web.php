<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Backend\AuthController;

use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\Backend\PortfolioController;

use App\Http\Controllers\Backend\BlogController;

use App\Http\Controllers\Backend\SocialIconController;

use App\Http\Controllers\Backend\MyAccountController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('about', [HomeController::class, 'about']);


Route::get('portfolio', [HomeController::class, 'portfolio']);

Route::get('contact', [HomeController::class, 'contact']);

Route::get('blog', [HomeController::class, 'blog']);

Route::get('newsletter', [HomeController::class, 'newsletter']);


Route::get('blog-post/{id}', [HomeController::class, 'blog_post']);


Route::post('contact/post', [HomeController::class, 'contact_post']);













Route::get('login', [AuthController::class, 'login']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('login_admin', [AuthController::class, 'login_admin']);

Route::get('logout', [AuthController::class, 'logout']);

Route::post('forgot_admin', [AuthController::class, 'forgot_admin']);






Route::group(['middleware' => 'admin'], function(){


Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

Route::get('admin/home', [DashboardController::class, 'admin_home']);

Route::post('admin/home/post', [DashboardController::class, 'admin_home_post']);

Route::get('admin/about', [DashboardController::class, 'admin_about']);

Route::post('admin/about/post', [DashboardController::class, 'admin_about_post']);

Route::get('admin/experience', [DashboardController::class, 'admin_experience']);

Route::post('admin/experience/post', [DashboardController::class, 'admin_experience_post']);

Route::get('admin/portfolio', [DashboardController::class, 'admin_portfolio']);



Route::get('admin/contact', [DashboardController::class, 'admin_contact']);


Route::get('admin/contact/delete/{id}', [DashboardController::class, 'admin_contact_delete']);


Route::get('admin/blog', [DashboardController::class, 'admin_blog']);

Route::get('admin/blog/add', [BlogController::class, 'admin_blog_add']);

Route::post('admin/blog/add', [BlogController::class, 'admin_blog_add_post']);


Route::get('admin/blog/edit/{id}', [BlogController::class, 'admin_blog_edit']);


Route::post('admin/blog/edit/{id}', [BlogController::class, 'admin_blog_update']);

Route::get('admin/blog/delete/{id}', [BlogController::class, 'admin_blog_delete']);





Route::get('admin/portfolio/add', [PortfolioController::class, 'portfolio_add']);

Route::post('admin/portfolio/add', [PortfolioController::class, 'portfolio_add_post']);

Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'admin_portfolio_edit']);

Route::post('admin/portfolio/edit/{id}', [PortfolioController::class, 'admin_portfolio_edit_post']);

Route::get('admin/portfolio/delete/{id}', [PortfolioController::class, 'admin_portfolio_delete']);


Route::get('admin/social_icon', [SocialIconController::class, 'admin_social_icon']);


Route::post('admin/social_icon/update/{id}', [SocialIconController::class, 'admin_social_icon_update']);



Route::get('admin/my_account', [MyAccountController::class, 'admin_my_account']);


Route::post('admin/my_account/update', [MyAccountController::class, 'my_account_update'] );




});









