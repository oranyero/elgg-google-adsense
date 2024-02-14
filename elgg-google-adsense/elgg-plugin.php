<?php

return [
	'plugin' => [
		'name' => 'Elgg Google Adsense',
		'activate_on_install' => false,
	],
	'routes' => [
        'ads.txt' => [
            'path' => '/ads.txt',
            'resource' => 'google-ads/ads',
        ],
    ]

];
