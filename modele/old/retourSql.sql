DROP USER 'www_user'@'localhost';
CREATE USER 'www_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON _test.* TO 'www_user'@'localhost';
USE information_schema;
SELECT * FROM user_privileges;
-- ./mysql.exe -u www_user -ppassword _test