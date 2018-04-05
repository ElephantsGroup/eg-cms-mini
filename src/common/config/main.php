<?php
return [
    'language' => 'fa-IR',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
	'components' => [
		'jdate' => [
			'class' => 'elephantsGroup\jDate\DateTime',
		],
	],
    'modules' => [
        'base' => [
            'class' => 'elephantsGroup\base\Module',
            'language_array' => [
                'en' => [
                    'name' => 'English',
                    'dir' => 'ltr'
                ],
                'fa-IR' => [
                    'name' => 'Persian',
                    'dir' => 'rtl'
                ],
                'ar-SA' => [
                    'name' => 'Arabic',
                    'dir' => 'rtl'
                ]
            ],
            'default_language' => 'fa-IR'
        ],
	]
];
