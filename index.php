<?php

require 'functions.php';

$task = [
    'title' => 'Washing',
    'due' => 'Tomorrow',
    'assignee' => 'Harry',
    'completed' => true
];

echo '<pre>';

var_dump($task);

echo '</pre>';

echo isPersonLegalAge(17);
echo isPersonLegalAge(19);

require 'index.view.php';

require 'classes.php';

require 'database.php';