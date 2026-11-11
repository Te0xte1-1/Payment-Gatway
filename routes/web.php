<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Shifts_Controller;
use App\Http\Controllers\Admin\Reports_Controller;
use App\Http\Controllers\Admin\Visitors_Controller;
use App\Http\Controllers\Admin\Dashboard_Controller;
use App\Http\Controllers\Admin\room\room_controller;
use App\Http\Controllers\Admin\Treasures_Controller;
use App\Http\Controllers\Creadit\Creadit_Controller;
use App\Http\Controllers\Admin\Super_Visors_Controller;
use App\Http\Controllers\Admin\Admins\Admins_Controller;
use App\Http\Controllers\Admin\Events\Events_Controller;
use App\Http\Controllers\Admin\Visitors_Type_Controller;
use App\Http\Controllers\Admin\booking\booking_controller;
use App\Http\Controllers\Admin\General_Settings_Controller;
use App\Http\Controllers\Admin\Callendar\Callendar_Controller;
use App\Http\Controllers\Admin\Room_Type\Room_Type_Controller;
use App\Http\Controllers\Admin\Transactions\Transactions_Controller;

//////////////// +++++++++++++++ ////////////////////////
/*--------------------- Ajax ----------------------------- */

Route::get('/', [Dashboard_Controller::class, 'login'])->name('login');
Route::get('login', [Dashboard_Controller::class, 'login'])->name('login');
Route::post('login/store', [Dashboard_Controller::class, 'login_store'])->name('login.store');
Route::get('user/new', [Dashboard_Controller::class, 'new'])->name('user.new');
Route::post('user/store', [Dashboard_Controller::class, 'new_store'])->name('user.new.store');
Route::get('/Quick_access', [Dashboard_Controller::class, 'home'])->name('Quick_access');

