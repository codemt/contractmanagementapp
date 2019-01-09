<?php

Route::get('/home', function () {
	$users[] = Auth::user();
	$users[] = Auth::guard()->user();
	$users[] = Auth::guard('stock')->user();

    //dd($users);

	return view('stock.home');
})->name('home');

Route::resource('category','CategoryController');

Route::resource('brand','BrandController');

//stock Controller

Route::post('/addQuantity','ProductStockController@addProdutQty');

Route::post('/editstock','ProductStockController@update');

Route::resource('ProductStock','ProductStockController');

Route::get('/New_Assignment','ProductStockController@new_assignment')->name('new_assignment');

Route::get('/Completed_Assignment','ProductStockController@completed_assignment')->name('completed_assignment');

Route::get('/assign_stock/{id}/{status?}','ProductStockController@assignStock')->name('assign_stock');

Route::post('/assign_stock/{supervisor_stock_assign_id}/{assign_stock_id?}','ProductStockController@postAssignStock')->name('postAssignStock');

Route::get('/reassign_stock/{assign_stock_id}','ProductStockController@reassignStock')->name('reassign_stock');

Route::get('showAssignStock/{assign_stock_id}','ProductStockController@showAssignStock')->name('show_assigned_stock');

Route::post('/draftStock/{supervisor_stock_assign_id}/{assign_stock_id?}','ProductStockController@draftStock')->name('draftStock');

Route::get('/draftedStock','ProductStockController@getdraftedStock')->name('drafted_stock');

Route::get('/completeDraftAssignment/{id}','ProductStockController@completeDraftAssignment')->name('complete_draft_assignment');

Route::any('/stockPurchaseHistory','ProductStockController@stockPurchaseHistory')->name('stockPurchaseHistory');

Route::get('productPurchaseHistory/{id}','ProductStockController@productPurchaseHistory')->name('product_purchase_history');

Route::post('search_filter','ProductStockController@filterProduct')->name('search-filter');

Route::get('productAssignPdf/{id}','ProductStockController@getProductAssignPdf')->name('product_assign_pdf');

Route::get('directbuyers', 'DirectSoldProductController@getDirectbuyers')->name('direct_buyers');
Route::get('Add_Stock', 'DirectSoldProductController@addStock')->name('add_stock');
Route::post('direct_buyer/store','DirectSoldProductController@store')->name('direct_buyer.store');
Route::get('direct_deduct_report/{id}','DirectSoldProductController@report')->name('direct_deduct_report');


Route::get('return_replace_index','RrsController@index')->name('return_replace_index');
Route::get('return_replace_show','RrsController@return_replace_show')->name('replace-return');

Route::post('return_replace_post','RrsController@return_replace_store')->name('rrs_store');
Route::get('return_replace_report/{id}','RrsController@report')->name('return_replace_report');



