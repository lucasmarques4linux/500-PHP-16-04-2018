# Iniciando curso 500 - Desenvolvimento Web com PHP

## Usuarios e senhas
PC  
diurno  
diurno  
VM  
developer  
4linux  

## Importando VM

Importar Appliance  
/home/repositorio/FREQUENTES/Dev/developer_US.ova

## Habilitando Erros do PHP

```
sudo subl /etc/php/7.0/apache2/php.ini
```
Linha 462
```
display_errors = On
```
Reiniciar Servidor apache
```
sudo service apache2 restart
```

## Estrutura de Pastas
```
cd /var/www
mkdir html
cd html
mkdir 500
cd 500 
```

## Abrindo Sublime na pasta
```
cd /var/www/html/500
subl .
```