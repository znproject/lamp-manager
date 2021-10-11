<?php

return [
	'deps' => [],
	'collection' => [
		[
			'id' => 1,
			'name' => 'phone',
			'title' => 'Телефон',
			'icon' => 'fas fa-phone',
			'rule' => '/\\d{5,12}/i',
		],
		[
			'id' => 2,
			'name' => 'email',
			'title' => 'Почта',
			'icon' => 'fas fa-at',
			'rule' => '/[-\\w.]+@([A-z0-9][-A-z0-9]+\\.)+[A-z]{2,4}/i',
		],
		[
			'id' => 3,
			'name' => 'web',
			'title' => 'Уведомления на сайте',
			'icon' => 'far fa-bell',
			'rule' => '/\\d+/i',
		],
		[
			'id' => 4,
			'name' => 'address',
			'title' => 'Адрес',
			'icon' => 'fas fa-map-marker-alt',
			'rule' => '/.+/i',
		],
		[
			'id' => 5,
			'name' => 'operating_mode',
			'title' => 'Режим работы',
			'icon' => 'far fa-clock',
			'rule' => '/.+/i',
		],
		[
			'id' => 6,
			'name' => 'coordinates',
			'title' => 'Координаты на карте',
			'icon' => 'fas fa-map-marked-alt',
			'rule' => '/.+/i',
		],
		[
			'id' => 7,
			'name' => 'instagram',
			'title' => 'Instagram',
			'icon' => 'fab fa-instagram',
			'rule' => '/.+/i',
		],
		[
			'id' => 8,
			'name' => 'whatsapp',
			'title' => 'WhatsApp',
			'icon' => 'fab fa-whatsapp',
			'rule' => '/.+/i',
		],
		[
			'id' => 9,
			'name' => 'facebook',
			'title' => 'Facebook',
			'icon' => 'fab fa-facebook-f	',
			'rule' => '/.+/i',
		],
	],
];