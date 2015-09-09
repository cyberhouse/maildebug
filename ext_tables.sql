#
# Table structure for table 'tx_maildebug_domain_model_message'
#
CREATE TABLE tx_maildebug_domain_model_message (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	subject varchar(255) DEFAULT '' NOT NULL,
	date int(11) DEFAULT '0' NOT NULL,
	tx_maildebug_from varchar(255) DEFAULT '' NOT NULL,
	tx_maildebug_to varchar(255) DEFAULT '' NOT NULL,
	cc varchar(255) DEFAULT '' NOT NULL,
	bcc varchar(255) DEFAULT '' NOT NULL,
	content_type varchar(255) DEFAULT '' NOT NULL,
	body text,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);