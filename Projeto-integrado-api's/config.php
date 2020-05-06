<?php

return [
	'db' => [
		'host' => 'localhost',
		'dbname' => 'mvc_devclass',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
	],
	'login' => [
		'error' => 'Usuário ou senha inválidos',
	],
	'redirect' => [
		'portal' => [
			'notLoggedIn' => '/',
			'logout' => '/',
		],
		'admin' => [
			'notLoggedIn' => '/admin',
			'logout' => '/admin',
		],
	],
];