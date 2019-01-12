-- Inserimento campi firma nella tabella dt_ddt
ALTER TABLE `dt_ddt` ADD `firma_file` VARCHAR(255) NULL DEFAULT NULL AFTER `note_aggiuntive`;
ALTER TABLE `dt_ddt` ADD `firma_data` TIMESTAMP NULL DEFAULT NULL AFTER `firma_file`;
ALTER TABLE `dt_ddt` ADD `firma_nome` VARCHAR(255) NULL DEFAULT NULL AFTER `firma_data`;

-- Inserimento campi di notifica nella tabella dt_statiddt
ALTER TABLE `dt_statiddt` ADD `notifica` TINYINT(1) NOT NULL DEFAULT 0 AFTER `completato`;
ALTER TABLE `dt_statiddt` ADD `id_email` INT(11) NULL DEFAULT NULL AFTER `notifica`;
ALTER TABLE `dt_statiddt` ADD `destinatari` VARCHAR(255) NULL DEFAULT NULL AFTER `id_email`;

