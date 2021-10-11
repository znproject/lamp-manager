<?php

return [
	'deps' => [],
	'collection' => [
		[
			'id' => 1,
			'name' => 'email',
			'handler_class' => 'ZnUser\\Notify\\Domain\\Libs\\ContactDrivers\\EmailDriver',
			'status_id' => 100,
		],
		[
			'id' => 2,
			'name' => 'phone',
			'handler_class' => 'ZnUser\\Notify\\Domain\\Libs\\ContactDrivers\\PhoneDriver',
			'status_id' => 100,
		],
		[
			'id' => 3,
			'name' => 'web',
			'handler_class' => 'ZnUser\\Notify\\Domain\\Libs\\ContactDrivers\\WebDriver',
			'status_id' => 100,
		],
	],
];