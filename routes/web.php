<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function(){
    $ninjas =[
        ['name' => 'Ryu', 'skill' => 'Ninjutsu', 'id' => 1, 'strength' => 75],
        ['name' => 'Ken', 'skill' => 'Taijutsu', 'id' => 2, 'strength' => 65],
        ['name' => 'Hanzo', 'skill' => 'Genjutsu', 'id' => 3, 'strength' => 85]
    ];
    $ninja_object = (object) $ninjas[0];
    return view('ninjas.index', ["greeting" => "Hello Ninjas", "ninjas" => $ninjas, "ninja_object" => $ninja_object]);
});

Route::get('/ninjas/create', function(){
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function($id){
    return view('ninjas.show', ['id' => $id]);
});