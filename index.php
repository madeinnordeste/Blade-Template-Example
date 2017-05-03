<?php

require ('vendor/autoload.php');

use duncan3dc\Laravel\BladeInstance;

$blade = new BladeInstance("./views", "./cache/views");

$data = ['title' => 'Blade Test', 'message' => 'Hi Friend!'];

echo $blade->render("index", $data);