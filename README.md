# AYD2_TiendaEnLinea
Proyecto de AYD2 para la clase | Tienda en Linea | USAC


## Pasos para instalar el servidor localmente

- ```git clone https://github.com/ricardcutzh/AYD2_TiendaEnLinea.git```
- ```cd AYD2_TiendaEnLinea```
- ```composer install```
- Crear un archivo .env
- Copiar el contenido de .env.example dentro del nuevo .env
- Colocar credenciales de la base de datos
- ```php artisan key:generate```
- ```php artisan migrate```
- ```php artisan db:seed```
- ```php artisan serve```


## Pasos para hacer reset a la base de datos

- ```php artisan migrate:refresh --seed```


<<<<<<< HEAD
    "content-hash": "1b220dba5b55a4226fe5edadecefbb7f",
=======
    "content-hash": "ebaff855dc2d715ecc5a74a5fdda5f03",
>>>>>>> master