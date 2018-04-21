<?php

$task = 
[
	'title' 		=> 'Finish homework',
	'due_date' 		=> 'today',
	'assigned_to' 	=> 'Ryan',
	'completed' 	=> false
];

foreach ($task as $heading => $value)
{
	echo ucwords("$heading : $value </br>");
}

require 'index.view.php';