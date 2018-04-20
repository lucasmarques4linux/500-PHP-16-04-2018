## MySQL
```
sudo su
mysql

CREATE DATABASE blog;
GRANT ALL PRIVILEGES ON blog.* TO 'lucas'@'localhost';

exit
exit

mysql -u lucas -p
use blog
```

## SQL Tabelas
```
CREATE TABLE users(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	pass VARCHAR(100) NOT NULL
);

CREATE TABLE posts(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(200) NOT NULL,
	text TEXT,
	created_at DATE,
	published BOOLEAN,
	user_id INT NOT NULL REFERENCES users(id)
);
```