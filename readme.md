# Back-End Project SIS-2

#### Proyecto creado con la sgte linea por terminal
 > `composer create-project --prefer-dist laravel/laravel sistwo-b`


#### Configuracion del apache con laravel

 > crear un virtual host 

 > Habilitar el modulo rewrite de apache `a2enmod rewrite` luego reiniciar apache

 > dar permisos de escritura a los directorios storage y bootstrap de laravel
   con el sgte comando `chmod -R g+w storage bootstrap`

##### Links de interes

1. [AllowOverride de apache](https://httpd.apache.org/docs/trunk/es/mod/core.html#allowoverride)
1. [Require de apache](https://httpd.apache.org/docs/trunk/es/mod/mod_authz_core.html#require)
1. [Laravel Documentacion](https://laravel.com/docs/5.5)

