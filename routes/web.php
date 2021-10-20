<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() { 
    Route::get('redirects', 'App\Http\Controllers\HomeController@index');
    Route::get('logout', [HomeController::class, 'Logout'])->name('logout');
    Route::get('admin/dashboard', [HomeController::class, 'AdminDashboard'])->name('admin.dashboard');
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
    
});

