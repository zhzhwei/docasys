#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	modell int(11) unsigned DEFAULT '0' NOT NULL,

	loesungsbezeichnung varchar(255) DEFAULT '' NOT NULL,
	teilprojektnummer varchar(255) DEFAULT '' NOT NULL,
	gestaltungsweise text NOT NULL,
	betrifft_hersteller tinyint(1) unsigned DEFAULT '0' NOT NULL,
	betrifft_betreiber tinyint(1) unsigned DEFAULT '0' NOT NULL,
	bemerkung text NOT NULL,
	risiko text NOT NULL,
	blocker text NOT NULL,
	loesungsklasse int(11) DEFAULT '0' NOT NULL,
	phase_der_thermischen_wirkkette int(11) DEFAULT '0' NOT NULL,
	gestaltungsart int(11) DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_modell'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_modell (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	modellbezeichnung varchar(255) DEFAULT '' NOT NULL,
	anfangsbedingungen varchar(255) DEFAULT '' NOT NULL,
	modellierungszweck text NOT NULL,
	randbedingungen varchar(255) DEFAULT '' NOT NULL,
	erforderliche_modellguete varchar(255) DEFAULT '' NOT NULL,
	modellierungssoftware varchar(255) DEFAULT '' NOT NULL,
	modelltyp int(11) DEFAULT '0' NOT NULL,
	abbildungsbereich int(11) DEFAULT '0' NOT NULL,
	modellumfang int(11) DEFAULT '0' NOT NULL,
	modellstruktur int(11) DEFAULT '0' NOT NULL,
	parametrierungsart int(11) DEFAULT '0' NOT NULL,
	erforderliches_modell int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesungsbeziehung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	randbedingungen text NOT NULL,
	ist_anwendbar tinyint(1) unsigned DEFAULT '0' NOT NULL,
	hat_anpassungsnotwendigkeit tinyint(1) unsigned DEFAULT '0' NOT NULL,
	anpassungsgrad varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	loesungsbeziehungsart int(11) DEFAULT '0' NOT NULL,
	quelle int(11) unsigned DEFAULT '0',
	senke int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesung (

	modell int(11) unsigned DEFAULT '0' NOT NULL,

);
