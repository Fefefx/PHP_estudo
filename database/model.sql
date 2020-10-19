CREATE DATABASE dbphp7;
use dbphp7;

CREATE TABLE tb_users(
	 userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 deslogin VARCHAR(64) NOT NULL,
     despassword VARCHAR(256) NOT NULL,
     dtcadastre TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_users(deslogin, despassword) values('root','!@#$%');
SELECT * FROM tb_users;
UPDATE tb_users SET despassword = '123456' WHERE userid = 1;
DELETE FROM tb_users WHERE userid = 1;
TRUNCATE TABLE tb_users;