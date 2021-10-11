<?php

return [
	'deps' => [
		'notify_type',
        'language',
	],
	'collection' => [
        [
            'id' => 1,
            'type_id' => 1,
            'language_code' => 'ru',
            'subject' => 'Заблокированы попытки ввода неверного пароля',
            'content' => 'В Ваш аккаунт кто-то пытался зайти, и ввел неверный пароль несколько раз подряд. Вход в Ваш аккаунт был заблокирован на некотороее время.',
        ],
        [
            'id' => 2,
            'type_id' => 2,
            'language_code' => 'ru',
            'subject' => 'Восстановление пароля',
            'content' => 'Код активации: {{code}}',
        ],
		[
			'id' => 4,
			'type_id' => 4,
			'language_code' => 'ru',
			'subject' => 'Ваш пароль изменен',
			'content' => 'Если пароль изменяли не вы, то можете отменить изменения по ссылке - {{env.web_url}}/settings/security/restore-password',
		],
	],
];