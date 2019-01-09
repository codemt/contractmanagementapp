
<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('tester')->user();

    //dd($users);

    return view('tester.home');
})->name('home');



// //Tester
// Route::view('Product_To_Test','tester.index')->name('new');
// Route::view('tested','tester.show')->name('tested');






