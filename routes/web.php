<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EmployeeController;

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


//Admin login form
Route::get('/admin/login',[AdminController::class,'index']);

//admin post login
Route::post('/admin/post/login',[AdminController::class,'postLogin'])->name('login.post');



//admin logout
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');


//admin all route
Route::middleware(['admin'])->group(function () {
 //admin dashboard
Route::get('/admin/dashboard',[AdminController::class,'adminDashboard']);
//manage user
Route::get('/manage/user',[AdminController::class,'manageUser'])->name('manage.user');
//create user form
Route::get('/create/user',[AdminController::class,'createUserForm'])->name('create.user');
//store user
Route::post('/store/user',[AdminController::class,'storeUser'])->name('store.user');
//edit user
Route::get('/edit/user/{id}',[AdminController::class,'editUser'])->name('edit.user');
//update user
Route::post('/update/user',[AdminController::class,'updateUser'])->name('update.user');
//delete user
Route::get('/delete/user/{id}',[AdminController::class,'deleteUser'])->name('delete.user');
//user profile show
Route::get('/user/profile/{id}',[AdminController::class,'userProfileShow'])->name('user.profile');
//user profile edit
Route::get('/user/profile/edit/{id}',[AdminController::class,'userProfileEdit'])->name('user.profile.edit');
//user profile update
Route::post('/user/profile/update',[AdminController::class,'userProfileUpdate'])->name('update.user.profile');

/** employee all route start */
Route::get('/manage/employee',[EmployeeController::class,'manageEmployee'])->name('manage.employee');
Route::get('/add/employee',[EmployeeController::class,'addEmployee'])->name('add.employee');
Route::post('/store/employee',[EmployeeController::class,'storeEmployee'])->name('store.employee');
Route::get('/edit/employee/{id}',[EmployeeController::class,'editEmployee'])->name('edit.employee');
Route::post('/update/employee',[EmployeeController::class,'updateEmployee'])->name('update.employee');
Route::get('/delete/employee/{id}',[EmployeeController::class,'deleteEmployee'])->name('delete.employee');
Route::get('/view/employee/{id}',[EmployeeController::class,'viewEmployee'])->name('view.employee');
/** employee all route end */


});
