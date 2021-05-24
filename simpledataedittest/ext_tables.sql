CREATE TABLE tx_simpledataedittest_domain_model_main (

	description text,
	my_rte text,
	title varchar(255) DEFAULT '' NOT NULL,
	my_percent varchar(255) DEFAULT '' NOT NULL,
	my_money varchar(255) DEFAULT '' NOT NULL,
	my_float double(11,2) DEFAULT '0.00' NOT NULL,
	my_integer varchar(255) DEFAULT '' NOT NULL,
	my_boolean varchar(255) DEFAULT '' NOT NULL,
	my_time int(11) DEFAULT '0' NOT NULL,
	my_timesstamp int(11) DEFAULT '0' NOT NULL,
	my_datetime datetime DEFAULT NULL,
	my_images int(11) unsigned NOT NULL default '0',
	my_files int(11) unsigned NOT NULL default '0',
	my_list text,
	my_children int(11) unsigned DEFAULT '0' NOT NULL,
	my_progenitor int(11) unsigned DEFAULT '0' NOT NULL,
	my_peergroup int(11) unsigned DEFAULT '0' NOT NULL

);

CREATE TABLE tx_simpledataedittest_domain_model_child (

	main int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	description text

);

CREATE TABLE tx_simpledataedittest_domain_model_progenitor (

	title varchar(255) DEFAULT '' NOT NULL,
	description text

);

CREATE TABLE tx_simpledataedittest_domain_model_peer (

	title varchar(255) DEFAULT '' NOT NULL,
	description text

);

CREATE TABLE tx_simpledataedittest_main_peer_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
