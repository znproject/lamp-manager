<?php

return [
	'deps' => [
		'rpc_client_user',
		'user_identity',
	],
	'collection' => [
		[
			'id' => 9,
			'parent_id' => null,
			'uid' => 'e372dafd-8b24-413b-a651-6da2f102b414',
			'checksum' => 'Ge7Avw_lzU-NDGOeV5XEDemEz9o',
			'version' => 1,
			'method' => 'authentication.getTokenByPassword',
			'body' => '{"login":"admin","password":"123456"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Неверный пароль',
			'author_id' => 1,
			'status_id' => 100,
			'created_at' => '2021-09-17 05:07:16',
			'updated_at' => '2021-09-17 14:17:46',
		],
		[
			'id' => 10,
			'parent_id' => null,
			'uid' => 'cb27f6e4-35ed-4b21-9d03-89008b06d571',
			'checksum' => '8E1waPWPHB9RfYUEFNDzdL9PB7E',
			'version' => 1,
			'method' => 'authentication.getTokenByPassword',
			'body' => '{"login":"admin","password":"Wwwqqq111"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Верный пароль',
			'author_id' => 1,
			'status_id' => 100,
			'created_at' => '2021-09-16 19:07:16',
			'updated_at' => '2021-09-17 20:07:16',
		],
		[
			'id' => 11,
			'parent_id' => null,
			'uid' => '0b95adb9-690c-4c9f-d56c-66e86eeb2366',
			'checksum' => 'Ry2rCfdZ0L8X1uH_W7HxPmRU6So',
			'version' => 1,
			'method' => 'userRegistration.requestActivationCode',
			'body' => '{"email":"admin@ex.com"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Запросить код активации',
			'author_id' => 1,
			'status_id' => 100,
			'created_at' => '2021-09-14 16:05:16',
			'updated_at' => '2021-09-16 19:07:16',
		],
		[
			'id' => 18,
			'parent_id' => null,
			'uid' => 'fba53511-204c-4467-f885-35c605ca03fa',
			'checksum' => 'SQPK_AtJQjdVRuY_ZAdizZTXsNQ',
			'version' => 1,
			'method' => 'userRegistration.createAccount',
			'body' => '{"email":"admin@ex.com","code":"465956","password":"Wwqq1$","passwordConfirm":"Wwqq1$"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Создать аккаунт',
			'author_id' => 1,
			'status_id' => 100,
			'created_at' => '2021-09-17 20:07:16',
			'updated_at' => '2021-09-17 14:17:59',
		],
		[
			'id' => 24,
			'parent_id' => null,
			'uid' => '5d07e7af-09c3-4b4b-e4b2-db85418b57bc',
			'checksum' => '-2HUGqxAb3RQ6TQIjO41mmt9SIw',
			'version' => 1,
			'method' => 'moneyTransaction.all',
			'body' => '{}',
			'meta' => '{}',
			'auth_by' => 1,
			'description' => 'История транзакций',
			'author_id' => 1,
			'status_id' => 100,
			'created_at' => '2021-09-14 16:40:52',
			'updated_at' => '2021-09-17 05:07:16',
		],
		[
			'id' => 29,
			'parent_id' => null,
			'uid' => '67af4180-c546-462d-8805-ed999f177a1f',
			'checksum' => 'Ry2rCfdZ0L8X1uH_W7HxPmRU6So',
			'version' => 1,
			'method' => 'userRegistration.requestActivationCode',
			'body' => '{"email":"admin@ex.com"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Запросить код активации',
			'author_id' => 1,
			'status_id' => 90,
			'created_at' => '2021-09-18 06:26:40',
			'updated_at' => null,
		],
		[
			'id' => 30,
			'parent_id' => null,
			'uid' => 'a8275d96-ba57-4bc0-b5cd-4f21fa58dd21',
			'checksum' => 'SQPK_AtJQjdVRuY_ZAdizZTXsNQ',
			'version' => 1,
			'method' => 'userRegistration.createAccount',
			'body' => '{"email":"admin@ex.com","code":"465956","password":"Wwqq1$","passwordConfirm":"Wwqq1$"}',
			'meta' => '{}',
			'auth_by' => null,
			'description' => 'Создать аккаунт',
			'author_id' => 1,
			'status_id' => 90,
			'created_at' => '2021-09-18 06:26:49',
			'updated_at' => null,
		],
	],
];