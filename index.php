<?php

$names =
[
	'Jeff',
	'John',
	'Mary'
];

foreach ($names as $name)
{
	echo '<li>' . $name . ', ' . '</li>';
}

require 'index.view.php';