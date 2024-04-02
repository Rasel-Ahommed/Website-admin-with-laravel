<?php

use App\Models\Circuler;
use App\Models\FacultyNursing;
use App\Models\vcOfficeMember;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APAController;
use App\Http\Controllers\NOCController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CirculerController;
use App\Http\Controllers\SuscriberController;
use App\Http\Controllers\SyndicateController;
use App\Http\Controllers\CampusLifeController;
use App\Http\Controllers\HomeBannerController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\AdminCouncilController;
use App\Http\Controllers\EventGalleryController;
use App\Http\Controllers\FacultyBspcsController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FacultyNursingController;
use App\Http\Controllers\VcOfficeMemberController;
use App\Http\Controllers\ViceChancellorController;
use App\Http\Controllers\AcademicCouncilController;
use App\Http\Controllers\AcademicProgramController;
use App\Http\Controllers\FacultyMedicineController;
use App\Http\Controllers\AcademicCalenderController;
use App\Http\Controllers\adminController\homeController;
use App\Http\Controllers\adminController\noticController;
use App\Http\Controllers\adminController\reportController;
use App\Http\Controllers\adminController\dashboardController;
use App\Http\Controllers\adminController\activitiesController;
use App\Http\Controllers\adminController\subscriberController;
use App\Http\Controllers\adminController\aboutController\eventsController;
use App\Http\Controllers\adminController\aboutController\shmuActController;
use App\Http\Controllers\adminController\administration\chancellorController;
use App\Http\Controllers\adminController\aboutController\campusDetailsController;
use App\Http\Controllers\adminController\aboutController\instituteCodeController;
use App\Http\Controllers\adminController\aboutController\missionAndVisionController;

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

