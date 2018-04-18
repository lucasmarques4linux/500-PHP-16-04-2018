# Banco de Dados

## PostgreSQL

### Instalação
```
sudo apt update
sudo apt install postgresql
```
### Verificar a instalação
```
psql -- version
```

### Logando no postgres pela primeira vez
```
sudo su
su postgres
psql
```

### Criando usuario no postgres
```
CREATE USER lucas PASSWORD '123';
```
### Listando usuarios
```
\du
```
### Criando banco de dados
```
CREATE DATABASE aula03;
```
### Listando bancos
```
\l
```
### Alterando dono do banco de dados criado
```
ALTER DATABASE aula03 OWNER TO lucas;
```
### Saindo do usuario postgres
```
\q
exit
exit
```
### Conectando com nosso usuario em nossa base de dados
```
psql -h localhost -U lucas -d aula03
```
### Listando tabelas
```
\dt
```
### Criando tabela usuarios
```
CREATE TABLE usuarios(
	id SERIAL PRIMARY KEY,
	email VARCHAR(150) NOT NULL UNIQUE,
	senha VARCHAR(100)
);
```
### Criando tabela posts
```
CREATE TABLE posts(
	id SERIAL PRIMARY KEY,
	titulo VARCHAR(200) NOT NULL,
	texto TEXT,
	usuario_id INT NOT NULL REFERENCES usuarios(id)
);