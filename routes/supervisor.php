<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('supervisor')->user();

    //dd($users);

    return view('supervisor.home');
})->name('home');

//stock assign
Route::resource('supervisorStockAssign','SupervisorStockAssignController');
// Route::get('/assignStock/{contractId}','SupervisorStockAssignController@getAssignStock')->name('assignStock.create');
Route::get('Approved_Contract','SupervisorStockAssignController@approved')->name('approved_contract');
Route::get('/completed/{contractId}','SupervisorStockAssignController@complete')->name('assignStock.completed');
Route::get('/assigned_contract','SupervisorStockAssignController@getassigncontract')->name('assigned_contract');
Route::get('/assembled_contract','SupervisorStockAssignController@getassembledcontract')->name('assembled_contract');
Route::get('/tested_contract','SupervisorStockAssignController@gettestedcontract')->name('tested_contract');
Route::get('/completed_contract','SupervisorStockAssignController@getcompletedcontract')->name('completed_contract');
Route::post('/assign_tester','SupervisorStockAssignController@assign_tester');
Route::post('/change_technician','SupervisorStockAssignController@change_technician')->name('change_technician');
Route::get('/testedProductPdf/{id}','SupervisorStockAssignController@tested_status')->name('testedProductPdf');

//supervisor master routes
Route::get('create_user/{role}','SupervisorStockAssignController@createUser')->name('create_user');
Route::post('post_create_user/{role}','SupervisorStockAssignController@postCreateUser')->name('post_create_user');
Route::get('production_report/{id}','SupervisorStockAssignController@production_report_pdf')->name('production_report_pdf');

//import client
Route::post('import_client','ContractController@importClient')->name('import_client');

Route::view('Technicians','supervisor.all_technician')->name('all_technician');
Route::view('Tester','supervisor.all_tester')->name('all_tester');

Route::post('addToReadyMadeStock/{supervisor_stock_assign_id}','ReadyMadeProductController@store')->name('ready_made_product.store');

Route::get('readyMadeProductList','ReadyMadeProductController@index')->name('ready_made_product.index');
Route::post('/assignStock','SupervisorStockAssignController@getAssignStock')->name('assignStock.create');
Route::get('/all_contracts','SupervisorStockAssignController@allContract')->name('all_contract');
Route::post('/filter_contracts','SupervisorStockAssignController@filterContract')->name('filter_contract');
Route::get('/contract_history/{id}','SupervisorStockAssignController@contractHistory')->name('contract_history');
Route::get('/supervisorStockAssignPdf/{id}','SupervisorStockAssignController@stockAssignPdf')->name('stock_assign_pdf');
Route::get('/getControlNo/{tech_id}','SupervisorStockAssignController@getControlNo')->name('tech_control_no');
