<?php

// composer autoload.
include __DIR__ . '/vendor/autoload.php';

// call a new template passing the file.
$homePage = new \mthsena\Templaty(__DIR__ . '/public/home.php');

// adds a param called title
$homePage->addParam('title', 'Home page');

// adds a param called message
$homePage->addParam('message', 'Welcome to the Home page!');

// adds a file called css
$homePage->addParamFromFile('css', __DIR__ . '/public/home.css');

// adds a file called js
$homePage->addParamFromFile('js', __DIR__ . '/public/home.js');

// shows the output.
echo $homePage->getOutput();
