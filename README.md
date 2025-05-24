# 📚 Sistema de Gestión de Cursos y Estudiantes

## 📋 Descripción

Sistema completo de manejo de cursos y estudiantes desarrollado con Laravel, que implementa operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en cada categoría para una gestión eficiente de los datos académicos.

## 🚀 Tecnologías Utilizadas

- **Laravel** - Framework PHP para desarrollo web
- **Eloquent ORM** - Sistema de mapeo objeto-relacional de Laravel
- **PostgreSQL** - Sistema de gestión de base de datos
- **Docker** - Containerización de la aplicación

## 📋 Requisitos

- Docker
- Docker Compose

## ⚙️ Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/Albu231311/Lab-3---Tipos-de-datos-personalizados-y-ORM.git
cd Lab-3---Tipos-de-datos-personalizados-y-ORM
```

### 2. Configurar archivos de entorno

Copiar los archivos de ejemplo y remover la extensión `.example`:

```bash
cp .env.example .env
cp docker-compose.override.yml.example docker-compose.override.yml
cp docker-compose.yml.example docker-compose.yml
```

### 3. Configurar variables de entorno

Ajustar los valores en el archivo `.env` según tus necesidades:
- `APP_NAME`
- `DB_DATABASE`
- Otras configuraciones relevantes

### 4. Levantar el proyecto

```bash
docker compose up --build
```

### 5. Acceder al contenedor

Una vez que el contenedor esté ejecutándose:

```bash
docker compose exec app bash
```

### 6. Configurar la aplicación

Dentro del contenedor, ejecutar los siguientes comandos en orden:

```bash
# Instalar dependencias de PHP
composer install

# Instalar dependencias de Node.js
npm install --legacy-peer-deps

# Ejecutar migraciones de base de datos
php artisan migrate

# Ejecutar seeders para datos iniciales
php artisan db:seed
```

### 7. Configurar base de datos

En tu gestor de base de datos, importar el archivo `data.sql` junto con la Vista correspondiente.

### 8. Iniciar el servidor de desarrollo

```bash
npm run dev
```

### 9. Acceder a la aplicación

Dirigirse a: [http://localhost:8080/cursos](http://localhost:8080/cursos)

## 🎯 Funcionalidades

- ✅ CRUD completo para gestión de cursos
- ✅ CRUD completo para gestión de estudiantes
- ✅ Interfaz web intuitiva
- ✅ Base de datos PostgreSQL dockerizada
- ✅ Arquitectura basada en contenedores

## 📝 Notas

- Asegúrate de tener Docker y Docker Compose instalados en tu sistema
- El proyecto utiliza el puerto 8080 por defecto
- Las migraciones y seeders configurarán automáticamente la estructura inicial de la base de datos

---

¡Listo para gestionar cursos y estudiantes de manera eficiente! 🎓
