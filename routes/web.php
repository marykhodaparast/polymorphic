<?php

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

use App\Staff;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', function () {
    $staff = Staff::findOrFail(1);
    $staff->photos()->create(['path' => 'Edwin2.jpg']);
});
Route::get('/read', function () {
    $staff = Staff::findOrFail(1);
    foreach ($staff->photos as $photo) {
        echo $photo->path . "<br>";
    }
});
Route::get('/update', function () {
    $staff = Staff::findOrFail(1);
    $photo = $staff->photos()->whereId(1)->first();
    $photo->path = "Updated example.jpg";
    $photo->save();
});
Route::get('/delete',function(){
    $staff = Staff::findOrFail(1);
    //$staff->photos()->delete();
    $staff->photos()->whereId(3)->delete();
    //for example you can say $staff->photos->whereName('bad_photo.jpg')->delete();

});
