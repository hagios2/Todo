<?php



/* bootstrap and set up project */
$query = require 'core/bootstrap.php';



require Router::load('routes.php')

    ->direct(Request::url());
