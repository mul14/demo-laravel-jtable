<?php

Route::get('/', function(){
    return View::make('hello');
});

Route::post('people_list', function() {

    $users = User::all()->toArray();

    $result = array(
        'Result' => 'OK',
        'Records' => $users
    );

    return $result;

});

Route::post('/people_create', function() {

    User::create(array(
        'name' => Input::get('name'),
        'age' => Input::get('age'),
    ));

    $result = array(
        'Result' => 'OK',
        'Records' => Input::all()
    );

    return $result;
});

