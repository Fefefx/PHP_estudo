CREATE DATABASE dbphp7;
USE dbphp7;
CREATE TABLE tb_users
(
    userid INT NOT NULL  IDENTITY PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    despassword VARCHAR(256) NOT NULL,
    dtcadastre DATETIME NOT NULL DEFAULT GETDATE()
);

INSERT INTO tb_users(deslogin, despassword) VALUES('root','!@#$');
SELECT * FROM tb_users;
