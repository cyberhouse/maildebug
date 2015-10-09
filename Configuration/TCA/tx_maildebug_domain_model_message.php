<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message',
		'label' => 'subject',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY uid DESC',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('maildebug') . 'ext_icon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'subject, date, tx_maildebug_from, tx_maildebug_to, cc, bcc, content_type, body',
	),
	'types' => array(
		'1' => array('showitem' => 'subject, date, tx_maildebug_from, tx_maildebug_to, cc, bcc, content_type, body'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'subject' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.subject',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'tx_maildebug_from' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.tx_maildebug_from',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'tx_maildebug_to' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.tx_maildebug_to',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'cc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.cc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bcc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.bcc',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'content_type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.content_type',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'body' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:maildebug/Resources/Private/Language/locallang.xml:tx_maildebug_domain_model_message.body',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);
