# Proyecto: ABM de Productos y Servicios

## Descripción

Este proyecto consiste en un ABM (Alta, Baja, Modificación y Consulta) de productos y servicios, desarrollado con **Laravel** y utilizando **SQLite** como base de datos. El sistema permite gestionar productos y servicios, ofreciendo una interfaz básica para la administración de estos datos.

## Requisitos

- **PHP** >= 8.2
- **Composer** >= 1.10
- **Laravel** >= 8.x
- **SQLite** (o cualquier base de datos soportada por Laravel)

## Instalación

### 1. Clonar el repositorio
```
git clone git@github.com:SamuelRobertoM/challenge.git

cd prueba_template
```
### 2. Instalar dependencias
```
Ejecuta el siguiente comando para instalar las dependencias de PHP.

composer install
```

### 3.Configuración del entorno
```
cp .env.example .env

php artisan key:generate
```
### 4. Configurar la base de datos
Por defecto, el proyecto utiliza una base de datos SQLite. Si prefieres otra base de datos, puedes configurarla en el archivo .env. Para usar SQLite, sigue estos pasos:

En el archivo .env, establece el driver de base de datos a sqlite:
```
1. DB_CONNECTION=sqlite
2. Crea el archivo de base de datos vacío:
touch database/database.sqlite
3. Ejecuta las migraciones para crear las tablas necesarias:
php artisan migrate
4. (Opcional) Correr los seeders
php artisan db:seed
```

### 5.Una vez configurado todo, puedes iniciar el servidor local de desarrollo:
```
php artisan serve
```
Accede al proyecto desde tu navegador en http://localhost:8000
