<?php

// Route::get('/home', function () {
//     $users[] = Auth::user();
//     $users[] = Auth::guard()->user();
//     $users[] = Auth::guard('ic')->user();

//     //dd($users);

//     return view('ic.home');
// })->name('home');



Route::get('/home', 'IC\ICController@index')->name('home');

Route::get('/assign_stock/{id}/{status?}', 'IC\ICController@assignStock')->name('assign_stock');

Route::get('/stock/all', 'IC\ICController@getICStock')->name('getICStock');


Route::post('search_filter', 'IC\ICController@filterProduct')->name('filter');

Route::post('/addQuantity', 'IC\ICController@addProdutQty');


Route::resource('ICStock', 'IC\ICController');

Route::post('/assign_stock/{supervisor_stock_assign_id}/{assign_stock_id?}', 'IC\ICController@postAssignStock')->name('postAssignStock');
Route::post('/draftStock/{supervisor_stock_assign_id}/{assign_stock_id?}','IC\ICController@draftStock')->name('draftStock');