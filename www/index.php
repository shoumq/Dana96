<?php
session_start();
require 'vendor/autoload.php';
include 'route.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new Blade($views, $cache);


Route::add('/', function ($route = array()) use ($blade) {
    if(!isset($_COOKIE['id'])) { header('Location: /login'); return false; }
    echo $blade->view()->make('panel.index')->render();
});

// Route::add('/workers', function ($route = array()) use ($blade) {
//     if(!isset($_COOKIE['id'])) { header('Location: /login'); return false; }
//     echo $blade->view()->make('panel.workers')->render();
// });

Route::add('/admin', function ($route = array()) use ($blade) {
    if(!isset($_COOKIE['id'])) { header('Location: /login'); return false; }
    echo $blade->view()->make('panel.statistics')->render();
});

Route::add('/table', function ($route = array()) use ($blade) {
    if(!isset($_COOKIE['id'])) { header('Location: /login'); return false; }
    echo $blade->view()->make('panel.table')->render();
});

Route::add('/login', function ($route = array()) use ($blade) {
    if(isset($_COOKIE['id'])) { header('Location: /'); return false; }
    echo $blade->view()->make('panel.auth')->render();
});

Route::add('/register', function ($route = array()) use ($blade) {
    if(isset($_COOKIE['id'])) { header('Location: /'); return false; }
    echo $blade->view()->make('panel.register')->render();
});

// Route::add('/panel/register', function($route = array()) use ($blade){
//   if(isset($_SESSION['id'])) { header('Location: /panel'); return false; }
//   echo $blade->view()->make('panel.registr')->render();
// });

Route::submit();
