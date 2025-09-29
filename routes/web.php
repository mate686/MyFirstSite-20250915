<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/valami', function () {
    return view("valami");
});

Route::get('/contact', function () {
    return view("contact");
});

Route:: view('/contact','contact');

Route::get('/tomb-visszaad', function(){
    $tomb = ["kulcs" => "ertek"];
    return $tomb["kulcs"];
});

/*Route::get('tomb-viszza', function () {
    return ["kulcs" => "eretek"];
});*/

Route::get('/udvozles', function(){
    $name="Máté";
    $age = 18;
    return view("udvozollek",[
        "name" => $name,
        "kor" => $age
]);
});

Route::get('/blista', function(){
    $elemek = ["sajt", "liszt", "tej","alma","csoki","dinnye"];

    return view("sajatlista", ["bevasarlolista" => $elemek]);
});


Route::get("/felhasznaloiadat", function(){
    return view("userinput", ["input" => request("felhasznalonev"),
    "vnev" => request("vezetekn"),
    "knev" => request("keresztn")
    ]);
});


Route::get('/posts/{post}',function($post){
    $posts = [
        'first' => 'Elsö blogbejegyzés  tartalma',
        'second' => 'Második blogbejegyzés  tartalma',
    ];

    return view('postnezet',[
        'postcim' => $posts[$post] ?? "Nincs ilyen blogbejegyzés    "
    ]);
});

Route::get("vezerlo/{post}",[PostController::class,
'show'

]);


Route::get("/csoport",[GroupController::class,'list']);

Route::get("/csoport-tag/{id}",[GroupController::class,'show']);
