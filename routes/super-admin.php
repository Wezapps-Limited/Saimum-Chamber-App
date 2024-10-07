<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\super_admin\AboutManageController;
use App\Http\Controllers\super_admin\ProductManageController;
use App\Http\Controllers\super_admin\ContactUsController;
use App\Http\Controllers\super_admin\SeoToolManageController;
use App\Http\Controllers\super_admin\ProfileManageController;
use App\Http\Controllers\super_admin\SubscriberManageController;
use App\Http\Controllers\super_admin\GalleryManageController;
use App\Http\Controllers\super_admin\ContactFormController;
use App\Http\Controllers\super_admin\ShippingChargeManage;
use App\Http\Controllers\super_admin\OrderManageController;
use App\Http\Controllers\super_admin\CustomerManageController;
use App\Http\Controllers\super_admin\ProductReviewManageController;
use App\Http\Controllers\super_admin\AnalyticsReportManageController;
use App\Http\Controllers\super_admin\AccountSettingController;
use App\Http\Controllers\super_admin\LogManageController;
use App\Http\Controllers\super_admin\UserRoleManageController;
use App\Http\Controllers\super_admin\ContactMessageManage;
use App\Http\Controllers\super_admin\BlogManageController;
use App\Http\Controllers\super_admin\ClientManageController;
use App\Http\Controllers\super_admin\EmailConfigController;
use App\Http\Controllers\super_admin\FAQManageController;
use App\Http\Controllers\super_admin\LogoManageController;
use App\Http\Controllers\super_admin\NewsManageController;
use App\Http\Controllers\super_admin\OurExpertManageController;
use App\Http\Controllers\super_admin\PortfolioManageController;
use App\Http\Controllers\super_admin\SliderManageController;
use App\Http\Controllers\super_admin\SocialIconManageController;
use App\Http\Controllers\super_admin\TestimonialController;
use App\Http\Controllers\super_admin\VideoManageController;
use App\Http\Controllers\super_admin\VisaKeyContactManageController;
use App\Http\Controllers\super_admin\VisaManageController;
use App\Http\Controllers\super_admin\WhyChooseController;

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

Route::get('/auth-login', [LoginController::class, 'showAdminLoginForm'])->name('showAdminLoginForm');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/super-admin-forgor-password', [LoginController::class, 'SuperAdminForgotPass'])->name('SuperAdminForgotPass');

Route::post('/super-admin-forgor-submit', [LoginController::class, 'SuperAdminForgotSubmit'])->name('SuperAdminForgotSubmit');


