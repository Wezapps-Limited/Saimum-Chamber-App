<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\FrontendController;
use App\Http\Controllers\Client\ShoppingCartManageController;
use App\Http\Controllers\Client\CustomerRegistrationLoginController;
use App\Http\Controllers\Client\PaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



//Route::get('/', [FrontendController::class, 'MainIndex'])->name('MainIndex');
Route::get('/', [FrontendController::class, 'Index'])->name('Index');



Route::post('subscriber', [FrontendController::class, 'Subscriber'])->name('Subscriber');


route::get('hosting_vps',[FrontendController::class,'hosting_vps'])->name('hosting_vps');
route::get('app_development',[FrontendController::class,'app_development'])->name('app_development');
route::get('software_development',[FrontendController::class,'software_development'])->name('software_development');
route::get('website-design-development',[FrontendController::class,'website_design_development'])->name('website_design_development');
route::get('career',[FrontendController::class,'Career'])->name('Career');
// route::get('disclaimer',[FrontendController::class,'disclaimer'])->name('disclaimer');
// route::get('refund_policy',[FrontendController::class,'refund_policy'])->name('refund_policy');
// route::get('cookie_policy',[FrontendController::class,'Cookie_policy'])->name('Cookie_policy');
// route::get('terms_and_conditions',[FrontendController::class,'Terms_and_conditions'])->name('Terms_and_conditions');
// route::get('privacy-policy',[FrontendController::class,'PrivacyPolicy'])->name('PrivacyPolicy');
route::get('press-kit',[FrontendController::class,'PressKit'])->name('PressKit');
route::get('client',[FrontendController::class,'Client'])->name('Client');
route::get('search',[FrontendController::class,'Search'])->name('Search');
route::get('about',[FrontendController::class,'About'])->name('About');
route::get('payment',[FrontendController::class,'Payment'])->name('Payment');
route::get('portfolio',[FrontendController::class,'Portfolio'])->name('Portfolio');
route::get('news',[FrontendController::class,'News'])->name('News');
route::get('news-details/{slug}',[FrontendController::class,'NewsDetails'])->name('NewsDetails');
route::get('blog',[FrontendController::class,'Blog'])->name('Blog');
route::get('blog-details/{slug}',[FrontendController::class,'BlogDetails'])->name('BlogDetails');
route::get('gallery',[FrontendController::class,'Gallery'])->name('Gallery');
route::get('videos',[FrontendController::class,'Video'])->name('Video');
// route::get('album-gallery/{cat_id}',[FrontendController::class,'GalleryAlbum'])->name('GalleryAlbum');

route::get('single-visa/{slug}',[FrontendController::class,'SingleVisa'])->name('SingleVisa');
route::get('single-expertise/{slug}',[FrontendController::class,'SingleExpertise'])->name('SingleExpertise');


route::get('expert-list',[FrontendController::class,'AllExpertList'])->name('AllExpertList');

route::get('testimonial-list',[FrontendController::class,'TestimonialList'])->name('TestimonialList');

route::get('privacy-policy',[FrontendController::class,'PrivacyPolicy'])->name('PrivacyPolicy');
route::get('cookie-policy',[FrontendController::class,'CookiePolicy'])->name('CookiePolicy');
route::get('terms-of-service',[FrontendController::class,'TermsOfService'])->name('TermsOfService');
route::get('disclaimer',[FrontendController::class,'Disclaimer'])->name('Disclaimer');


route::get('contact',[FrontendController::class,'Contact'])->name('Contact');
route::post('join-us-store',[FrontendController::class,'JoinUsPost'])->name('JoinUsPost');
route::post('contact-form-store',[FrontendController::class,'ContactUsFormPost'])->name('ContactUsFormPost');
route::post('career-store',[FrontendController::class,'CareerPost'])->name('CareerPost');





Auth::routes();

