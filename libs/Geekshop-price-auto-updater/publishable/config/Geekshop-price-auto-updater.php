<?php

return [

	'enabled' => true,
	
	'amazon' => [

		'enabled' => true,

		'method'  => 'webservices',

		'hosts'   => [

			'amazon_com' => [ // Amazon.com

				'enabled' => true,

				// Required when using webservices
				'access_key'    => env('AMAZON_COM_ACCESS_KEY', env('AMAZON_ACCESS_KEY')),
				'secret_key'    => env('AMAZON_COM_SECRET_KEY', env('AMAZON_SECRET_KEY')),
				'associate_tag' => env('AMAZON_COM_ASSOCIATE_TAG', env('AMAZON_ASSOCIATE_TAG')),

			],

			'amazon_co_uk' => [ // Amazon.co.uk

				'enabled' => true,

				// Required when using webservices
				'access_key'    => env('AMAZON_CO_UK_ACCESS_KEY', env('AMAZON_ACCESS_KEY')),
				'secret_key'    => env('AMAZON_CO_UK_SECRET_KEY', env('AMAZON_SECRET_KEY')),
				'associate_tag' => env('AMAZON_CO_UK_ASSOCIATE_TAG', env('AMAZON_ASSOCIATE_TAG')),

			],

			'amazon_es' => [ // Amazon.es

				'enabled' => true,

				// Required when using webservices
				'access_key'    => env('AMAZON_ES_ACCESS_KEY', env('AMAZON_ACCESS_KEY')),
				'secret_key'    => env('AMAZON_ES_SECRET_KEY', env('AMAZON_SECRET_KEY')),
				'associate_tag' => env('AMAZON_ES_ASSOCIATE_TAG', env('AMAZON_ASSOCIATE_TAG')),

			],

		],

	],

];