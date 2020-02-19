<?php

$query = require 'bootstrap.php';


$todos = $query->selectAll('todo', 'Todo');


require 'index.view.php';