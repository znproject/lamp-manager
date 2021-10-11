<?php

return [
	'deps' => [
		'notify_type',
		'user_identity',
		'person_contact_type',
	],
	'collection' => [
		[
			'id' => 17,
			'user_id' => 2,
			'notify_type_id' => 4,
			'contact_type_id' => 1,
			'is_enabled' => false,
		],
		[
			'id' => 18,
			'user_id' => 2,
			'notify_type_id' => 4,
			'contact_type_id' => 2,
			'is_enabled' => true,
		],
	],
];