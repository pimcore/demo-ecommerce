
SET NAMES utf8mb4;

INSERT INTO documents_email (`id`,`module`,`controller`,`action`,`template`,`to`,`from`,`replyTo`,`cc`,`bcc`,`subject`,`legacy`) VALUES ('12',NULL,'email','order-confirmation',NULL,'','debug@elements.pm','','','new order','Order Confirmation for Order %Text(ordernumber);','0');
