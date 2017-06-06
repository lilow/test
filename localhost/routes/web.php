<?php

Route::get("page/{slag}", "IndexController@view");


/*

Route::get('/room/{id}', function ($id) {

$rooms = [
    "1" => [
        "title" => "Пещера",
        "description" =>"Холодно",
        "actions" => [
            "Пойти домой" => "2",
            "Заплакать" => "3",
            "Лечь спать" => "3"
        ]
    ],
    "2" => [

    ],
    "3" => [

    ],

];
$room = $rooms[$id];

    return view("quest", ["room" => $room]);
})->name("room");

Route::get('/', function () {
    return redirect()->route("room", ["id" => 1]);
});


*/