Route::get('/', function () {
    return  view('frontend/index');
})->name('frontend.index');
route::prefix('shmu')->group(function(){


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified']);

    Route::middleware('auth')->group(function () {
        //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // add user 
        Route::get('/profile', [AddUserController::class, 'index'])->name('add.user');
        Route::post('/profile', [AddUserController::class, 'store'])->name('store.user');

        //manage user
        Route::get('/manage/user', [ManageUserController::class, 'index'])->name('manage.user');
        Route::get('edit-manage/user/{id}', [ManageUserController::class, 'edit'])->name('edit.Manage.user');
        Route::post('update-manage/user/{id}', [ManageUserController::class, 'update'])->name('updae.manage.user');
        Route::get('delete-manage/user/{id}', [ManageUserController::class, 'destroy'])->name('delete.Manage.user');


        Route::middleware(['role:2'])->group(function () {

        // change password 
        Route::get('change-password', [ChangePasswordController::class, 'index'])->name('change.password');
        Route::post('change-password', [ChangePasswordController::class, 'edit'])->name('edit.password');

        });

        });



        require __DIR__ . '/auth.php';


        //////////// frontend view routes start/////////////////




        Route::get('/shmu-act', function () {
            return  view('frontend/shmu-act');
        });
        Route::get('/ins-code', function () {
            return  view('frontend/ins-code');
        });
        Route::get('/campus-detail', function () {
            return  view('frontend/campus-detail');
        });
        Route::get('/campus-map', function () {
            return  view('frontend/campus-map');
        });
        Route::get('/vision-mission', function () {
            return  view('frontend/vision-mission');
        });
        Route::get('/event', function () {
            return  view('frontend/event');
        });

        Route::get('/event-deatils/{id}', function () {
            return  view('frontend/eventdtls');
        })->name('event.deatils');

        Route::get('/chancellor', function () {
            return  view('frontend/chancellor');
        });
        Route::get('/vice-chancellor', function () {
            return  view('frontend/vice-chancellor');
        });
        Route::get('/syndicate', function () {
            return  view('frontend/syndicate');
        });
        Route::get('/academic-council', function () {
            return  view('frontend/academic-council');
        });
        Route::get('/admin-council', function () {
            return  view('frontend/admin-council');
        });
        Route::get('/faculty-of-medicine', function () {
            return  view('frontend/faculty-of-medicine');
        });
        Route::get('/faculty-of-basic-science-and-para-clinical-science', function () {
            return  view('frontend/faculty-of-basic-science-and-para-clinical-science');
        });
        Route::get('/faculty-of-nursing', function () {
            return  view('frontend/faculty-of-nursing');
        });
        Route::get('/program-all', function () {
            return  view('frontend/program-all');
        });
        Route::get('/academmic-calender', function () {
            return  view('frontend/academmic-calender');
        });
        Route::get('/certificate', function () {
            return  view('frontend/certificate');
        });
        Route::get('/affiliated-institutions-government', function () {
            return  view('frontend/affiliated-institutions-government');
        });
        Route::get('/affiliated-institutions-non-government', function () {
            return  view('frontend/affiliated-institutions-non-government');
        });
        Route::get('/frontNotice', function () {
            return  view('frontend/notice');
        });
        Route::get('/event-gallary', function () {
            return  view('frontend/event-gallary');
        });
        Route::get('/noc', function () {
            return  view('frontend/noc');
        });
        Route::get('/apa', function () {
            return  view('frontend/apa');
        });
        Route::get('/tender', function () {
            return  view('frontend/tender');
        });
        Route::get('/career', function () {
            return  view('frontend/career');
        });
        Route::get('/form', function () {
            return  view('frontend/form');
        });

        // suscriber route
        Route::post('/store/suscriber', [SuscriberController::class, 'store'])->name('store.suscriber');

        ////////////////// frontend route end /////////////////

        /////////////////// admin route start /////////////////

        Route::middleware('auth')->group(function () {
            // dashboard routes 
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        

            //--------------------------------------------------------------//
            // ---------------- Home routes start----------//
            //--------------------------------------------------------------//
            Route::get('/adminHome', [HomeController::class, 'index'])->name('adminHome');

            Route::post('/admin-home-store', [HomeBannerController::class, 'store'])->name('banner.store');

            Route::get('/edit-home-banner/{id}', [HomeBannerController::class, 'edit'])->name('edit.home.banner');

            Route::post('/update-home-banner/{id}', [HomeBannerController::class, 'update'])->name('banner.update');

            Route::get('/delete-home-banner/{id}', [HomeBannerController::class, 'destroy'])->name('delete.home.banner');

            // about us
            Route::post('uplate-aboutUs-{id}', [AboutUsController::class, 'update'])->name('update.aboutus');

            // campus life 
            Route::post('uplate-campusLife-{id}', [CampusLifeController::class, 'update'])->name('update.campusLife');

            //--------------------------------------------------------------//
            // ---------------- about section routes start----------//
            //--------------------------------------------------------------//

            //--------shmu act route------//
            Route::get('/admin-shmu-Act', [shmuActController::class, 'Index'])->name('admin-shmu-Act');

            Route::put('/update-act-text/{id}', [shmuActController::class, 'UpdateActText'])->name('updateActText');

            Route::post('/act-doc', [shmuActController::class, 'StoreAct'])->name('act.doc');

            Route::get('/act-edit/{id}', [shmuActController::class, 'Edit'])->name('act.edit');

            Route::put('/act-update/{id}', [shmuActController::class, 'Update'])->name('act.update');

            Route::get('/act-delete/{id}', [shmuActController::class, 'Destroy'])->name('act.delete');
            


            // -------events route --------//
            Route::get('/events', [eventsController::class, 'Index'])->name('event');

            Route::post('/events', [eventsController::class, 'Store'])->name('store.news&event');

            Route::get('/edit-event/{id}', [eventsController::class, 'Edit'])->name('editEvent');

            Route::put('/update-event/{id}', [eventsController::class, 'Update'])->name('update.event');

            Route::get('/delete-event/{id}', [eventsController::class, 'Destroy'])->name('delete.event');



            //------------event image controller --------//
            Route::get('/event-img/{id}', [eventsController::class, 'EventImgIndex'])->name('event.img');

            Route::post('/event-img/{id}', [eventsController::class, 'StoreEventImg'])->name('store.event.img');

            Route::get('/event-img-delete-{id}', [eventsController::class, 'DeleteEventImg'])->name('delete.eventImg');



            //--------institute_code route ---------//
            Route::get('/institute-code', [instituteCodeController::class, 'Index'])->name('institute-code');

            Route::post('/Institute-Code', [instituteCodeController::class, 'Store'])->name('store.instituteCode');

            Route::get('/Institute-Edit/{id}', [instituteCodeController::class, 'Edit'])->name('edit.institute');

            Route::put('/Institute-update/{id}', [instituteCodeController::class, 'Update'])->name('update.instituteCode');

            Route::get('/Institute-delete/{id}', [instituteCodeController::class, 'Destroy'])->name('delete.institute');


            //-----------campus_details route-------------//
            Route::get('/campusdetails', [campusDetailsController::class, 'Index'])->name('campusdetails');

            Route::put('/Update/campus/details/{id}', [campusDetailsController::class, 'Update'])->name('update.campusDtls');

            //-------------mission and vision -------------//
            Route::get('/mission-vision', [missionAndVisionController::class, 'Index'])->name('mission-vision');

            Route::put('/Update/mission/{id}', [missionAndVisionController::class, 'UpdateMission'])->name('update.mission');

            Route::put('/Update/vision/{id}', [missionAndVisionController::class, 'UpdateVision'])->name('update.vision');
            

            //--------------------------------------------------------------//
            // ---------------- about section route end------------//
            //--------------------------------------------------------------//


            //--------------------------------------------------------------//
            // ------------------- Administration section route start-------//
            //--------------------------------------------------------------//

            //------Chancellor route--------//
            Route::get('/admin-chancellor', [chancellorController::class, 'Index'])->name('admin.chancellor');
            Route::post('/update-chancellor/{id}', [chancellorController::class, 'Update'])->name('chancellor/update');

            //vice chancellor rote
            Route::get('Vice-Chancellor', [ViceChancellorController::class, 'index'])->name('Vice-Chancellor');

            Route::post('Vice-Chancellor-update/{id}', [ViceChancellorController::class, 'update'])->name('viceChancellor.update');

            Route::post('vc-office-member', [VcOfficeMemberController::class, 'store'])->name('vc.Office.Member');

            Route::get('vc-office-member-edit/{id}', [VcOfficeMemberController::class, 'edit'])->name('edit.vcOfficeMember');

            Route::post('vc-office-member-update/{id}', [VcOfficeMemberController::class, 'update'])->name('update.vcMember');

            Route::get('vc-office-member-delete/{id}', [VcOfficeMemberController::class, 'destroy'])->name('delete.vcOfficeMember');

            //univercity syndicate
            Route::get('/univercity-syndicate', [SyndicateController::class, 'index'])->name('univercity.syndicate');
            Route::post('/univercity-syndicate', [SyndicateController::class, 'store'])->name('univercity.syndicate');
            Route::get('edit-univercity-syndicate/{id}', [SyndicateController::class, 'edit'])->name('edit.univercity.syndicate');

            Route::post('update-univercity-syndicate/{id}', [SyndicateController::class, 'update'])->name('update.univercity.syndicate');

            Route::get('delete-univercity-syndicate/{id}', [SyndicateController::class, 'destroy'])->name('delete.univercity.syndicate');
            

            //Academic Council
            Route::get('/academiccouncil', [AcademicCouncilController::class, 'index'])->name('academiccouncil');

            Route::post('/academiccouncil', [AcademicCouncilController::class, 'store'])->name('academiccouncil.store');

            Route::get('edit-academiccouncil/{id}', [AcademicCouncilController::class, 'edit'])->name('edit.academiccouncil');

            Route::post('update-academicCouncil/{id}', [AcademicCouncilController::class, 'update'])->name('update.academicCouncil');

            Route::get('delete-academicCouncil/{id}', [AcademicCouncilController::class, 'destroy'])->name('delete.academiccouncil');


            //admin Council
            Route::get('/admincouncil', [AdminCouncilController::class, 'index'])->name('admincouncil');

            Route::post('/admincouncil', [AdminCouncilController::class, 'store'])->name('admin.council');
        
            Route::get('edit-admin-council/{id}', [AdminCouncilController::class, 'edit'])->name('edit.admin.council');
        
            Route::post('update-admin-council/{id}', [AdminCouncilController::class, 'update'])->name('update.admin.council');
        
            Route::get('delete-admin-council/{id}', [AdminCouncilController::class, 'destroy'])->name('delete.admin.council');
            
            //faculty of medicine
            Route::get('/facultyOfMedicine', [FacultyMedicineController::class, 'index'])->name('facultyOfMedicine');
            Route::post('/faculty-of-medicine/{id}', [FacultyMedicineController::class, 'update'])->name('update.facultyofmedicine');

            //faculty of facultybspcs
            Route::get('/facultybspcs', [FacultyBspcsController::class, 'index']);

            Route::post('/facultybspcs/{id}', [FacultyBspcsController::class, 'update'])->name('update.facultybspcs');

            //faculty of nursing
            Route::get('/facultynursing', [FacultyNursingController::class, 'index']);

            Route::post('/facultynursing/{id}', [FacultyNursingController::class, 'update'])->name('update.facultynursing');
        
            
            //--------------------------------------------------------------//
            // ------------------- Administration section route end-------//
            //--------------------------------------------------------------//


            //--------------------------------------------------------------//
            // ------------------- Academic section route start-------//
            //--------------------------------------------------------------//


            //Academic Programs
            Route::get('/academic-program', [AcademicProgramController::class, 'index'])->name('academic.program');

            Route::post('/academicProgram', [AcademicProgramController::class, 'store'])->name('academicProgram');

            Route::get('edit-academicProgram/{id}', [AcademicProgramController::class, 'edit'])->name('edit.program');

            Route::post('update-academicProgram/{id}', [AcademicProgramController::class, 'update'])->name('update.academicProgram');

            Route::get('delete-academicProgram/{id}', [AcademicProgramController::class, 'destroy'])->name('delete.program');


            //Academic Programs
            Route::get('/academiccalender', [AcademicCalenderController::class, 'index'])->name('academiccalender');

            Route::post('/academiccalender/{id}', [AcademicCalenderController::class, 'update'])->name('update.academiccalender');
        
            //--------------------------------------------------------------//
            // ------------------- Academic section route end-------//
            //--------------------------------------------------------------//


            //-----------notice routes-------------//
            Route::get('/notice', [noticController::class, 'Index'])->name('notice');
            Route::post('/notice', [noticController::class, 'Store'])->name('store.notice');
            Route::get('/edit-notice/{id}', [noticController::class, 'Edit'])->name('editNotice');
            Route::post('/edit-notice/{id}', [noticController::class, 'Update'])->name('update.notice');
            Route::get('/delete-notice/{id}', [noticController::class, 'Destroy'])->name('delete');


            //-----------events & gallery-------------//
            Route::get('/events&gallery', [EventGalleryController::class, 'index'])->name('event.gallery');
            Route::post('/events&gallery', [EventGalleryController::class, 'store'])->name('store.eventandgallery');
            Route::get('edit-events&gallery/{id}', [EventGalleryController::class, 'edit'])->name('edit.eventandgallery');
            Route::post('update-events&gallery{id}', [EventGalleryController::class, 'update'])->name('update.eventandgallery');
            Route::get('delete-events&gallery{id}', [EventGalleryController::class, 'destroy'])->name('delete.eventandgallery');

            
            //-----------Quick links -------------//

            //noc
            Route::get('/admin-noc', [NOCController::class, 'index'])->name('admin.noc');
            Route::post('/admin-noc', [NOCController::class, 'store'])->name('store.noc');
            Route::get('/edit-noc/{id}', [NOCController::class, 'edit'])->name('edit.noc');
            Route::post('/update-noc/{id}', [NOCController::class, 'update'])->name('update.noc');
            Route::get('/delete-noc/{id}', [NOCController::class, 'destroy'])->name('delete.noc');
            
            //APA
            Route::get('/admin-apa', [APAController::class, 'index'])->name('admin.apa');
            Route::post('/admin-apa', [APAController::class, 'store'])->name('store.apa');
            Route::get('/edit-apa/{id}', [APAController::class, 'edit'])->name('edit.apa');
            Route::post('/update-apa/{id}', [APAController::class, 'update'])->name('update.apa');
            Route::get('/delete-apa/{id}', [APAController::class, 'destroy'])->name('delete.apa');


            // tendar 
            Route::get('/admin-tender', [TenderController::class, 'index'])->name('admin.tender');
            Route::post('/admin-tender', [TenderController::class, 'store'])->name('store.tender');
            Route::get('/edit-tender/{id}', [TenderController::class, 'edit'])->name('edit.tender');
            Route::post('/update-tender/{id}', [TenderController::class, 'update'])->name('update.tender');
            Route::get('/delete-tender/{id}', [TenderController::class, 'destroy'])->name('delete.tender');

            // circuler 
            Route::get('/admin-circuler', [CirculerController::class, 'index'])->name('admin.circuler');
            Route::post('/admin-circuler', [CirculerController::class, 'store'])->name('store.circuler');
            Route::get('/edit-circuler/{id}', [CirculerController::class, 'edit'])->name('edit.circuler');
            Route::post('/update-circuler/{id}', [CirculerController::class, 'update'])->name('update.circuler');
            Route::get('/delete-circuler/{id}', [CirculerController::class, 'destroy'])->name('delete.circuler');


            // Required form 
            Route::get('/admin-forms', [FormsController::class, 'index'])->name('admin.forms');
            Route::post('/admin-form', [FormsController::class, 'store'])->name('store.form');
            Route::get('/edit-form/{id}', [FormsController::class, 'edit'])->name('edit.form');
            Route::post('/update-form/{id}', [FormsController::class, 'update'])->name('update.form');
            Route::get('/delete-form/{id}', [FormsController::class, 'destroy'])->name('delete.form');
            

            //-------------activities routes-------------//
            Route::get('/activities', [activitiesController::class, 'Index']);

            //---------------subscribe routes-------------//
            Route::get('/subscriber', [subscriberController::class, 'Index']);

            //---------------site setting routes-------------//
            Route::get('/side-setting', [SiteSettingController::class, 'index'])->name('side.setting');
            Route::post('update-side-setting/{id}', [SiteSettingController::class, 'update'])->name('update.siteSetting');

            Route::get('/get-chart-data', [ChartController::class, 'activites'])->name('chart.get_data');

            Route::get('/get-sub-data', [ChartController::class, 'subscriber'])->name('chart.sub_data');


            //---------------report routes--------------//
            // Route::get('/report', [reportController::class, 'Index']);

        });
    });


                            // admin route end 