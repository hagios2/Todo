<?php

/* bootstrap and set up project */
$query = require 'bootstrap.php';


/* setup routes */

$routes = [


    '' => 'Controllers/index.php',

    'about' => 'Controllers/about.php',

    'contact' => 'Controllers/contact.php',

    'portfolio' => 'Controllers/portfolio'

];