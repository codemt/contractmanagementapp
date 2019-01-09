<?php

Route::get('/','HomeController@index');
Route::get('/clientcontract/{id}','ContractDetailController@clientcontract');
Route::get('/contractPdf/{id}','ContractController@getContractPdf');


Route::post('contractdetail/{id}','ContractDetailController@store');
// Forms
Route::view('Add_New_Form','form.create')->name('create_form');
Route::view('All_Form','form.index')->name('all_form');

// Clients
Route::post('/clientContract','DataTableController@clientContract')->name('clientContract');
Route::post('/getClientEmail','HomeController@getClientEmail')->name('getClientEmail');
Route::post('/createclient','ContractController@createclient');
Route::view('Add_New_Client','supervisor.clients.create')->name('create_client');
Route::get('All_Client','ContractController@allclient')->name('all_client');
Route::get('deletecontract/{id}','ContractController@destroy');
Route::post('/status','ContractController@status');
Route::post('/deleteClient/{id}','ContractController@deleteclient');


// Contracts
Route::get('Add_New_Contract/{id}','ContractController@createcontract')->name('create_contract');
//Route::view('Contract','supervisor.contracts.index')->name('contracts');
Route::view('All_Contract','supervisor.contracts.show')->name('all_contract');


//Assembled Stock
Route::view('Assembled_Products','supervisor.products.assembled')->name('assembled_products');
Route::view('Tested_Products','supervisor.products.tested')->name('tested_products');



//User
Route::get('clientApprovedContract','ContractController@clientApprovedContract')->name('clientApprovedContract');
Route::get('clientCancelledContract','ContractController@clientCancelledContract')->name('clientCancelledContract');

Auth::routes();
Route::get('client/login','Auth\LoginController@showLoginForm')->name('login');
Route::get('/contractCancelled/{id}','ContractController@cancelled');
Route::post('client/login','Auth\LoginController@login')->name('login');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'supervisor'], function () {
  Route::get('/login', 'SupervisorAuth\LoginController@showLoginForm')->name('supervisor.login');
  Route::post('/login', 'SupervisorAuth\LoginController@login');
  Route::post('/logout', 'SupervisorAuth\LoginController@logout')->name('supervisor.logout');

  Route::get('/register', 'SupervisorAuth\RegisterController@showRegistrationForm')->name('supervisor.register');
  Route::post('/register', 'SupervisorAuth\RegisterController@register');

  Route::post('/password/email', 'SupervisorAuth\ForgotPasswordController@sendResetLinkEmail')->name('supervisor.password.request');
  Route::post('/password/reset', 'SupervisorAuth\ResetPasswordController@reset')->name('supervisor.password.email');
  Route::get('/password/reset', 'SupervisorAuth\ForgotPasswordController@showLinkRequestForm')->name('supervisor.password.reset');
  Route::get('/password/reset/{token}', 'SupervisorAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'technician'], function () {
  Route::get('/login', 'TechnicianAuth\LoginController@showLoginForm')->name('technician.login');
  Route::post('/login', 'TechnicianAuth\LoginController@login');
  Route::post('/logout', 'TechnicianAuth\LoginController@logout')->name('technician.logout');

  Route::get('/register', 'TechnicianAuth\RegisterController@showRegistrationForm')->name('technician.register');
  Route::post('/register', 'TechnicianAuth\RegisterController@register');

  Route::post('/password/email', 'TechnicianAuth\ForgotPasswordController@sendResetLinkEmail')->name('technician.password.request');
  Route::post('/password/reset', 'TechnicianAuth\ResetPasswordController@reset')->name('technician.password.email');
  Route::get('/password/reset', 'TechnicianAuth\ForgotPasswordController@showLinkRequestForm')->name('technician.password.reset');
  Route::get('/password/reset/{token}', 'TechnicianAuth\ResetPasswordController@showResetForm');
});




Route::group(['prefix' => 'tester'], function () {
  Route::get('/login', 'TesterAuth\LoginController@showLoginForm')->name('tester.login');
  Route::post('/login', 'TesterAuth\LoginController@login');
  Route::post('/logout', 'TesterAuth\LoginController@logout')->name('tester.logout');

  Route::get('/register', 'TesterAuth\RegisterController@showRegistrationForm')->name('tester.register');
  Route::post('/register', 'TesterAuth\RegisterController@register');

  Route::post('/password/email', 'TesterAuth\ForgotPasswordController@sendResetLinkEmail')->name('tester.password.request');
  Route::post('/password/reset', 'TesterAuth\ResetPasswordController@reset')->name('tester.password.email');
  Route::get('/password/reset', 'TesterAuth\ForgotPasswordController@showLinkRequestForm')->name('tester.password.reset');
  Route::get('/password/reset/{token}', 'TesterAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'stock'], function () {
  Route::get('/login', 'StockAuth\LoginController@showLoginForm')->name('stock.login');
  Route::post('/login', 'StockAuth\LoginController@login');
  Route::post('/logout', 'StockAuth\LoginController@logout')->name('stock.logout');

  Route::get('/register', 'StockAuth\RegisterController@showRegistrationForm')->name('stock.register');
  Route::post('/register', 'StockAuth\RegisterController@register');

  Route::post('/password/email', 'StockAuth\ForgotPasswordController@sendResetLinkEmail')->name('stock.password.request');
  Route::post('/password/reset', 'StockAuth\ResetPasswordController@reset')->name('stock.password.email');
  Route::get('/password/reset', 'StockAuth\ForgotPasswordController@showLinkRequestForm')->name('stock.password.reset');
  Route::get('/password/reset/{token}', 'StockAuth\ResetPasswordController@showResetForm');
});

//Stock
Route::post('/editstock','ProductStockController@update');

//Contract
Route::get('/contractPdf/{id}','ContractController@contractPdf')->name('contractPdf');
Route::resource('contract','ContractController');

//Contract-Details
Route::resource('contractdetail','ContractDetailController');

//Profile Page
// Route::view('Profile','client.profile')->name('profile');

Route::get('/profile','HomeController@profile')->name('profile');
Route::post('/updateProfile','HomeController@updateProfile')->name('updateProfile');



Route::view('Deduct_Stock', 'stock/deductstock')->name('deductstock');

Route::view('Replace/Return', 'stock/replace-return')->name('replace-return');


Route::group(['prefix' => 'ic'], function () {
  Route::get('/login', 'IcAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'IcAuth\LoginController@login');
  Route::post('/logout', 'IcAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'IcAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'IcAuth\RegisterController@register');

  Route::post('/password/email', 'IcAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'IcAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'IcAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'IcAuth\ResetPasswordController@showResetForm');
});
