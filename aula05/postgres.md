## Postgres
```
sudo su
su postgres
psql

CREATE DATABASE blog;
ALTER DATABASE blog OWNER TO lucas;

\q
exit
exit

psql -h localhost -U lucas -d blog
```

## SQL Tabelas
```
CREATE TABLE users(
	id SERIAL PRIMARY KEY,
	name VARCHAR(200) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	pass VARCHAR(100) NOT NULL
);

CREATE TABLE posts(
	id SERIAL PRIMARY KEY,
	title VARCHAR(200) NOT NULL,
	text TEXT,
	created_at DATE,
	published BOOLEAN,
	user_id INT NOT NULL REFERENCES users(id)
);
```