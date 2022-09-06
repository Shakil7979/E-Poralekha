<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\blogController; 
use App\Http\Controllers\adminHomeController;
use App\Http\Controllers\post_controller;  
use App\Http\Controllers\site_setting_controller;
use App\Http\Controllers\panel_setting_controller;
use App\Http\Controllers\homePageSettingsController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\login_controller; 
use App\Http\Controllers\mailController; 

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

// front end website route 
Route::get('/', [HomeController::class, 'HomeIndex']); // Home page  
Route::get('/services', [HomeController::class, 'ServicesPage']); // Services Page 
Route::get('/about', [HomeController::class, 'AboutPage']); // AboutPage Page 
Route::get('/gallery', [HomeController::class, 'GalleryPage']); // GalleryPage Page 
Route::get('/message', [HomeController::class, 'messagePage']); // GalleryPage Page 
// dianamic page menu route 
Route::prefix('/menu')->group(function () { //news Routs 
    Route::get('{menu_name}', [pageController::class,'menuName']);   
    
}); 


Route::get('/blog', [blogController::class, 'allBlog']); // BlogPage Page 
Route::get('/blog/cat_post/{cat}', [blogController::class, 'catBlog']); // BlogPage Page 
Route::get('/blog/tag_post/{tag}', [blogController::class, 'tagBlog']); // BlogPage Page 
Route::get('/single-blog/{post_id}', [blogController::class, 'singleBlog']); // BlogPage Page 
Route::get('/single-blog/{post_id}/cat_post/{cat}', [blogController::class, 'singleCatBlog']); // BlogPage Page 
Route::get('/single-blog/{post_id}/tag_post/{tag}', [blogController::class, 'singleTagBlog']); // BlogPage Page 


Route::get('/single-services/{s_id}', [HomeController::class, 'singleServices']); // single services

Route::get('/contact', [HomeController::class, 'ContactPage']); // ContactPage Page  



// dashboard route 

Route::get('/administrator', [adminHomeController::class, 'homeIndex'])->middleware('loginCheck'); // Dashboard page 

// blog route 
Route::prefix('/administrator/news')->group(function () { //news Routs
    Route::get('/posts',[post_controller::class,'allPostIndex'])->middleware('loginCheck');
    Route::get('/create-post', [post_controller::class,'createPost'])->middleware('loginCheck');
    Route::get('/create-post', [post_controller::class,'postCategoriesShow'])->middleware('loginCheck');
    Route::post('/insert-post', [post_controller::class,'insertPost'])->middleware('loginCheck'); //axios post insert  
    Route::get('/update-post/edit/{post_id}', [post_controller::class,'updatePost'])->middleware('loginCheck');
    Route::post('/update-post-insert', [post_controller::class,'updatePostInsert'])->middleware('loginCheck');//axios update post insert 
    Route::get('/delete-post/delete/{post_id}', [post_controller::class,'deletePost'])->middleware('loginCheck');  

    Route::get('/pages', [pageController::class,'allPages'])->middleware('loginCheck');//axios update post insert 
    Route::get('/create-page', [pageController::class,'createPage'])->middleware('loginCheck');  
    Route::get('/create-page/delete-menu/{menu_id}', [pageController::class,'menuDelete'])->middleware('loginCheck');  
    Route::post('/create-page', [pageController::class,'insertPage'])->middleware('loginCheck');  
    Route::get('/update-page/edit/{post_id}', [pageController::class,'updatePage'])->middleware('loginCheck');  
    Route::post('/update-page-insert', [pageController::class,'updatePageInsert'])->middleware('loginCheck');//axios update post insert 
    Route::get('/delete-page/delete/{post_id}', [pageController::class,'deletePage'])->middleware('loginCheck');//axios update post insert 

    Route::get('/post-categories', [post_controller::class,'postCategories'])->middleware('loginCheck');
    Route::get('/post-categories/edit/{cat_id}', [post_controller::class,'editPostCategories'])->middleware('loginCheck'); // edit post category page 
    Route::get('/post-categories/delete/{cat_id}', [post_controller::class,'deletePostCategories'])->middleware('loginCheck'); // delete post category 
    Route::post('/insert-category', [post_controller::class,'insertCategory'])->middleware('loginCheck'); //axios insert category 
    Route::post('/update-category', [post_controller::class,'updateCategory'])->middleware('loginCheck'); //axios insert category 

    Route::get('/post-tags', [post_controller::class,'postTags'])->middleware('loginCheck'); 
    Route::post('/insert-tag', [post_controller::class,'insertTags'])->middleware('loginCheck'); //axios insert tags  
    
}); 

