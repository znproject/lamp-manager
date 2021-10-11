<?php

return [
	[
		'id' => 1,
		'applicationId' => 1,
		'contentHash' => 'BCLEps-bkmfL4xaFuh-clST9g4SEaOLYoF-n1bzW5RY',
		'title' => 'Шаблон 1',
		'content' => '<p>Содержимое 1</p>',
		'statusId' => 100,
		'createdAt' => '2021-07-15 04:49:59',
		'updatedAt' => null,
		'application' => null,
	],
	[
		'id' => 2,
		'applicationId' => 1,
		'contentHash' => 'pLrenHB43Xf4WESR3BCFKPSMhzk8e0txWQR0wxaYyR8',
		'title' => 'Шаблон 2',
		'content' => '<p>Содержимое 2</p>',
		'statusId' => 100,
		'createdAt' => '2021-07-15 04:50:20',
		'updatedAt' => null,
		'application' => null,
	],
	[
		'id' => 3,
		'applicationId' => 1,
		'contentHash' => 'xB331t16WOg_p7cnWPe9CgSKGm-0LGn4v7AulVLsquA',
		'title' => 'Шаблон 3',
		'content' => '<p>Содержимое 3</p>',
		'statusId' => 100,
		'createdAt' => '2021-07-15 04:50:26',
		'updatedAt' => null,
		'application' => null,
	],
	[
		'id' => 4,
		'applicationId' => 1,
		'contentHash' => 'CY6R9LVw-oSN_IZOJiwG_MadW2P4jdK3sFTrkAmvzHs',
		'title' => 'Доверенность на управление транпортным средством без права отчуждения',
		'content' => '<p>
{{head.region}} область. Город {{head.city}}.
{{head.day}} {{head.month}} {{head.year}} года.
</p>

<p>
Я, {{fromPerson.fio}}, уроженец {{fromPerson.birthRegion}} области, {{fromPerson.birthYear}} года рождения,
проживающ___ по адресу: город {{fromPerson.resideCity}}, улица {{fromPerson.resideStreet}},
ДОВЕРЯЮ {{toPerson.fio}}
проживающ_____ по адресу: {{toPerson.address}}
</p>

<p>
управлять принадлежащим мне на основании свидетельства о регистрации транспортного средства серия {{transport.registrationCertificate.serial}} №{{transport.registrationCertificate.number}}, 
выданного РЭО {{transport.registrationCertificate.issuer}} «{{transport.registrationCertificate.issueDay}}» {{transport.registrationCertificate.issueMonth}} {{transport.registrationCertificate.issueYear}} года, 
транспортным средством марки {{transport.tech.brand}}, {{transport.tech.issueYear}} года выпуска,
двигатель №{{transport.tech.engineNumber}}, кузов №{{transport.tech.VinCode}},
шасси №{{transport.tech.chassisNumber}}, регистрационный номер {{transport.registrationCertificate.registrationNumber}},
быть моим представителем в органах внутренних дел, подавать заявления, проходить технический осмотр, получать дубликаты регистрационных документов, страховать, получать страховое возмещение, производить замену номерных агрегатов и номерных знаков, менять цвет, с правом выезда за пределы Республики Казахстан, расписываться за меня и выполнять все действия, связанные с данным поручением.
</p>

<p>
Доверенность выдана сроком на три года с правом передоверия.
</p>',
		'statusId' => 100,
		'createdAt' => '2021-07-20 05:17:11',
		'updatedAt' => null,
		'application' => null,
	],
	[
		'id' => 5,
		'applicationId' => 1,
		'contentHash' => '7FhKwpH4VCfbI-p7jQ8sI_0Ug6NZWCDTwvxl_d1g7Sk',
		'title' => 'Денежная расписка',
		'content' => '<p align="center"><strong>ДЕНЕЖНАЯ РАСПИСКА</strong></p>

<p>Составлена в {{head.city}} (<em>указать наименование населенного пункта</em>).</p>
<p>Дата {{document.createdAt.dateRu}}</p>

<p style="text-align: justify;">Я {{signer.fio}} (<em>указать полностью фамилию, имя и отчество того, кто берет деньги в долг</em>), ИИН {{signer.iin}}, проживающий по адресу : {{signer.resideCity}}, получил от {{contractor.fio}} (<em>указать полностью фамилию, имя и отчество того, у кого деньги берутся взаймы</em>), ИИН {{contractor.fio}}, в долг денежную сумму в размере {{money.value}} тенге (<em>сумма цифрами и прописью</em>).</p>
<p style="text-align: justify;">За пользование деньгами подлежит оплата вознаграждения из расчета {{money.debtPercent}} % в месяц от всей суммы займа.</p>
<p style="text-align: justify;">Обязуюсь отдать указанную в настоящей денежной расписке сумму займа и проценты в срок до «{{money.returnDate.day}}» {{money.returnDate.month}} {{money.returnDate.year}}г.</p>
<p style="text-align: justify;">За нарушение сроков возврата долга по настоящей расписке и вознаграждения обязуюсь выплатить неустойку в размере {{money.expirePercent}} % за каждый день просрочки от просроченной суммы.</p>

<p style="text-align: justify;">Дата составления денежной расписки {{document.createdAt.dateRu}}</p>',
		'statusId' => 100,
		'createdAt' => '2021-08-05 06:54:54',
		'updatedAt' => null,
		'application' => null,
	],
];