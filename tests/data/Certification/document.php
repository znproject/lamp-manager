<?php

return [
	[
		'id' => 1,
		'hash' => '1.LPtuntq1U7CvME7H48xxCqkNKUPhByRPPkew76xo6VA',
		'templateId' => 4,
		'contentHash' => 'LPtuntq1U7CvME7H48xxCqkNKUPhByRPPkew76xo6VA',
		'content' => '<p>
<b>Карагандинская</b> область. Город <b>Караганда</b>.
<b>28</b> <b>июля</b> <b>2021</b> года.
</p>

<p>
Я, <b>Петров Василий</b>, уроженец <b>Карагандинской</b> области, <b>1984</b> года рождения,
проживающ___ по адресу: город <b>Караганда</b>, улица <b>Пушкина, д. 234</b>,
ДОВЕРЯЮ <b>Воробьев Николай</b>
проживающ_____ по адресу: <b>г. Караганда, ул. Бухар-Жирау 77</b>
</p>

<p>
управлять принадлежащим мне на основании свидетельства о регистрации транспортного средства серия <b>4398592075</b> №<b>12946</b>, 
выданного РЭО <b>МВД РК</b> «<b>16</b>» <b>мая</b> <b>2021</b> года, 
транспортным средством марки <b>Toyota</b>, <b>2015</b> года выпуска,
двигатель №<b>j2354769867834</b>, кузов №<b>3678756344234</b>,
шасси №<b>A234BEM07</b>, регистрационный номер <b>3452565783</b>,
быть моим представителем в органах внутренних дел, подавать заявления, проходить технический осмотр, получать дубликаты регистрационных документов, страховать, получать страховое возмещение, производить замену номерных агрегатов и номерных знаков, менять цвет, с правом выезда за пределы Республики Казахстан, расписываться за меня и выполнять все действия, связанные с данным поручением.
</p>

<p>
Доверенность выдана сроком на три года с правом передоверия.
</p>',
		'xml' => '<?xml version="1.0" encoding="UTF-8"?>

<root>
  <head>
	<region>Карагандинская</region>
	<city>Караганда</city>
	<day>28</day>
	<month>июля</month>
	<year>2021</year>
  </head>
  <fromPerson>
	<fio>Петров Василий</fio>
	<birthRegion>Карагандинской</birthRegion>
	<birthYear>1984</birthYear>
	<resideCity>Караганда</resideCity>
	<resideStreet>Пушкина, д. 234</resideStreet>
  </fromPerson>
  <toPerson>
	<fio>Воробьев Николай</fio>
	<address>г. Караганда, ул. Бухар-Жирау 77</address>
  </toPerson>
  <transport>
	<registrationCertificate>
	  <serial>4398592075</serial>
	  <number>12946</number>
	  <issuer>МВД РК</issuer>
	  <issueDay>16</issueDay>
	  <issueMonth>мая</issueMonth>
	  <issueYear>2021</issueYear>
	  <registrationNumber>3452565783</registrationNumber>
	</registrationCertificate>
	<tech>
	  <brand>Toyota</brand>
	  <issueYear>2015</issueYear>
	  <engineNumber>j2354769867834</engineNumber>
	  <VinCode>3678756344234</VinCode>
	  <chassisNumber>A234BEM07</chassisNumber>
	</tech>
  </transport>
</root>',
		'attributes' => [
			'head' => [
				'region' => 'Карагандинская',
				'city' => 'Караганда',
				'day' => '28',
				'month' => 'июля',
				'year' => '2021',
			],
			'fromPerson' => [
				'fio' => 'Петров Василий',
				'birthRegion' => 'Карагандинской',
				'birthYear' => '1984',
				'resideCity' => 'Караганда',
				'resideStreet' => 'Пушкина, д. 234',
			],
			'toPerson' => [
				'fio' => 'Воробьев Николай',
				'address' => 'г. Караганда, ул. Бухар-Жирау 77',
			],
			'transport' => [
				'registrationCertificate' => [
					'serial' => '4398592075',
					'number' => '12946',
					'issuer' => 'МВД РК',
					'issueDay' => '16',
					'issueMonth' => 'мая',
					'issueYear' => '2021',
					'registrationNumber' => '3452565783',
				],
				'tech' => [
					'brand' => 'Toyota',
					'issueYear' => '2015',
					'engineNumber' => 'j2354769867834',
					'VinCode' => '3678756344234',
					'chassisNumber' => 'A234BEM07',
				],
			],
		],
		'statusId' => 100,
		'createdAt' => '2021-07-27 13:04:27',
		'updatedAt' => null,
		'template' => null,
		'signatures' => null,
	],
	[
		'id' => 2,
		'hash' => '2.xgpOrUTWeeD0Ze0HHHxbs_pKxfOZHBWR9aJP5FcwwSc',
		'templateId' => 5,
		'contentHash' => 'xgpOrUTWeeD0Ze0HHHxbs_pKxfOZHBWR9aJP5FcwwSc',
		'content' => '<p align="center"><strong>ДЕНЕЖНАЯ РАСПИСКА</strong></p>

<p>Составлена в <b>headCity</b> (<em>указать наименование населенного пункта</em>).</p>
<p>Дата <b>«05» августа 2021г.</b></p>

<p style="text-align: justify;">Я <b>signerFio</b> (<em>указать полностью фамилию, имя и отчество того, кто берет деньги в долг</em>), ИИН <b>signerIin</b>, проживающий по адресу : <b>signerResideCity</b>, получил от <b>contractorFio</b> (<em>указать полностью фамилию, имя и отчество того, у кого деньги берутся взаймы</em>), ИИН <b>contractorFio</b>, в долг денежную сумму в размере <b>moneyValue</b> тенге (<em>сумма цифрами и прописью</em>).</p>
<p style="text-align: justify;">За пользование деньгами подлежит оплата вознаграждения из расчета <b>moneyDebtPercent</b> % в месяц от всей суммы займа.</p>
<p style="text-align: justify;">Обязуюсь отдать указанную в настоящей денежной расписке сумму займа и проценты в срок до «<b>moneyReturnDateDay</b>» <b>moneyReturnDateMonth</b> <b>moneyReturnDateYear</b>г.</p>
<p style="text-align: justify;">За нарушение сроков возврата долга по настоящей расписке и вознаграждения обязуюсь выплатить неустойку в размере <b>moneyExpirePercent</b> % за каждый день просрочки от просроченной суммы.</p>

<p style="text-align: justify;">Дата составления денежной расписки <b>«05» августа 2021г.</b></p>',
		'xml' => '<?xml version="1.0" encoding="UTF-8"?>

<root>
  <documents>
	<media media-type="text">
	  <media-reference mime-type="text/html"/>
	  <media-object><![CDATA[<p align="center"><strong>ДЕНЕЖНАЯ РАСПИСКА</strong></p>

<p>Составлена в headCity (<em>указать наименование населенного пункта</em>).</p>
<p>Дата «05» августа 2021г.</p>

<p style="text-align: justify;">Я signerFio (<em>указать полностью фамилию, имя и отчество того, кто берет деньги в долг</em>), ИИН signerIin, проживающий по адресу : signerResideCity, получил от contractorFio (<em>указать полностью фамилию, имя и отчество того, у кого деньги берутся взаймы</em>), ИИН contractorFio, в долг денежную сумму в размере moneyValue тенге (<em>сумма цифрами и прописью</em>).</p>
<p style="text-align: justify;">За пользование деньгами подлежит оплата вознаграждения из расчета moneyDebtPercent % в месяц от всей суммы займа.</p>
<p style="text-align: justify;">Обязуюсь отдать указанную в настоящей денежной расписке сумму займа и проценты в срок до «moneyReturnDateDay» moneyReturnDateMonth moneyReturnDateYearг.</p>
<p style="text-align: justify;">За нарушение сроков возврата долга по настоящей расписке и вознаграждения обязуюсь выплатить неустойку в размере moneyExpirePercent % за каждый день просрочки от просроченной суммы.</p>

<p style="text-align: justify;">Дата составления денежной расписки «05» августа 2021г.</p>]]></media-object>
	  <media.caption>document.htm</media.caption>
	</media>
  </documents>
  <attributes>
	<head>
	  <city>headCity</city>
	</head>
	<document>
	  <templateId>1</templateId>
	  <createdAt>
		<iso8601>2021-08-05T11:12:06+0000</iso8601>
	  </createdAt>
	</document>
	<signer>
	  <fio>signerFio</fio>
	  <iin>signerIin</iin>
	  <resideCity>signerResideCity</resideCity>
	</signer>
	<contractor>
	  <fio>contractorFio</fio>
	</contractor>
	<money>
	  <value>moneyValue</value>
	  <debtPercent>moneyDebtPercent</debtPercent>
	  <returnDate>
		<day>moneyReturnDateDay</day>
		<month>moneyReturnDateMonth</month>
		<year>moneyReturnDateYear</year>
	  </returnDate>
	  <expirePercent>moneyExpirePercent</expirePercent>
	</money>
  </attributes>
</root>',
		'attributes' => [
			'head' => [
				'city' => 'headCity',
			],
			'document' => [
				'templateId' => 1,
				'createdAt' => [
					'iso8601' => '2021-08-05T11:12:06+0000',
				],
			],
			'signer' => [
				'fio' => 'signerFio',
				'iin' => 'signerIin',
				'resideCity' => 'signerResideCity',
			],
			'contractor' => [
				'fio' => 'contractorFio',
			],
			'money' => [
				'value' => 'moneyValue',
				'debtPercent' => 'moneyDebtPercent',
				'returnDate' => [
					'day' => 'moneyReturnDateDay',
					'month' => 'moneyReturnDateMonth',
					'year' => 'moneyReturnDateYear',
				],
				'expirePercent' => 'moneyExpirePercent',
			],
		],
		'statusId' => 100,
		'createdAt' => '2021-08-05 11:12:06',
		'updatedAt' => null,
		'template' => null,
		'signatures' => null,
	],
];