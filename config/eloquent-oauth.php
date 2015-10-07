<?php

return [
	'table' => 'oauth_identities',
	'providers' => [
		'facebook' => [
			'client_id' => '1916241251934323',
			'client_secret' => '94ad457dc362fac42c52ce2d7caf3abb',
			'redirect_uri' => 'http://localhost:8000/facebook/login',
			'scope' => [],
		],
		'google' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/google/redirect',
			'scope' => [],
		],
		'github' => [
			'client_id' => 'd9bd6ccd2ecb1f3d46a2',
			'client_secret' => '6e3fe0cc227e9897ea59fdbfaa1211753a637507',
			'redirect_uri' => 'http://localhost/github/login',
			'scope' => [],
		],
		'linkedin' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/linkedin/redirect',
			'scope' => [],
		],
		'instagram' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/instagram/redirect',
			'scope' => [],
		],
		'soundcloud' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
			'scope' => [],
		],
	],
];
