<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('technician')->user();

    //dd($users);

    return view('technician.home');
})->name('home');

Route::get('/newTask','TechnicianController@index')->name('new_task');
Route::post('/assembled/{stockassign_id}','TechnicianController@assembled_contract')->name('assembled_product');
Route::get('/assembled_technician','TechnicianController@assembled')->name('assembled_technician');
Route::post('/production report','TechnicianController@production_report')->name('production_report');
Route::get('/supervisor_assignStock_pdf/{id}','TechnicianController@stockAssignPdf')->name('asign.pdf');
Route::post('/returnToTester/{id}','TechnicianController@returnToTester')->name('returnToTester');
//production report
Route::get('production_report/{id}','TechnicianController@production_report_pdf')->name('production_report_pdf');

Route::get('/new_assignment','TesterController@productForTesting')->name('new.test.product');
Route::get('/product_tested','TesterController@productTested')->name('product.tested');
Route::get('/testProduct/{id}/','TesterController@gettestProduct')->name('test_product');
Route::post('/postTestProduct/{id}/{test_result_id?}','TesterController@postTestProduct')->name('store_test_product');
Route::post('/sendToSupervisor/{id}','TesterController@sendToSupervisor')->name('send_to_supervisor');
Route::get('/editTest/{id}','TesterController@editTest')->name('edit_test');
Route::post('/returnToTechnician/{id}','TesterController@returnToTechnician')->name('return_to_technician');
Route::get('/technician_product_assigned/{id}','TechnicianController@technician_product_assigned')->name('product_assigned');
Route::post('/get_all_stock/{id}','TechnicianController@getAllStock')->name('get_all_stock');