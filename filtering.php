<?php

	// check if the email is a valid email address
	
	$email = ['xmpl01@gmail.com','xmpl02notmail.com'];
	var_dump($email);

	// using if else statement
	if (filter_var($email[0], FILTER_VALIDATE_EMAIL)){
		echo("Email is valid!");
	}else{
		echo("Email isn't valid!");
	}

	echo('<br/>');

	// using ternary operator
	echo(filter_var($email[1], FILTER_VALIDATE_EMAIL) ? "Email is valid!" : "Email isn't valid!");


	// parsing url

	function parseURL(){
		if (isset($_GET['url'])){
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}

	var_dump(parseURL());