// settings route 
Route::prefix('/administrator/settings')->group(function () { // Settings route group 
    Route::get('/site_setting', [site_setting_controller::class,'siteSettingView'])->middleware('loginCheck');
    Route::post('/update_Site_setting', [site_setting_controller::class,'updateSiteSetting'])->middleware('loginCheck');

    // header 
    Route::get('/headers', [site_setting_controller::class,'headers'])->middleware('loginCheck');
    Route::post('/header-setting-add', [site_setting_controller::class,'headerSettingsAdd'])->middleware('loginCheck'); 
    Route::post('/add-menu-add', [site_setting_controller::class,'addMenuAdd'])->middleware('loginCheck');

    // footer 
    Route::get('/footers', [site_setting_controller::class,'footers'])->middleware('loginCheck');
    Route::post('/footer-insert', [site_setting_controller::class,'footerInsert'])->middleware('loginCheck');

    Route::get('/panel_face', [panel_setting_controller::class,'panelFaceView'])->middleware('loginCheck');
    Route::post('/update_panel_face', [panel_setting_controller::class,'updatePanelFace'])->middleware('loginCheck');
    Route::get('/manage_news', function () {
        return view('manageNews');
    })->middleware('loginCheck'); 
});

// home page setting route
Route::prefix('/administrator/home')->group(function () { // Settings route group 
    Route::get('/banner-section', [homePageSettingsController::class,'bannerSection'])->middleware('loginCheck');    
    Route::post('/banner-section-add', [homePageSettingsController::class,'bannerSectionAdd'])->middleware('loginCheck'); //Banner section change content
    Route::get('/banner-item', [homePageSettingsController::class,'bannerItem'])->middleware('loginCheck');    
    Route::get('/delete-item', [homePageSettingsController::class,'bannerItem'])->middleware('loginCheck');    
    Route::post('/banner-section-item', [homePageSettingsController::class,'bannerItemAdd'])->middleware('loginCheck'); //Banner item change content
    Route::get('/about-us', [homePageSettingsController::class,'aboutUs'])->middleware('loginCheck'); 
    Route::post('/about-us-add', [homePageSettingsController::class,'aboutUsAdd'])->middleware('loginCheck'); //home page about page
    Route::get('/parents-say', [homePageSettingsController::class,'parentsSay'])->middleware('loginCheck'); 
    Route::post('/parents-say-add', [homePageSettingsController::class,'parentsSayAdd'])->middleware('loginCheck'); //parents say ajax
    Route::get('/delete_comments/{p_id}', [homePageSettingsController::class,'parentsSayDelete'])->middleware('loginCheck'); //parents say comments delete
    Route::get('/features', [homePageSettingsController::class,'features'])->middleware('loginCheck'); 
    Route::post('/features-add', [homePageSettingsController::class,'featuresAdd'])->middleware('loginCheck'); //feature ajax
    Route::get('/services', [homePageSettingsController::class,'services'])->middleware('loginCheck'); 
    Route::post('/services-add', [homePageSettingsController::class,'servicesAdd'])->middleware('loginCheck'); //feature ajax
    Route::get('/team', [homePageSettingsController::class,'team'])->middleware('loginCheck'); 
    Route::post('/team-add', [homePageSettingsController::class,'teamAdd'])->middleware('loginCheck'); //feature ajax
    Route::get('/delete-team/{t_id}', [homePageSettingsController::class,'teamDelete'])->middleware('loginCheck'); //feature ajax
    
    Route::get('/contact', [mail_controller::class,'contact']); 
    // send mail 
    Route::post('/send-email', [mailController::class,'sendMail'])->name('send.email');

    Route::get('/gallery', [homePageSettingsController::class,'gallery'])->middleware('loginCheck'); 
    Route::post('/gallery-add', [homePageSettingsController::class,'galleryAdd'])->middleware('loginCheck'); //gallery ajax
}); 

// login route 
Route::get('/administrator/login',[login_controller::class,'adminLogin'])->middleware('loginCheckForLoginPage');
Route::post('/administrator/onAdminLogin',[login_controller::class,'onAdminLogin'])->middleware('loginCheckForLoginPage');
Route::get('/administrator/logout',[login_controller::class,'onAdminLogOut']);

