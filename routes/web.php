<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ContactTwoController;
use App\Http\Controllers\LionsfieldController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\LionsfieldTwoController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PortalOperationController;
use App\Http\Controllers\QuestionCategoryController;
use App\Http\Controllers\StudentOperationController;

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
    return view('frontend.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 
Route::group(['middleware' => 'auth'], function() { 
    Route::get('redirects', 'App\Http\Controllers\HomeController@index');
    Route::get('logout', [HomeController::class, 'Logout'])->name('logout');
    Route::get('admin/dashboard', [HomeController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('portal/dashboard', [PortalOperationController::class, 'dashboard'])->name('portal.dashboard');
    Route::get('change/password', [ChangePasswordController::class, 'ChangePassword'])->name('change.password');
    Route::post('password/update', [ChangePasswordController::class, 'UpdatePassword'])->name('password.update');
    // User routes
    Route::get('admin/pages/users/users_view', [UserController::class, 'ViewUsers'])->name('admin.pages.users.users_view');
    Route::get('admin/pages/users/users_add', [UserController::class, 'AddUsers'])->name('admin.pages.users.user_add');
    Route::post('admin/pages/users/store', [UserController::class, 'StoreUsers'])->name('admin.pages.users.store');
    Route::get('admin/pages/users/users_edit/{id}', [UserController::class, 'EditUsers'])->name('admin.pages.users.edit_user');
    Route::post('admin/pages/users/update/{id}', [UserController::class, 'UpdateUsers'])->name('admin.pages.users.update');
    Route::get('admin/pages/users/delete/{id}', [UserController::class, 'DeleteUsers'])->name('admin.pages.users.delete');
    // Companies Routes
    Route::get('admin/pages/companies/view', [CompanyController::class, 'CompaniesView'])->name('admin.pages.companies.view');
    Route::get('admin/pages/companies/companies_add', [CompanyController::class, 'CompaniesAdd'])->name('admin.pages.companies.company_add');
    Route::post('admin/pages/companies/store', [CompanyController::class, 'CompaniesStore'])->name('admin.pages.companies.store');
    Route::get('admin/pages/companies/edit/{id}', [CompanyController::class, 'CompaniesEdit'])->name('admin.pages.companies.edit');
    Route::post('admin/pages/companies/update/{id}', [CompanyController::class, 'CompaniesUpdate'])->name('admin.pages.companies.update');
    Route::get('admin/pages/companies/delete/{id}', [CompanyController::class, 'CompaniesDelete'])->name('admin.pages.companies.delete');
    // Levels Routes
    Route::get('admin/pages/levels/levels_view', [LevelController::class, 'LevelView'])->name('admin.pages.levels.view');
    Route::get('admin/pages/levels/levels_add', [LevelController::class, 'LevelAdd'])->name('admin.pages.levels.add');
    Route::post('admin/pages/levels/levels_store', [LevelController::class, 'LevelStore'])->name('admin.pages.levels.store');
    Route::get('admin/pages/levels/levels_edit/{id}', [LevelController::class, 'LevelEdit'])->name('admin.pages.levels.edit');
    Route::post('admin/pages/levels/levels_update/{id}', [LevelController::class, 'LevelUpdate'])->name('admin.pages.levels.update');
    Route::get('admin/pages/levels/levels_delete/{id}', [LevelController::class, 'LevelDelete'])->name('admin.pages.levels.delete');
    // Student Routes 
    Route::get('admin/pages/students/students_view', [StudentController::class, 'StudentView'])->name('admin.pages.students.view');
    Route::get('admin/pages/students/students_add', [StudentController::class, 'StudentAdd'])->name('admin.pages.students.add');
    Route::post('admin/pages/students/students_store', [StudentController::class, 'StudentStore'])->name('admin.pages.students.store');
    Route::get('admin/pages/students/students_edit/{id}', [StudentController::class, 'StudentEdit'])->name('admin.pages.students.edit');
    Route::post('admin/pages/students/students_update/{id}', [StudentController::class, 'StudentUpdate'])->name('admin.pages.students.update');
    Route::get('admin/pages/students/students_delete/{id}', [StudentController::class, 'StudentDelete'])->name('admin.pages.students.delete');
    Route::get('exams/admin/student_status/{id}', [StudentController::class, 'student_status'])->name('student_status');

    //Attendance Reports Routes
    Route::get('admin/pages/attendance/report_view', [AttendanceController::class, 'AttendanceReportView'])->name('admin.pages.attendance.report_view');
    // Attendance Teacher Reporting Routes
    Route::get('admin/pages/attendance/attendance_add', [AttendanceController::class, 'AttendanceTeacherReportAdd'])->name('admin.pages.attendance.attendance_add');
    Route::post('admin/pages/attendance/attendance_store', [AttendanceController::class, 'AttendanceTeacherReportStore'])->name('admin.pages.attendance.attendance_store');
    Route::get('admin/pages/attendance/attendance_edit/{id}', [AttendanceController::class, 'AttendanceTeacherReportEdit'])->name('admin.pages.attendance.attendance_edit');
    Route::post('admin/pages/attendance/attendance_update/{id}', [AttendanceController::class, 'AttendanceTeacherReportUpdate'])->name('admin.pages.attendance.attendance_update');
    Route::get('admin/pages/attendance/attendance_delete/{id}', [AttendanceController::class, 'AttendanceTeacherReportDelete'])->name('admin.pages.attendance.attendance_delete');
    // Frontend one Contact messages
    Route::get('admin/contact_messages/frontend_messages_view', [ContactController::class, 'FrontendContactMessagesView'])->name('front_end_messages');
    Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');
    Route::get('/delete_contact/{id}', [ContactController::class, 'deleteContactMessage'])->name('delete_contact');
    // Frontend two Contact messages
    Route::get('admin/contact_messages/frontend_two_messages_view', [ContactTwoController::class, 'frontendTwoContactMessagesView'])->name('front_end_two_messages');
    Route::post('contact-form2', [ContactTwoController::class, 'storeContactForm2'])->name('contact-form2.store');
    Route::get('delete_contact2/{id}', [ContactTwoController::class, 'deleteContactMessage2'])->name('delete_contact2');
    // Preformance Route
    Route::get('admin/performance/performance_view', [PerformanceController::class, 'PerformanceView'])->name('performance');
    Route::get('admin/performance/performance_add', [PerformanceController::class, 'PerformanceAdd'])->name('performance_add');
    Route::post('admin/performance/store', [PerformanceController::class, 'PerformanceStore'])->name('performance_store');
    Route::get('admin/performance/performance_edit/{id}', [PerformanceController::class, 'PerformanceEdit'])->name('performance_edit');
    Route::post('admin/performance/performance_update/{id}', [PerformanceController::class, 'PerformanceUpdate'])->name('performance_update');
    Route::get('admin/performance/performance_delete/{id}', [PerformanceController::class, 'PerformanceDelete'])->name('performance_delete');
    // Exam Routes
    // Exam Categories
    Route::get('exams/admin/exam_category', [AdminController::class, 'exam_category'])->name('exam_category');
    Route::post('/exams/admin/add_new_category', [AdminController::class, 'add_new_category'])->name('add_new_category');
    Route::get('exams/admin/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');
    Route::post('exams/admin/update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');
    Route::get('exams/admin/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
    Route::get('exams/admin/category_status/{id}', [AdminController::class, 'category_status'])->name('category_status');
    // Exams
    Route::get('exams/admin/manage_exam', [AdminController::class, 'manage_exam'])->name('manage_exam');
    Route::post('exams/admin/add_new_exam', [AdminController::class, 'add_new_exam'])->name('add_new_exam');
    Route::get('exams/admin/exam_status/{id}', [AdminController::class, 'exam_status'])->name('exam_status');
    Route::get('exams/admin/delete_exam/{id}', [AdminController::class, 'delete_exam'])->name('delete_exam');
    Route::get('exams/admin/edit_exam/{id}', [AdminController::class, 'edit_exam'])->name('edit_exam');
    Route::post('exams/admin/edit_exam_sub', [AdminController::class, 'edit_exam_sub'])->name('edit_exam_sub');
    // Exam Questions
    Route::get('exams/admin/add_question/{id}', [AdminController::class, 'add_question'])->name('add_question'); 
    Route::post('exams/admin/add_new_question', [AdminController::class, 'add_new_question'])->name('add_new_question');
    Route::get('exams/admin/question_status/{id}', [AdminController::class, 'question_status'])->name('question_status');
    Route::get('exams/admin/delete_question/{id}', [AdminController::class, 'delete_question'])->name('delete_question');
    Route::get('exams/admin/update_question/{id}',[AdminController::class, 'update_question'])->name('update_question'); 
    Route::post('exams/admin/edit_question_inner', [AdminController::class, 'edit_question_inner'])->name('edit_question_inner');
   // Portal Routes
   Route::get('exams/admin/manage_portal', [AdminController::class, 'manage_portal'])->name('manage_portal');
   Route::post('exams/admin/add_new_portal', [AdminController::class, 'add_new_portal'])->name('add_new_portal');
   Route::get('exams/admin/portal_status/{id}', [AdminController::class, 'portal_status'])->name('portal_status');
   Route::get('exams/admin/edit_portal/{id}', [AdminController::class, 'edit_portal'])->name('edit_portal');
   Route::get('exams/admin/edit_portal_sub', [AdminController::class, 'edit_portal_sub'])->name('edit_portal_sub');
   Route::get('exams/admin/delete_portal/{id}', [AdminController::class, 'delete_portal'])->name('delete_portal');
    // Exam Results
   Route::get('admin/student_exam_result/{id}', [AdminController::class, 'student_exam_result'])->name('student_exam_result');
  
// Portal routes
  Route::get('portal/exam_form/{id}', [PortalOperationController::class, 'exam_form'])->name('exam_form');
  Route::post('portal/exam_form_sub', [PortalOperationController::class, 'exam_form_sub'])->name('exam_form_sub');
  Route::get('portal/print/{id}', [PortalOperationController::class, 'print'])->name('print');
  Route::get('portal/update_form', [PortalOperationController::class, 'update_form'])->name('update_form');
  Route::get('portal/student_exam_info', [PortalOperationController::class, 'student_exam_info'])->name('student_exam_info');
  Route::post('portal/student_exam_info_edit', [PortalOperationController::class, 'student_exam_info_edit'])->name('student_exam_info_edit');
  Route::get('portal/logout', [PortalOperationController::class, 'logout'])->name('logout');
  Route::get('portal/student_progress_form', ['uses' => 'PortalOperationController@create']);
  Route::post('portal/prog_form_sub', [PortalOperationController::class, 'prog_form_sub'])->name('prog_form_sub');
// Student Exam Routes
  Route::get('student/exam', [StudentOperationController::class, 'exam'])->name('exam');
  Route::get('student/take_exam/{id}', [StudentOperationController::class, 'take_exam'])->name('take_exam');
  Route::post('student/submit_question', [StudentOperationController::class, 'submit_question'])->name('submit_question');
  Route::get('student/show_result/{id}', [StudentOperationController::class, 'show_result'])->name('show_result');

});
Route::get('portal/login', [PortalController::class, 'login'])->name('portal.login');
Route::post('portal/login_sub', [PortalController::class, 'login_sub'])->name('login_sub');


// HomePage Lionsfield Routes Front End One
    Route::get('home', [LionsfieldController::class, 'Home'])->name('home');
    Route::get('frontend/pages/quienes_somos', [LionsfieldController::class, 'Quienes'])->name('quienes_somos');
    Route::get('frontend/pages/nuestros_clientes', [LionsfieldController::class, 'Clientes'])->name('nuestros_clientes');
    Route::get('frontend/pages/metodologia', [LionsfieldController::class, 'Metodologia'])->name('metodologia');
    Route::get('frontend/pages/certificaciones', [LionsfieldController::class, 'Certificaciones'])->name('certificaciones');
    Route::get('frontend/pages/contacto', [LionsfieldController::class, 'Contacto'])->name('contacto');

    // Internal links
    Route::get('frontend/pages/internals/renault', [LionsfieldController::class, 'Renault'])->name('renault');
    Route::get('frontend/pages/internals/hsbc', [LionsfieldController::class, 'Hsbc'])->name('hsbc');
    Route::get('frontend/pages/internals/ge', [LionsfieldController::class, 'Ge'])->name('ge');
    Route::get('frontend/pages/internals/holiday_inn', [LionsfieldController::class, 'HolidayInn'])->name('holiday_inn');
    Route::get('frontend/pages/internals/toyota', [LionsfieldController::class, 'Toyota'])->name('toyota');
    Route::get('frontend/pages/internals/hiab', [LionsfieldController::class, 'Hiab'])->name('hiab');
    Route::get('frontend/pages/internals/win_win', [LionsfieldController::class, 'WinWin'])->name('win_win');
    Route::get('frontend/pages/internals/erik', [LionsfieldController::class, 'Erik'])->name('erik');
    Route::get('frontend/pages/internals/admin', [LionsfieldController::class, 'AdminProfile'])->name('admin');
    Route::get('frontend/pages/internals/terrible', [LionsfieldController::class, 'Terrible'])->name('terrible');
    Route::get('frontend/pages/internals/mergers', [LionsfieldController::class, 'Mergers'])->name('mergers');
    Route::get('frontend/pages/internals/how_the_brain_works', [LionsfieldController::class, 'HowBrain'])->name('how_the_brain_works');
    Route::get('frontend/pages/internals/aviso_de_privacidad', [LionsfieldController::class, 'AvisoPrivacidad'])->name('aviso_de_privacidad');
    // Landing Pages
    Route::get('home1', [LionsfieldController::class, 'Home1'])->name('home1');
    Route::get('home2', [LionsfieldController::class, 'Home2'])->name('home2');
    Route::get('home3', [LionsfieldController::class, 'Home3'])->name('home3');
    Route::get('home4', [LionsfieldController::class, 'Home4'])->name('home4');
    Route::get('home5', [LionsfieldController::class, 'Home5'])->name('home5');
    Route::get('home6', [LionsfieldController::class, 'Home6'])->name('home6');
    Route::get('home7', [LionsfieldController::class, 'Home7'])->name('home7');
    Route::get('home8', [LionsfieldController::class, 'Home8'])->name('home8');
    Route::get('home9', [LionsfieldController::class, 'Home9'])->name('home9');

    // Contact routes
    Route::get('frontend/contact/contacts', [ContactController::class, 'ContactMessages'])->name('contacts');

///////////////////////////////////////////////////////////////////////////////////////
// HomePage Lionsfield Routes Front End Two
    Route::get('inicio', [LionsfieldTwoController::class, 'Inicio'])->name('inicio');
    Route::get('frontend_inicio/pages/about_us', [LionsfieldTwoController::class, 'AboutUs'])->name('about_us');
    // # Route
    Route::get('price-plan', [LionsfieldTwoController::class, 'PricePlan'])->name('price-plan');

    Route::get('contact_us', [LionsfieldTwoController::class, 'ContactUs'])->name('contact_us');
    Route::get('metodo', [LionsfieldTwoController::class, 'Metodo'])->name('metodo');
    Route::get('avido_de_privacidad_2', [LionsfieldTwoController::class, 'AvisoDePrivacidad2'])->name('aviso_de_privacidad_2');
    Route::get('admin_2', [LionsfieldTwoController::class, 'Admin2'])->name('admin_2');
    Route::get('erik_2', [LionsfieldTwoController::class, 'Erik2'])->name('erik_2');
    Route::get('ge_2', [LionsfieldTwoController::class, 'Ge2'])->name('ge_2');
    Route::get('hiab_2', [LionsfieldTwoController::class, 'Hiab2'])->name('hiab_2');
    Route::get('holiday_inn_2', [LionsfieldTwoController::class, 'HolidayInn2'])->name('holiday_inn_2');
    Route::get('how_the_brain_works_2', [LionsfieldTwoController::class, 'HowBrain2'])->name('how_the_brain_works_2');
    Route::get('hsbc_2', [LionsfieldTwoController::class, 'Hsbc2'])->name('hsbc_2');
    Route::get('mergers_2', [LionsfieldTwoController::class, 'Mergers2'])->name('mergers_2');
    Route::get('renault_2', [LionsfieldTwoController::class, 'Renault2'])->name('renault_2');
    Route::get('terrible_2', [LionsfieldTwoController::class, 'Terrible2'])->name('terrible_2');
    Route::get('toyota_2', [LionsfieldTwoController::class, 'Toyota2'])->name('toyota_2');
    Route::get('win_win_2', [LionsfieldTwoController::class, 'WinWin2'])->name('win_win_2');
    // Sales Pages
    Route::get('clases-grupales', [LionsfieldTwoController::class, 'ClasesGrupales'])->name('clases-grupales');
    Route::get('clases-individuales', [LionsfieldTwoController::class, 'ClasesIndividuales'])->name('clases-individuales');
    Route::get('clase-premier', [LionsfieldTwoController::class, 'ClasePremier'])->name('clase-premier');
    // Paypal Pages
    Route::get('payment-cancel-2', [LionsfieldTwoController::class, 'PaymentCancelTwo'])->name('payment-cancel-2');
    Route::get('success-confirmation-two', [LionsfieldTwoController::class, 'SuccessConfirmationTwo'])->name('success-confirmation-two');

   /////////////////////////////
   // Portal Routes
 

   
// Student Section
Route::get('student/signup', 'StudentController@signup');
Route::post('student/login_sub', 'StudentController@login');
Route::get('student/dashboard', 'StudentOperationController@dashboard');
Route::get('student/logout', 'StudentOperationController@logout');




