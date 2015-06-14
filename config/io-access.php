<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Admins & Moderators — Permissions
	|--------------------------------------------------------------------------
	|
	| These are a CRUD-Task orgenized keys and values, indicating the
	| permissions that are affected to each level.
	|
	| Use route names inside the permissions.
	| Ex: admin.users.create OR site.profile
	| You can also use wildcards: admin.posts.*
	|
	*/
	'permissions' => [
		'superadmin' => '*',

		'admin' 	 => [
			'CREATE' 	=> [],
			'READ' 		=> [],
			'UPDATE' 	=> [],
			'DELETE' 	=> []
		],

		'moderator'	 => [
			'CREATE' 	=> [],
			'READ' 		=> [],
			'UPDATE'	=> [],
			'DELETE' 	=> []
		],
	],



	/*
	|--------------------------------------------------------------------------
	| Public Pages
	|--------------------------------------------------------------------------
	|
	| These pages and actions/tasks are permitted to every user, wether is
	| logged in or not.
	|
	*/
	'public' => [
		'CREATE' 	=> [],
		'READ' 		=> []
	]


];
