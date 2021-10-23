<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ContactTwoController;
use App\Http\Controllers\LionsfieldController;
use App\Http\Controllers\LionsfieldTwoController;
use App\Http\Controllers\ChangePasswordController;

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
    Route::post('admin/pages/students/students_updatet/{id}', [StudentController::class, 'StudentUpdate'])->name('admin.pages.students.update');
    Route::get('admin/pages/students/students_delete/{id}', [StudentController::class, 'StudentDelete'])->name('admin.pages.students.delete');
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
    Route::post('/contact-form2', [ContactTwoController::class, 'storeContactForm2'])->name('contact-form2.store');
    Route::get('/delete_contact2/{id}', [ContactTwoController::class, 'deleteContactMessage2'])->name('delete_contact2');
});

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
    Route::get('clase-_premier', [LionsfieldTwoController::class, 'ClasePremier'])->name('clase-premier');
    // Paypal Pages
    Route::get('payment-cancel-2', [LionsfieldTwoController::class, 'PaymentCancelTwo'])->name('payment-cancel-2');
    Route::get('success-confirmation-two', [LionsfieldTwoController::class, 'SuccessConfirmationTwo'])->name('success-confirmation-two');


