<?php

return [
	'deps' => [
		'notify_transport',
		'notify_type',
	],
	'collection' => [
		[
			'id' => 1,
			'type_id' => 1,
			'transport_id' => 1,
			'status_id' => 100,
		],
		[
			'id' => 2,
			'type_id' => 2,
			'transport_id' => 1,
			'status_id' => 100,
		],
		[
			'id' => 3,
			'type_id' => 4,
			'transport_id' => 1,
			'status_id' => 100,
		],

        [
            'id' => 4,
            'type_id' => 1,
            'transport_id' => 2,
            'status_id' => 100,
        ],
        [
            'id' => 5,
            'type_id' => 2,
            'transport_id' => 2,
            'status_id' => 100,
        ],
        [
            'id' => 6,
            'type_id' => 4,
            'transport_id' => 2,
            'status_id' => 100,
        ],
	],
];