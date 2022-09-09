#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_parametereinheit'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_parametereinheit (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	zielparameter int(11) unsigned DEFAULT '0' NOT NULL,

	einheitenname varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,


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

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesungsbeziehung int(11) unsigned DEFAULT '0' NOT NULL,
	loesungsbeziehung1 int(11) unsigned DEFAULT '0' NOT NULL,
	eignungsprofil int(11) unsigned DEFAULT '0' NOT NULL,

	loesungsbezeichnung varchar(255) DEFAULT '' NOT NULL,
	teilprojektnummer varchar(255) DEFAULT '' NOT NULL,
	gestaltungsanforderungen varchar(255) DEFAULT '' NOT NULL,
	betrifft_hersteller tinyint(1) unsigned DEFAULT '0' NOT NULL,
	betrifft_betreiber tinyint(1) unsigned DEFAULT '0' NOT NULL,
	realisierungsrisiko text NOT NULL,
	bemerkung text NOT NULL,
	loesungsklasse int(11) DEFAULT '0' NOT NULL,
	phase_der_thermischen_wirkkette int(11) DEFAULT '0' NOT NULL,
	physikalischer_effekt int(11) DEFAULT '0' NOT NULL,
	invasivitaetsgrad int(11) DEFAULT '0' NOT NULL,
	wartungsintervall int(11) DEFAULT '0' NOT NULL,
	loesungsart int(11) DEFAULT '0' NOT NULL,
	nettofluss double(11,2) DEFAULT '0.00' NOT NULL,
	ausgangsfluss double(11,2) DEFAULT '0.00' NOT NULL,
	eingangsfluss double(11,2) DEFAULT '0.00' NOT NULL,
	anwendungsfall varchar(255) DEFAULT '' NOT NULL,
	flexibilitaet int(11) DEFAULT '0' NOT NULL,
	maschinensteuerungszugriff int(11) DEFAULT '0' NOT NULL,
	maschinenstillstandsnotwendigkeit int(11) DEFAULT '0' NOT NULL,
	hallenklimatisierung int(11) DEFAULT '0' NOT NULL,
	nachruestbarkeit int(11) DEFAULT '0' NOT NULL,
	technologiebereitschaft int(11) DEFAULT '0' NOT NULL,
	gestaltungsart int(11) unsigned DEFAULT '0' NOT NULL,
	arbeitsschritte int(11) unsigned DEFAULT '0' NOT NULL,
	derzeitiger_einsatzort int(11) unsigned DEFAULT '0' NOT NULL,
	komponentenauswirkung int(11) unsigned DEFAULT '0' NOT NULL,
	auswirkung int(11) unsigned DEFAULT '0' NOT NULL,
	ablauf int(11) unsigned DEFAULT '0' NOT NULL,
	entscheidungen int(11) unsigned DEFAULT '0' NOT NULL,
	input_ressource int(11) unsigned DEFAULT '0' NOT NULL,
	input_modell int(11) unsigned DEFAULT '0' NOT NULL,
	input_messmittel int(11) unsigned DEFAULT '0' NOT NULL,
	input_daten int(11) unsigned DEFAULT '0' NOT NULL,
	output_ressource int(11) unsigned DEFAULT '0' NOT NULL,
	output_modell int(11) unsigned DEFAULT '0' NOT NULL,
	output_daten int(11) unsigned DEFAULT '0' NOT NULL,
	output_messmittel int(11) unsigned DEFAULT '0' NOT NULL,
	output_methoden int(11) unsigned DEFAULT '0' NOT NULL,
	komponentenbedingung int(11) unsigned DEFAULT '0' NOT NULL,


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
	quelle int(11) unsigned DEFAULT '0' NOT NULL,
	senke int(11) unsigned DEFAULT '0' NOT NULL,


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

	lstmodellinput int(11) unsigned DEFAULT '0' NOT NULL,
	lstmodelloutput int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	zweck text NOT NULL,
	beschreibung text NOT NULL,
	anfangsbedingungen varchar(255) DEFAULT '' NOT NULL,
	randbedingungen varchar(255) DEFAULT '' NOT NULL,
	erforderliche_modellguete varchar(255) DEFAULT '' NOT NULL,
	modellierungssoftware varchar(255) DEFAULT '' NOT NULL,
	modellart int(11) DEFAULT '0' NOT NULL,
	abbildungsbereich int(11) DEFAULT '0' NOT NULL,
	modellumfang int(11) DEFAULT '0' NOT NULL,
	modellstruktur int(11) DEFAULT '0' NOT NULL,
	parametrisierungsart int(11) DEFAULT '0' NOT NULL,
	modelliert int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkstueck'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkstueck (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

	werkstueckname varchar(255) DEFAULT '' NOT NULL,
	abmessungen varchar(255) DEFAULT '' NOT NULL,
	kantlaenge int(11) DEFAULT '0' NOT NULL,
	form varchar(255) DEFAULT '' NOT NULL,
	kontur varchar(255) DEFAULT '' NOT NULL,
	toleranzen text NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

	steuerungsname varchar(255) DEFAULT '' NOT NULL,
	hersteller varchar(255) DEFAULT '' NOT NULL,
	ist_frei_programmierbar tinyint(1) unsigned DEFAULT '0' NOT NULL,
	hat_lizenzkosten tinyint(1) unsigned DEFAULT '0' NOT NULL,
	hat_offene_schnittstelle tinyint(1) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lastfall'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lastfall (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	fallbezeichnung varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	ist_kuenstlich tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_realistisch tinyint(1) unsigned DEFAULT '0' NOT NULL,
	typische_beharrungskurven int(11) unsigned NOT NULL default '0',
	lastfallart int(11) DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_ressource'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_ressource (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	lsgressourceinput int(11) unsigned DEFAULT '0' NOT NULL,
	lsgressourceoutput int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	zweck text NOT NULL,
	beschreibung varchar(255) DEFAULT '' NOT NULL,
	ist_buendel tinyint(1) unsigned DEFAULT '0' NOT NULL,
	hersteller varchar(255) DEFAULT '' NOT NULL,
	ressourcenart int(11) DEFAULT '0' NOT NULL,
	wert double(11,2) DEFAULT '0.00' NOT NULL,
	einheit int(11) DEFAULT '0' NOT NULL,
	kosten int(11) DEFAULT '0' NOT NULL,
	zeitaufwand int(11) DEFAULT '0' NOT NULL,
	art int(11) unsigned DEFAULT '0',


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	werkzeuganzahl int(11) DEFAULT '0' NOT NULL,
	werkzeugwechselanteil double(11,2) DEFAULT '0.00' NOT NULL,
	zeitspanvolumen int(11) DEFAULT '0' NOT NULL,
	werkzeuge text NOT NULL,
	mengenleistung int(11) DEFAULT '0' NOT NULL,
	fertigungsflexibilitaet int(11) DEFAULT '0' NOT NULL,
	werkzeugwechselhaeufigkeit int(11) DEFAULT '0' NOT NULL,
	repraesentierende_lastfaelle int(11) unsigned DEFAULT '0' NOT NULL,
	schnittgeschwindigkeit int(11) unsigned DEFAULT '0' NOT NULL,
	drehzahlbereich int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_gestaltungsart'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_gestaltungsart (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	gestaltungsart int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	unterart int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponententyp'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponententyp (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,
	modell int(11) unsigned DEFAULT '0' NOT NULL,
	maschinenkomponente int(11) unsigned DEFAULT '0' NOT NULL,
	komponentenauswirkung int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	komponentenart int(11) DEFAULT '0' NOT NULL,
	achsenanzahl int(11) DEFAULT '0' NOT NULL,
	fuehrungsart int(11) DEFAULT '0' NOT NULL,
	antriebsart int(11) DEFAULT '0' NOT NULL,
	auf_visualisierung_anzeigen tinyint(1) unsigned DEFAULT '0' NOT NULL,
	auf_visualisierung_x int(11) DEFAULT '0' NOT NULL,
	auf_visualisierung_y int(11) DEFAULT '0' NOT NULL,
	auf_visualisierung_breite int(11) DEFAULT '0' NOT NULL,
	auf_visualisierung_hoehe int(11) DEFAULT '0' NOT NULL,
	bestandteile int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_auswirkung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_auswirkung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung text NOT NULL,
	bemerkung text NOT NULL,
	tendenz int(11) DEFAULT '0' NOT NULL,
	wert double(11,2) DEFAULT '0.00' NOT NULL,
	wert_von double(11,2) DEFAULT '0.00' NOT NULL,
	wert_bis double(11,2) DEFAULT '0.00' NOT NULL,
	zielparameter int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messverfahren'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messverfahren (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	lsgmessmittelinput int(11) unsigned DEFAULT '0' NOT NULL,
	lsgmessmitteloutput int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	zweck text NOT NULL,
	beschreibung varchar(255) DEFAULT '' NOT NULL,
	messparameter int(11) unsigned DEFAULT '0' NOT NULL,
	arbeitsschritte int(11) unsigned DEFAULT '0' NOT NULL,
	messmittel int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messparameter'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messparameter (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	parametername varchar(255) DEFAULT '' NOT NULL,
	bereich text NOT NULL,
	ist_tcp_parameter tinyint(1) unsigned DEFAULT '0' NOT NULL,
	einheit int(11) unsigned DEFAULT '0',


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_untersuchung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_untersuchung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	verfahrensbezeichnung varchar(255) DEFAULT '' NOT NULL,
	untersuchungsart int(11) DEFAULT '0' NOT NULL,
	messprinzip varchar(255) DEFAULT '' NOT NULL,
	messgenauigkeit varchar(255) DEFAULT '' NOT NULL,
	messgroesse varchar(255) DEFAULT '' NOT NULL,
	messablauf varchar(255) DEFAULT '' NOT NULL,
	vorgehen int(11) unsigned DEFAULT '0' NOT NULL,
	entscheidungen int(11) unsigned DEFAULT '0' NOT NULL,
	erforderliche_ressourcen int(11) unsigned DEFAULT '0' NOT NULL,
	erforderliche_modelle int(11) unsigned DEFAULT '0' NOT NULL,
	erforderliche_messverfahren int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,
	untersuchung int(11) unsigned DEFAULT '0' NOT NULL,

	vorgehenstitel varchar(255) DEFAULT '' NOT NULL,
	bpmn_modell int(11) unsigned DEFAULT '0' NOT NULL,
	cmmn_modell int(11) unsigned DEFAULT '0' NOT NULL,
	zusammenfassung text NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_entscheidung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_entscheidung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,
	untersuchung int(11) unsigned DEFAULT '0' NOT NULL,

	entscheidungstitel varchar(255) DEFAULT '' NOT NULL,
	zusammenfassung text NOT NULL,
	dmn_modell int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkstoff'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkstoff (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	werkstoffname varchar(255) DEFAULT '' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	techanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

	geschwindigkeit_von double(11,2) DEFAULT '0.00' NOT NULL,
	geschwindigkeit_bis double(11,2) DEFAULT '0.00' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	techanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

	drehzahlbereich_von double(11,2) DEFAULT '0.00' NOT NULL,
	drehzahlbereich_bis double(11,2) DEFAULT '0.00' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

	komponentenbezeichnung varchar(255) DEFAULT '' NOT NULL,
	typ int(11) unsigned DEFAULT '0' NOT NULL,
	kuehlung int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,
	unternehmen int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	hersteller varchar(255) DEFAULT '' NOT NULL,
	preis double(11,2) DEFAULT '0.00' NOT NULL,
	kinematik int(11) DEFAULT '0' NOT NULL,
	schmierungsart int(11) DEFAULT '0' NOT NULL,
	maschinenkomponenten int(11) unsigned DEFAULT '0' NOT NULL,
	maschinensteuerung int(11) unsigned DEFAULT '0' NOT NULL,
	messkomponente int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	messverfahren int(11) unsigned DEFAULT '0' NOT NULL,
	arbeitsschritt int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	beschreibung text NOT NULL,
	ist_optional tinyint(1) unsigned DEFAULT '0' NOT NULL,
	dauer_in_tagen double(11,2) DEFAULT '0.00' NOT NULL,
	dauer_in_tagen_von double(11,2) DEFAULT '0.00' NOT NULL,
	dauer_in_tagen_bis double(11,2) DEFAULT '0.00' NOT NULL,
	verbesserungspotential_realbetrieb tinyint(1) unsigned DEFAULT '0' NOT NULL,
	arbeitsschrittart int(11) DEFAULT '0' NOT NULL,
	bestandteile int(11) unsigned DEFAULT '0' NOT NULL,
	i_re int(11) unsigned DEFAULT '0' NOT NULL,
	i_mo int(11) unsigned DEFAULT '0' NOT NULL,
	i_me int(11) unsigned DEFAULT '0' NOT NULL,
	i_da int(11) unsigned DEFAULT '0' NOT NULL,
	i_mt int(11) unsigned DEFAULT '0' NOT NULL,
	o_re int(11) unsigned DEFAULT '0' NOT NULL,
	o_mo int(11) unsigned DEFAULT '0' NOT NULL,
	o_me int(11) unsigned DEFAULT '0' NOT NULL,
	o_da int(11) unsigned DEFAULT '0' NOT NULL,
	o_mt int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	eignungsprofil int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	gueltigkeit_von date DEFAULT '0000-00-00',
	gueltigkeit_bis date DEFAULT '0000-00-00',
	hallenklimatisierung int(11) DEFAULT '0' NOT NULL,
	losgroesse int(11) DEFAULT '0' NOT NULL,
	arbeitszeitregime int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_laengenmasse int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_geradheit int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_ebenheit int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_rechtwinkligkeit int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_symmetrie int(11) DEFAULT '0' NOT NULL,
	toleranzklasse_passungen int(11) DEFAULT '0' NOT NULL,
	szenarioart int(11) DEFAULT '0' NOT NULL,
	werkstoffe int(11) unsigned DEFAULT '0' NOT NULL,
	technologischen_anwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,
	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,
	besitzer int(11) unsigned DEFAULT '0' NOT NULL,
	werkstueck int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_unternehmen'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_unternehmen (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

	unternehmensname varchar(255) DEFAULT '' NOT NULL,
	werkzeugmaschinen int(11) unsigned DEFAULT '0' NOT NULL,
	verfuegbare_ressourcen int(11) unsigned DEFAULT '0' NOT NULL,
	verfuegbare_messverfahren int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	wert double(11,2) DEFAULT '0.00' NOT NULL,
	wert_von double(11,2) DEFAULT '0.00' NOT NULL,
	wert_bis double(11,2) DEFAULT '0.00' NOT NULL,
	komponente int(11) unsigned DEFAULT '0' NOT NULL,
	zielparameter int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesungsuntersuchung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesungsuntersuchung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	pruefbezeichnung varchar(255) DEFAULT '' NOT NULL,
	datum date DEFAULT '0000-00-00',
	ort varchar(255) DEFAULT '' NOT NULL,
	verantwortlicher varchar(255) DEFAULT '' NOT NULL,
	ergebniszusammenfassung text NOT NULL,
	untersuchte_loesung int(11) unsigned DEFAULT '0',
	untersuchungsmethode int(11) unsigned DEFAULT '0',
	untersuchter_lastfall int(11) unsigned DEFAULT '0',
	parameterpruefungen int(11) unsigned DEFAULT '0' NOT NULL,
	produziertes_testwerkstueck int(11) unsigned DEFAULT '0' NOT NULL,
	untersuchungstraeger int(11) unsigned DEFAULT '0',


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesungsuntersuchung int(11) unsigned DEFAULT '0' NOT NULL,

	ergebnis double(11,2) DEFAULT '0.00' NOT NULL,
	bemerkung varchar(255) DEFAULT '' NOT NULL,
	messparameter int(11) unsigned DEFAULT '0',


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_obligatorisch tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ressource int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_outcome tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_output tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ressource int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lstmodellinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lstmodellinput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_obligatorisch tinyint(1) unsigned DEFAULT '0' NOT NULL,
	modell int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_outcome tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_output tinyint(1) unsigned DEFAULT '0' NOT NULL,
	modell int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_obligatorisch tinyint(1) unsigned DEFAULT '0' NOT NULL,
	messmittel int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_outcome tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_output tinyint(1) unsigned DEFAULT '0' NOT NULL,
	messmittel int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenbedingung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenbedingung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	operator int(11) DEFAULT '0' NOT NULL,
	wert varchar(255) DEFAULT '' NOT NULL,
	objekt int(11) unsigned DEFAULT '0',


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenkuehlung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenkuehlung (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	maschinenkomponente int(11) unsigned DEFAULT '0' NOT NULL,

	beschreibung text NOT NULL,
	kuehlungsart int(11) DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messkomponente'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messkomponente (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	messart int(11) DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_daten'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_daten (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	lsgdateninput int(11) unsigned DEFAULT '0' NOT NULL,
	lsgdatenoutput int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	datentyp int(11) DEFAULT '0' NOT NULL,
	beschreibung text NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgdateninput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgdateninput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_obligatorisch tinyint(1) unsigned DEFAULT '0' NOT NULL,
	daten int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgdatenoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgdatenoutput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_outcome tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_output tinyint(1) unsigned DEFAULT '0' NOT NULL,
	daten int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_methode'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_methode (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	lsgmethodeoutput int(11) unsigned DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmethodeoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmethodeoutput (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

	bemerkung text NOT NULL,
	ist_outcome tinyint(1) unsigned DEFAULT '0' NOT NULL,
	ist_output tinyint(1) unsigned DEFAULT '0' NOT NULL,
	methode int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_zielparameter'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_zielparameter (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	auswirkung int(11) unsigned DEFAULT '0' NOT NULL,
	komponentenauswirkung int(11) unsigned DEFAULT '0' NOT NULL,

	parametername varchar(255) DEFAULT '' NOT NULL,
	einheit int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_eignungsprofil'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_eignungsprofil (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	bemerkung text NOT NULL,
	eignungsprofilstatus int(11) DEFAULT '0' NOT NULL,
	eignungsgrad int(11) DEFAULT '0' NOT NULL,
	loesung int(11) unsigned DEFAULT '0' NOT NULL,
	anwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_ressourcenart'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_ressourcenart (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	name int(11) DEFAULT '0' NOT NULL,
	kategorie int(11) DEFAULT '0' NOT NULL,
	punkte int(11) DEFAULT '0' NOT NULL,
	gewichtung double(11,2) DEFAULT '0.00' NOT NULL,
	individualpunkte int(11) DEFAULT '0' NOT NULL,
	individualgewichtung double(11,2) DEFAULT '0.00' NOT NULL,


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
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponententyp'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponententyp (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenauswirkung (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_auswirkung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_auswirkung (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_entscheidung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_entscheidung (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgressourceinput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lstmodellinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lstmodellinput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmessmittelinput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgdateninput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgdateninput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgressourceoutput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lstmodelloutput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgdatenoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgdatenoutput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmessmitteloutput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_lsgmethodeoutput'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_lsgmethodeoutput (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenbedingung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenbedingung (

	loesung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_loesung_gestaltungsart_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_loesung_gestaltungsart_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_loesung_arbeitsschritt_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_loesung_arbeitsschritt_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesung (

	loesungsbeziehung int(11) unsigned DEFAULT '0' NOT NULL,

	loesungsbeziehung1 int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponententyp'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponententyp (

	modell int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
   

   

   
   

   

   
   

   

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_schnittgeschwindigkeit (

	techanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_drehzahlbereich (

	techanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_techanwendungsfall_lastfall_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_techanwendungsfall_lastfall_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_gestaltungsart'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_gestaltungsart (

	gestaltungsart int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
   

   
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_komponententyp_komponententyp_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_komponententyp_komponententyp_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_zielparameter'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_zielparameter (

	auswirkung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt (

	messverfahren int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_messverfahren_messparameter_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_messverfahren_messparameter_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_messverfahren_ressource_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_messverfahren_ressource_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_vorgehensbeschreibung (

	untersuchung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_entscheidung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_entscheidung (

	untersuchung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_untersuchung_ressource_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_untersuchung_ressource_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_untersuchung_modell_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_untersuchung_modell_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_untersuchung_messverfahren_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_untersuchung_messverfahren_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
      
        
      
   
   

   
      
    
      
    

   
      
        
      
   
   

   
      
    

   
   

   

   
   

   

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponententyp'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponententyp (

	maschinenkomponente int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponentenkuehlung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponentenkuehlung (

	maschinenkomponente int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_maschinenkomponente (

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_maschinensteuerung (

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messkomponente'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messkomponente (

	werkzeugmaschine int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_arbeitsschritt (

	arbeitsschritt int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_ressource_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_ressource_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_modell_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_modell_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_messverfahren_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_messverfahren_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_daten_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_daten_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_methode_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_methode_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_ore_ressource_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_ore_ressource_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_omo_modell_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_omo_modell_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_ome_messverfahren_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_ome_messverfahren_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_oda_daten_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_oda_daten_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_arbeitsschritt_omt_methode_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_arbeitsschritt_omt_methode_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_techanwendungsfall (

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine (

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_unternehmen'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_unternehmen (

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkstueck'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkstueck (

	fachanwendungsfall int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_fachanwendungsfall_werkstoff_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_fachanwendungsfall_werkstoff_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
    
      
    
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_werkzeugmaschine (

	unternehmen int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_unternehmen_ressource_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_unternehmen_ressource_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_unternehmen_messverfahren_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_unternehmen_messverfahren_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_komponententyp'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_komponententyp (

	komponentenauswirkung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_zielparameter'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_zielparameter (

	komponentenauswirkung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_parameterpruefergebnis (

	loesungsuntersuchung int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    
      
#
# Table structure for table 'tx_wisedocasysdomaindesigner_loesungsuntersuchung_werkstueck_mm'
#
CREATE TABLE tx_wisedocasysdomaindesigner_loesungsuntersuchung_werkstueck_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
       
    

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_ressource'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_ressource (

	lsgressourceinput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_ressource'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_ressource (

	lsgressourceoutput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_modell'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_modell (

	lstmodellinput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_modell'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_modell (

	lstmodelloutput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messverfahren'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messverfahren (

	lsgmessmittelinput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_messverfahren'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_messverfahren (

	lsgmessmitteloutput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
   

   

   
   

   

   
   

   

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_daten'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_daten (

	lsgdateninput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_daten'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_daten (

	lsgdatenoutput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
   

   

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_methode'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_methode (

	lsgmethodeoutput int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_parametereinheit'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_parametereinheit (

	zielparameter int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
   

   
      
    

   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_loesung'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_loesung (

	eignungsprofil int(11) unsigned DEFAULT '0' NOT NULL,

);
        
      
   
      
        
#
# Table structure for table 'tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall'
#
CREATE TABLE tx_wisedocasysdomaindesigner_domain_model_fachanwendungsfall (

	eignungsprofil int(11) unsigned DEFAULT '0' NOT NULL,

);
