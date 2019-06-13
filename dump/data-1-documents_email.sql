
SET NAMES utf8mb4;

INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`) VALUES ('12',NULL,'email','order-confirmation',NULL,'','debug@pimcore.org','','','','Order Confirmation for Order %Text(ordernumber);');