Route::get('Room', [room_Controller::class, 'index'])->name('Room');
Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('Dashboard', [Dashboard_Controller::class, 'index'])->name('Dashboard');
    Route::post('logout', [Dashboard_Controller::class, 'logout'])->name('logout');
    
    // Creadit
    Route::get('Creadit', [Creadit_Controller::class, 'index'])->name('Creadit');
    Route::post('Creadit/Store', [Creadit_Controller::class,  'Store'])->name('Creadit.Store');
    Route::get('Creadit/Edit', [Creadit_Controller::class,   'Edit'])->name('Creadit.Edit');
    Route::get('Creadit/Update', [Creadit_Controller::class, 'Update'])->name('Creadit.Update');
    Route::get('Creadit/Delete', [Creadit_Controller::class, 'Delete'])->name('Creadit.Delete');

    // Room
    Route::get('Rooms', [room_Controller::class, 'index'])->name('Rooms');
    Route::get('Rooms/Search', [room_Controller::class, 'search'])->name('Rooms.Search');
    Route::post('Rooms/Store', [room_Controller::class,  'Store'])->name('Rooms.Store');
    Route::get('Rooms/Edit', [room_Controller::class,   'Edit'])->name('Rooms.Edit');
    Route::get('Rooms/Update', [room_Controller::class, 'Update'])->name('Rooms.Update');
    Route::get('Rooms/Delete', [room_Controller::class, 'Delete'])->name('Rooms.Delete');


     // Transactions
     Route::get('Transactions', [Transactions_Controller::class, 'index'])->name('Transactions');
     Route::post('Transactions/Store', [Transactions_Controller::class,  'Store'])->name('Transactions.Store');
     Route::get('Transactions/Edit', [Transactions_Controller::class,   'Edit'])->name('Transactions.Edit');
     Route::get('Transactions/Update', [Transactions_Controller::class, 'Update'])->name('Transactions.Update');
     Route::get('Transactions/Delete', [Transactions_Controller::class, 'Delete'])->name('Transactions.Delete');
    
     // Events
     Route::get('Events', [Events_Controller::class, 'index'])->name('Events');
     Route::post('Events/Store', [Events_Controller::class,  'Store'])->name('Events.Store');
     Route::get('Events/Edit', [Events_Controller::class,   'Edit'])->name('Events.Edit');
     Route::get('Events/Update', [Events_Controller::class, 'Update'])->name('Events.Update');
     Route::get('Events/Delete', [Events_Controller::class, 'Delete'])->name('Events.Delete');
   
     // Callendar
     Route::get('Callendar', [Callendar_Controller::class, 'index'])->name('Callendar');
     Route::post('Callendar/Store', [Callendar_Controller::class,  'Store'])->name('Callendar.Store');
     Route::get('Callendar/Edit', [Callendar_Controller::class,   'Edit'])->name('Callendar.Edit');
     Route::get('Callendar/Update', [Callendar_Controller::class, 'Update'])->name('Callendar.Update');
     Route::get('Callendar/Delete', [Callendar_Controller::class, 'Delete'])->name('Callendar.Delete');


    // General_Settings
    Route::get('General_Settings', [General_Settings_Controller::class, 'index'])->name('General_Settings');
    Route::post('General_Settings/Store', [General_Settings_controller::class,  'Store'])->name('General_Settings.Store');
    Route::get('General_Settings/Edit', [General_Settings_Controller::class,   'Edit'])->name('General_Settings.Edit');
    Route::get('General_Settings/Update', [General_Settings_Controller::class, 'Update'])->name('General_Settings.Update');
    Route::get('General_Settings/Delete', [General_Settings_Controller::class, 'Delete'])->name('General_Settings.Delete');


    // Visitors
    Route::get('Visitors', [Visitors_Controller::class, 'index'])->name('Visitors');
    Route::get('Visitors/Store', [Visitors_Controller::class,  'Store'])->name('Visitors.Store');
    Route::get('Visitors/Edit', [Visitors_Controller::class,   'Edit'])->name('Visitors.Edit');
    Route::get('Visitors/Update', [Visitors_Controller::class, 'Update'])->name('Visitors.Update');
    Route::get('Visitors/Delete', [Visitors_Controller::class, 'Delete'])->name('Visitors.Delete');


    // Visitor_Type
    Route::get('Visitor_Type', [Visitors_Type_Controller::class, 'index'])->name('Visitor_Type');
    Route::get('Visitor_Type/Store', [Visitors_Type_Controller::class,  'Store'])->name('Visitor_Type.Store');
    Route::get('Visitor_Type/Edit', [Visitors_Type_Controller::class,   'Edit'])->name('Visitor_Type.Edit');
    Route::get('Visitor_Type/Update', [Visitors_Type_Controller::class, 'Update'])->name('Visitor_Type.Update');
    Route::get('Visitor_Type/Delete', [Visitors_Type_Controller::class, 'Delete'])->name('Visitor_Type.Delete');

    // Room_Type
    Route::get('Room_Type', [Room_Type_Controller::class, 'index'])->name('Room_Type');
    Route::get('Room_Type/Store', [Room_Type_Controller::class,  'Store'])->name('Room_Type.Store');
    Route::get('Room_Type/Edit', [Room_Type_Controller::class,   'Edit'])->name('Room_Type.Edit');
    Route::get('Room_Type/Update', [Room_Type_Controller::class, 'Update'])->name('Room_Type.Update');
    Route::get('Room_Type/Delete', [Room_Type_Controller::class, 'Delete'])->name('Room_Type.Delete');

    // Supser_Visors
    Route::get('Supser_Visors', [Super_Visors_Controller::class, 'index'])->name('Supser_Visors');
    Route::get('Supser_Visors/Store', [Super_Visors_Controller::class,  'Store'])->name('Supser_Visors.Store');
    Route::get('Supser_Visors/Edit', [Super_Visors_Controller::class,   'Edit'])->name('Supser_Visors.Edit');
    Route::get('Supser_Visors/Update', [Super_Visors_Controller::class, 'Update'])->name('Supser_Visors.Update');
    Route::get('Supser_Visors/Delete', [Super_Visors_Controller::class, 'Delete'])->name('Supser_Visors.Delete');


    // Admins
    Route::get('Admins', [Admins_Controller::class, 'index'])->name('Admins');
    Route::get('Admins/Store', [Admins_Controller::class,  'Store'])->name('Admins.Store');
    Route::get('Admins/Edit', [Admins_Controller::class,   'Edit'])->name('Admins.Edit');
    Route::get('Admins/Update', [Admins_Controller::class, 'Update'])->name('Admins.Update');
    Route::get('Admins/Delete', [Admins_Controller::class, 'Delete'])->name('Admins.Delete');


    // Shifts
    Route::get('Shifts', [Shifts_Controller::class, 'index'])->name('Shifts');
    Route::get('Shifts/Store', [Shifts_Controller::class,  'Store'])->name('Shifts.Store');
    Route::get('Shifts/Edit', [Shifts_Controller::class,   'Edit'])->name('Shifts.Edit');
    Route::get('Shifts/Update', [Shifts_Controller::class, 'Update'])->name('Shifts.Update');
    Route::get('Shifts/Delete', [Shifts_Controller::class, 'Delete'])->name('Shifts.Delete');

    // Reports
    Route::get('Reports', [Reports_Controller::class, 'index'])->name('Reports');
    Route::get('Reports/Store', [Reports_Controller::class,  'Store'])->name('Reports.Store');
    Route::get('Reports/Edit', [Reports_Controller::class,   'Edit'])->name('Reports.Edit');
    Route::get('Reports/Update', [Reports_Controller::class, 'Update'])->name('Reports.Update');
    Route::get('Reports/Delete', [Reports_Controller::class, 'Delete'])->name('Reports.Delete');

    // Treasures
    Route::get('Treasures', [Treasures_Controller::class, 'index'])->name('Treasures');
    Route::get('Treasures/Store', [Treasures_Controller::class,  'Store'])->name('Treasures.Store');
    Route::get('Treasures/Edit', [Treasures_Controller::class,   'Edit'])->name('Treasures.Edit');
    Route::get('Treasures/Update', [Treasures_Controller::class, 'Update'])->name('Treasures.Update');
    Route::get('Treasures/Delete', [Treasures_Controller::class, 'Delete'])->name('Treasures.Delete');

    // Booking
    Route::get('booking', [booking_controller::class, 'index'])->name('Booking');
    Route::get('booking/All', [room_Controller::class, 'index'])->name('Booking.All');
    Route::post('booking/Store', [booking_controller::class, 'Store'])->name('Booking.Store');
    Route::get('booking/Edit', [booking_controller::class, 'Edit'])->name('Booking.Edit');
    Route::get('booking/Update', [booking_controller::class, 'Update'])->name('Booking.Update');
    Route::get('booking/Delete', [booking_controller::class, 'Delete'])->name('Booking.Delete');
    Route::get('booking/Taken', [booking_controller::class, 'taken'])->name('Booking.Taken');
    Route::get('booking/Detailse', [booking_controller::class, 'detailse'])->name('Booking.Detailse');
});
/*--------------------- Ajax ----------------------------- */
//////////////// +++++++++++++++ ////////////////////////
