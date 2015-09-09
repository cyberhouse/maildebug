<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'maildebug',
	'description' => 'debug mails',
	'category' => 'backend',
	'author' => 'Georg Ringer',
	'author_email' => '',
	'author_company' => 'Cyberhouse GmbH',
	'state' => 'stable',
	'uploadfolder' => FALSE,
	'createDirs' => '',
	'clearCacheOnLoad' => TRUE,
	'version' => '1.0.0',
	'constraints' =>
		array(
			'depends' =>
				array(
					'typo3' => '6.2.0-7.9.99',
				),
		),
);