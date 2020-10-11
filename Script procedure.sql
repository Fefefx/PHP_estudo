CREATE PROCEDURE `sp_users_insert` (
	pdeslogin VARCHAR(64),
    pdespassword VARCHAR(256)
)
BEGIN
	INSERT INTO tb_users(deslogin,despassword) VALUES(pdeslogin,pdespassword);
    SELECT * FROM tb_users WHERE userid = LAST_INSERT_ID();
END
