<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id'     => '885238188206576',
			'client_secret' => '43ad2e55908009c079a0cb9ccebb195a',
			'scope'         => ['email'],
		],
		'Google' => [
    'client_id'     => 'Your Google client ID',
    'client_secret' => 'Your Google Client Secret',
    'scope'         => ['userinfo_email', 'userinfo_profile'],
],  

	]

];