Route::group(['middleware' => 'auth','namespace'=>'super_admin'], function() {

      //................................Profile Section...............................
      route::get('email-config/config',[EmailConfigController::class,'EmailConfig'])->name('EmailConfig');
      route::post('email-config/config-post',[EmailConfigController::class,'EmailConfigPost'])->name('EmailConfigPost');

            //................................Profile Section...............................
      route::get('Profile/profile',[ProfileManageController::class,'Profile'])->name('Profile');
      route::post('Profile/profile-update',[ProfileManageController::class,'ProfileUpdate'])->name('ProfileUpdate');

        //---------------------Account Setting Routes-------------------
        route::get('AccountSetting/account-setting-form',[AccountSettingController::class, 'AccountSettingForm'])->name('AccountSettingForm');
        route::post('AccountSetting/account-setting-post',[AccountSettingController::class, 'AccountSettingPost'])->name('AccountSettingPost');
             
        //.........................Contact Information Router.......
         Route::get('/why-choose-us-index', [WhyChooseController::class, 'WhyChooseIndex'])->name('WhyChooseIndex');
         Route::post('/why-choose-us-post', [WhyChooseController::class, 'WhyChoosePost'])->name('WhyChoosePost');
         Route::get('/why-choose-us-edit/{id}', [WhyChooseController::class, 'WhyChooseEdit'])->name('WhyChooseEdit');
  
        //...................................About Us Section.......................
        route::get('AboutUs/about-us-index',[AboutManageController::class,'AboutUsIndex'])->name('AboutUsIndex');
        route::get('AboutUs/about-us-edit/{id}',[AboutManageController::class,'AboutUsEdit'])->name('AboutUsEdit');
        route::post('AboutUs/about-us-update',[AboutManageController::class,'AboutUsPost'])->name('AboutUsPost');
         
         //.........................Contact Information Router.......
         Route::get('/contact-us-info-index', [ContactUsController::class, 'ContactUsIndex'])->name('ContactUsIndex');
         Route::post('/contact-us-info-post', [ContactUsController::class, 'ContactUsPost'])->name('ContactUsPost');
         Route::get('/contact-us-info-edit/{id}', [ContactUsController::class, 'ContactUsEdit'])->name('ContactUsEdit');

        //...................................Logo Section.......................
        route::get('logo-manage/logo-index',[LogoManageController::class,'LogoIndex'])->name('LogoIndex');
        route::get('logo-manage/logo-edit/{id}',[LogoManageController::class,'LogoEdit'])->name('LogoEdit');
        route::post('logo-manage/logo-update',[LogoManageController::class,'LogoPost'])->name('LogoPost');

       //---------------------Log Manage Routes-------------------
       route::get('LogManage/log-manage-message',[LogManageController::class, 'LogManageList'])->name('LogManageList');
       route::get('LogManage/log-manage-delete/{id}',[LogManageController::class, 'LogDelete'])->name('LogDelete');
       
      //.........................Trusted by the best Router.......
      Route::get('trusted-by-index', [ClientManageController::class, 'ClientIndex'])->name('ClientIndex');
      Route::post('trusted-by-post', [ClientManageController::class, 'ClientPost'])->name('ClientPost');
      Route::post('trusted-by-update', [ClientManageController::class, 'ClientUpdate'])->name('ClientUpdate');
      Route::get('trusted-by-edit/{id}', [ClientManageController::class, 'ClientEdit'])->name('ClientEdit');
      Route::get('trusted-by-delete/{id}', [ClientManageController::class, 'ClientDelete'])->name('ClientDelete');
 

      //.........................Our experts Router.......
      Route::get('our-experts-index', [OurExpertManageController::class, 'OurExpertIndex'])->name('OurExpertIndex');
      Route::post('our-experts-post', [OurExpertManageController::class, 'OurExpertPost'])->name('OurExpertPost');
      Route::post('our-experts-update', [OurExpertManageController::class, 'OurExpertUpdate'])->name('OurExpertUpdate');
      Route::get('our-experts-edit/{id}', [OurExpertManageController::class, 'OurExpertEdit'])->name('OurExpertEdit');
      Route::get('our-experts-delete/{id}', [OurExpertManageController::class, 'OurExpertDelete'])->name('OurExpertDelete');
      route::get('our-experts-text-page',[OurExpertManageController::class,'OurExpertTextPage'])->name('OurExpertTextPage');
      route::post('our-experts-text-update',[OurExpertManageController::class,'OurExpertTextUpdate'])->name('OurExpertTextUpdate');

      

      Route::get('our-experts-info-list/{id}', [OurExpertManageController::class, 'OurExpertInfoList'])->name('OurExpertInfoList');
      Route::post('our-experts-info-post', [OurExpertManageController::class, 'OurExpertInfoPost'])->name('OurExpertInfoPost');
      Route::post('our-experts-info-update', [OurExpertManageController::class, 'OurExpertInfoUpdate'])->name('OurExpertInfoUpdate');
      Route::get('our-experts-info-edit/{id}', [OurExpertManageController::class, 'OurExpertInfoEdit'])->name('OurExpertInfoEdit');
      Route::get('our-experts-info-delete/{id}', [OurExpertManageController::class, 'OurExpertInfoDelete'])->name('OurExpertInfoDelete');
      
      //.........................FAQ Router.......
      Route::get('faq-index', [FAQManageController::class, 'FaqIndex'])->name('FaqIndex');
      Route::post('faq-post', [FAQManageController::class, 'FaqPost'])->name('FaqPost');
      Route::post('faq-update', [FAQManageController::class, 'FaqUpdate'])->name('FaqUpdate');
      Route::get('faq-edit/{id}', [FAQManageController::class, 'FaqEdit'])->name('FaqEdit');
      Route::get('faq-delete/{id}', [FAQManageController::class, 'FaqDelete'])->name('FaqDelete');
      route::get('faq-text-page',[FAQManageController::class,'FaqTextPage'])->name('FaqTextPage');
      route::post('faq-text-update',[FAQManageController::class,'FaqTextUpdate'])->name('FaqTextUpdate');
       
       //---------------------Contact Message Manage Routes-------------------
       route::get('ContactMessage/contact-message',[ContactMessageManage::class, 'ContactMessageList'])->name('ContactMessageList');
       route::get('ContactMessage/contact-delete/{id}',[ContactMessageManage::class, 'ContactMessageDelete'])->name('ContactMessageDelete');
       
       route::post('ContactMessage/contact-multi-delete',[ContactMessageManage::class, 'ContactMultipleDelete'])->name('ContactMultipleDelete');
       
       //---------------------Career Message Manage Routes-------------------
       route::get('CareerMessage/career-message',[ContactMessageManage::class, 'CareerMessageList'])->name('CareerMessageList');
       route::get('CareerMessage/career-delete/{id}',[ContactMessageManage::class, 'CareerMessageDelete'])->name('CareerMessageDelete');
       route::post('CareerMessage/career-multi-delete',[ContactMessageManage::class, 'CareerMultipleDelete'])->name('CareerMultipleDelete');
                          
       //.........................Slider Manage Router.......
      Route::get('slider-manage-create', [SliderManageController::class, 'SliderCreate'])->name('SliderCreate');
      Route::get('slider-manage-index', [SliderManageController::class, 'SliderIndex'])->name('SliderIndex');
      Route::post('slider-manage-post', [SliderManageController::class, 'SliderPost'])->name('SliderPost');
      Route::post('slider-manage-update', [SliderManageController::class, 'SliderUpdate'])->name('SliderUpdate');
      Route::get('slider-manage-edit/{id}', [SliderManageController::class, 'SliderEdit'])->name('SliderEdit');
      Route::get('slider-manage-delete/{id}', [SliderManageController::class, 'SliderDelete'])->name('SliderDelete');
      Route::get('slider-manage-multi-delete', [SliderManageController::class, 'SliderMultiDelete'])->name('SliderMultiDelete');
     

                         //.........................Visa Key Contact Manage Router.......
      Route::get('visa-key-contact-create', [VisaKeyContactManageController::class, 'VisaKeyContactCreate'])->name('VisaKeyContactCreate');
      Route::get('visa-key-contact-index', [VisaKeyContactManageController::class, 'VisaKeyContactIndex'])->name('VisaKeyContactIndex');
      Route::post('visa-key-contact-post', [VisaKeyContactManageController::class, 'VisaKeyContactPost'])->name('VisaKeyContactPost');
      Route::post('visa-key-contact-update', [VisaKeyContactManageController::class, 'VisaKeyContactUpdate'])->name('VisaKeyContactUpdate');
      Route::get('visa-key-contact-edit/{id}', [VisaKeyContactManageController::class, 'VisaKeyContactEdit'])->name('VisaKeyContactEdit');
      Route::get('visa-key-contact-delete/{id}', [VisaKeyContactManageController::class, 'VisaKeyContactDelete'])->name('VisaKeyContactDelete');
      Route::get('visa-key-contact-multi-delete', [VisaKeyContactManageController::class, 'VisaKeyContactMultiDelete'])->name('VisaKeyContactMultiDelete');
     
         //.........................Visa Manage Router.......
      Route::get('visa-manage-create', [VisaManageController::class, 'VisaCreate'])->name('VisaCreate');
      Route::get('visa-manage-index', [VisaManageController::class, 'VisaIndex'])->name('VisaIndex');
      Route::get('visa-manage-type-index/{id}', [VisaManageController::class, 'VisaTypeIndex'])->name('VisaTypeIndex');
      Route::post('visa-manage-post', [VisaManageController::class, 'VisaPost'])->name('VisaPost');
      Route::post('visa-manage-update', [VisaManageController::class, 'VisaUpdate'])->name('VisaUpdate');
      Route::get('visa-manage-edit/{id}', [VisaManageController::class, 'VisaEdit'])->name('VisaEdit');
      Route::get('visa-manage-delete/{id}', [VisaManageController::class, 'VisaDelete'])->name('VisaDelete');
      Route::get('visa-manage-multi-delete', [VisaManageController::class, 'VisaMultiDelete'])->name('VisaMultiDelete');
      
      Route::get('visa-manage-gallery-index', [VisaManageController::class, 'VisaMultiGalleryIndex'])->name('VisaMultiGalleryIndex');
      Route::post('visa-manage-gallery-update', [VisaManageController::class, 'VisaMultiGalleryUpdate'])->name('VisaMultiGalleryUpdate');


       //---------------------Join Us Message Manage Routes-------------------
       route::get('JoinUsMessage/join-us-message',[ContactMessageManage::class, 'JoinUsMessageList'])->name('JoinUsMessageList');
       route::get('JoinUsMessage/join-us-delete/{id}',[ContactMessageManage::class, 'JoinUsMessageDelete'])->name('JoinUsMessageDelete');
       route::post('JoinUsMessage/join-us-multi-delete',[ContactMessageManage::class, 'JoinUsMultipleDelete'])->name('JoinUsMultipleDelete');

                     //.........................Social Icon Manage Router.......
      Route::get('/social-icon-manage-create', [SocialIconManageController::class, 'SocialIconCreate'])->name('SocialIconCreate');
      Route::get('/social-icon-manage-index', [SocialIconManageController::class, 'SocialIconIndex'])->name('SocialIconIndex');
      Route::post('/social-icon-manage-post', [SocialIconManageController::class, 'SocialIconPost'])->name('SocialIconPost');
      Route::post('/social-icon-manage-update', [SocialIconManageController::class, 'SocialIconUpdate'])->name('SocialIconUpdate');
      Route::get('/social-icon-manage-edit/{id}', [SocialIconManageController::class, 'SocialIconEdit'])->name('SocialIconEdit');
      Route::get('/social-icon-manage-delete/{id}', [SocialIconManageController::class, 'SocialIconDelete'])->name('SocialIconDelete');
      Route::post('/social-icon-manage-multiple-delete', [SocialIconManageController::class, 'SocialIconMultipleDelete'])->name('SocialIconMultipleDelete');


    //---------------------User Role Manage Routes-------------------
    route::get('UserRole/user-role-list',[UserRoleManageController::class, 'UserRoleList'])->name('UserRoleList');
    route::get('UserRole/user-role-create',[UserRoleManageController::class, 'UserRoleCreate'])->name('UserRoleCreate');
    route::get('UserRole/user-role-edit/{id}',[UserRoleManageController::class, 'UserRoleEdit'])->name('UserRoleEdit');
    route::get('UserRole/user-role-delete/{id}',[UserRoleManageController::class, 'UserRoleDelete'])->name('UserRoleDelete');
    route::post('UserRole/user-role-store',[UserRoleManageController::class, 'UserRoleStore'])->name('UserRoleStore');
    route::post('UserRole/user-role-update',[UserRoleManageController::class, 'UserRoleUpdate'])->name('UserRoleUpdate');



        //.........................SEO Toosl Router.......
        Route::get('/seo-tools-index', [SeoToolManageController::class, 'SeoToolIndex'])->name('SeoToolIndex');
        Route::post('/seo-tools-post', [SeoToolManageController::class, 'SeoToolPost'])->name('SeoToolPost');
        Route::get('/seo-tools-edit/{id}', [SeoToolManageController::class, 'SeoToolEdit'])->name('SeoToolEdit');


              //.........................Gallery Manage Router.......
      Route::get('Gallery-Manage/Gallery-Manage-create', [GalleryManageController::class, 'GalleryCreate'])->name('GalleryCreate');
      Route::get('Gallery-Manage/Gallery-Manage-index', [GalleryManageController::class, 'GalleryIndex'])->name('GalleryIndex');
      Route::post('Gallery-Manage/Gallery-Manage-post', [GalleryManageController::class, 'GalleryPost'])->name('GalleryPost');
      Route::post('Gallery-Manage/Gallery-Manage-update', [GalleryManageController::class, 'GalleryUpdate'])->name('GalleryUpdate');
      Route::get('Gallery-Manage/Gallery-Manage-edit/{id}', [GalleryManageController::class, 'GalleryEdit'])->name('GalleryEdit');
      Route::get('Gallery-Manage-delete/{id}', [GalleryManageController::class, 'GalleryDelete'])->name('GalleryDelete');
      Route::get('Gallery-Manage-active/{id}', [GalleryManageController::class, 'GalleryActive'])->name('GalleryActive');
      Route::get('Gallery-Manage/Gallery-Manage-deactive/{id}', [GalleryManageController::class, 'GalleryDeActive'])->name('GalleryDeActive');
      Route::post('Gallery-Manage/Gallery-multi-Manage', [GalleryManageController::class, 'GalleryMultipleDelete'])->name('GalleryMultipleDelete');

              //.........................Video Gallery Manage Router.......
      Route::get('Video-Manage/Video-Manage-create', [VideoManageController::class, 'VideoCreate'])->name('VideoCreate');
      Route::get('Video-Manage/Video-Manage-index', [VideoManageController::class, 'VideoIndex'])->name('VideoIndex');
      Route::post('Video-Manage/Video-Manage-post', [VideoManageController::class, 'VideoPost'])->name('VideoPost');
      Route::post('Video-Manage/Video-Manage-update', [VideoManageController::class, 'VideoUpdate'])->name('VideoUpdate');
      Route::get('Video-Manage/Video-Manage-edit/{id}', [VideoManageController::class, 'VideoEdit'])->name('VideoEdit');
      Route::get('Video-Manage-Video-delete/{id}', [VideoManageController::class, 'VideoDelete'])->name('VideoDelete');
      Route::get('Video-Manage-Video-active/{id}', [VideoManageController::class, 'VideoActive'])->name('VideoActive');
      Route::get('Video-Manage/Video-Manage-deactive/{id}', [VideoManageController::class, 'VideoDeActive'])->name('VideoDeActive');
      Route::post('Video-Manage/Video-multi-Manage', [VideoManageController::class, 'VideoMultipleDelete'])->name('VideoMultipleDelete');

          //................................Testimonial Section...............................
    route::get('Testimonial/testimonial-create',[TestimonialController::class,'TestimonialCreate'])->name('TestimonialCreate');
    route::post('Testimonial/testimonial-store',[TestimonialController::class,'TestimonialStore'])->name('TestimonialStore');
    route::get('Testimonial/testimonial-index',[TestimonialController::class,'TestimonialIndex'])->name('TestimonialIndex');
    route::get('Testimonial/testimonial-edit/{id}',[TestimonialController::class,'TestimonialEdite'])->name('TestimonialEdite');
    route::post('Testimonial/testimonial-update/{id}',[TestimonialController::class,'TestimonialUpdate'])->name('TestimonialUpdate');
    route::post('Testimonial/testimonial-multi-delete',[TestimonialController::class,'TestimonialMultiDelete'])->name('TestimonialMultiDelete');
    route::get('Testimonial/testimonial-delete/{id}',[TestimonialController::class,'TestimonialDelete'])->name('TestimonialDelete');
    route::get('Testimonial/testimonial-active/{id}',[TestimonialController::class,'TestimonialActive'])->name('TestimonialActive');
    route::get('Testimonial/testimonial-de-active/{id}',[TestimonialController::class,'TestimonialDeActive'])->name('TestimonialDeActive');
    route::get('Testimonial/testimonial-text-page',[TestimonialController::class,'TestimonialTextPage'])->name('TestimonialTextPage');
    route::post('Testimonial/testimonial-text-update',[TestimonialController::class,'TestimonialTextUpdate'])->name('TestimonialTextUpdate');

        //.........................Blog Manage Router.......
        Route::get('Blog-Manage/Blog-Manage-create', [BlogManageController::class, 'BlogCreate'])->name('BlogCreate');
        Route::get('Blog-Manage/Blog-Manage-index', [BlogManageController::class, 'BlogIndex'])->name('BlogIndex');
        Route::post('Blog-Manage/Blog-Manage-post', [BlogManageController::class, 'BlogPost'])->name('BlogPost');
        Route::post('Blog-Manage/Blog-Manage-update', [BlogManageController::class, 'BlogUpdate'])->name('BlogUpdate');
        Route::post('Blog-Manage/Blog-Manage-multiple-delete', [BlogManageController::class, 'BlogMultipleDelete'])->name('BlogMultipleDelete');
        Route::get('Blog-Manage/Blog-Manage-edit/{id}', [BlogManageController::class, 'BlogEdit'])->name('BlogEdit');
        Route::get('Blog-Manage/Blog-Manage-delete/{id}', [BlogManageController::class, 'BlogDelete'])->name('BlogDelete');

                //.........................News Manage Router.......
        Route::get('News-Manage/news-Manage-create', [NewsManageController::class, 'NewsCreate'])->name('NewsCreate');
        Route::get('News-Manage/news-Manage-index', [NewsManageController::class, 'NewsIndex'])->name('NewsIndex');
        Route::post('News-Manage/news-Manage-post', [NewsManageController::class, 'NewsPost'])->name('NewsPost');
        Route::post('News-Manage/news-Manage-update', [NewsManageController::class, 'NewsUpdate'])->name('NewsUpdate');
        Route::post('News-Manage/news-Manage-multiple-delete', [NewsManageController::class, 'NewsMultipleDelete'])->name('NewsMultipleDelete');
        Route::get('News-Manage/news-Manage-edit/{id}', [NewsManageController::class, 'NewsEdit'])->name('NewsEdit');
        Route::get('News-Manage/news-Manage-delete/{id}', [NewsManageController::class, 'NewsDelete'])->name('NewsDelete');
      
  

           
             //....................Google Pixel Manage Router.......
        Route::get('/analytic-script', [AnalyticsReportManageController::class, 'AnalyticScript'])->name('AnalyticScript');
        Route::post('/analytic-google-pixel', [AnalyticsReportManageController::class, 'GooglePixel'])->name('GooglePixel');
        Route::post('/analytic-google-tag', [AnalyticsReportManageController::class, 'GoogleTag'])->name('GoogleTag');


});
