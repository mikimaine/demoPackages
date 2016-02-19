<?php
/**
 * Created by Mikimaine.
 * User: MIKI$
 * Date: 2/19/2016
 * Time: 1:33 AM
*/

Route::get('demo/test', function () {
    return 'Test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('demo', 'Mikimaine\Demo\Http\Controller\DemoController@index');

Route::get('demo/view', function () {
    return view('mikimaine-demo::index');
});