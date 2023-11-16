<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $saluto = '"Hello World"';
    $name = 'Antonio';
    $surname = 'Faddanno';
    $colors = ['rosso', 'giallo', 'verde', 'blu', 'magenta', 'beige', 'arancione'];
    return view('home', compact('saluto', 'name', 'surname', 'colors'));
});


Route::get('/about', function () {
    $saluto = '"Hello World About"';
    $collab = 'Bacon Ipsum!';
    $comment = 'Bacon ipsum dolor amet sirloin pancetta t-bone, andouille turducken beef turkey tri-tip. Biltong prosciutto shankle shoulder pork belly pancetta alcatra cupim frankfurter ball tip burgdoggen capicola salami t-bone. Bresaola corned beef turducken swine, strip steak cow meatball fatback. Flank kevin sausage tri-tip, porchetta tongue corned beef ribeye. Ball tip picanha venison andouille, tail strip steak spare ribs doner ham chuck bacon pork chop beef cow.';
    $author = 'Mr. Pig';

    return view('about', compact('saluto', 'comment', 'author', 'collab'));
});


Route::get('/services', function () {
    $saluto = '"Servizi"';
    $freshProducts = ['Braciole di maiale', 'Fiorentina', 'Costata di manzo', 'Costolette di agnello', 'Costolette di maiale', 'Salsicce fresche dolci e piccanti', 'Macinato di Vitello e Maiale', 'Filetto', 'Arista', 'Pollo intero'];
    $preparedProducts = ['Pulled Pork', 'Porchetta', 'Alette e cosce di pollo', 'Salsiccia di Maiale secca dolce', 'Salsiccia di Maiale secca piccante', 'Smash Burgers', 'Bacon', 'Guanciale *', 'Prosciutto crudo stagionato', '\'Nduja', 'Arpa di San Venanzo'];
    $comment = 'Bacon ipsum dolor amet sirloin pancetta t-bone, andouille turducken beef turkey tri-tip. Biltong prosciutto shankle shoulder pork belly pancetta alcatra cupim frankfurter ball tip burgdoggen capicola salami t-bone. Bresaola corned beef turducken swine, strip steak cow meatball fatback. Flank kevin sausage tri-tip, porchetta tongue corned beef ribeye. Ball tip picanha venison andouille, tail strip steak spare ribs doner ham chuck bacon pork chop beef cow.';


    return view('services', compact('saluto', 'freshProducts', 'preparedProducts', 'comment'));
});
