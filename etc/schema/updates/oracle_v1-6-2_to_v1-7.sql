INSERT INTO nsm_target (target_name,target_description,target_class,target_type) VALUES ('icinga.cronk.custom','Allow user to create and modify custom cronks','','credential');

DROP TABLE IF EXISTS nsm_db_version;

CREATE TABLE nsm_db_version (id INT, version VARCHAR(32) NOT NULL, modified TIMESTAMP NOT NULL, created TIMESTAMP NOT NULL, PRIMARY KEY(id));

INSERT INTO nsm_db_version VALUES ('1','icinga-web/v1.7.0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);