CREATE TABLE tx_parentchildtranslation_domain_model_main (
	title varchar(255) NOT NULL DEFAULT '',
	child int(11) unsigned DEFAULT '0' NOT NULL,
	squeeze int(11) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_parentchildtranslation_domain_model_squeeze (
	title varchar(255) NOT NULL DEFAULT '',
	parent int(11) unsigned DEFAULT '0' NOT NULL,
	child int(11) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_parentchildtranslation_domain_model_child (
	title varchar(255) NOT NULL DEFAULT ''
);
