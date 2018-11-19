<?php

function input_secure($input){
 	$input= stripcslashes($input);
	$input= trim($input);
	$input= htmlspecialchars($input);
	return $input;
 }