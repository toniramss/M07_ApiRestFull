# M07_ApiRestFull
Este es un proyecto desarrollado con Laravel que proporciona una API RESTful para gestionar cursos, roles, usuarios y más.

Tecnologías utilizadas: Laravel 10.x, PHP 8.x, MySQL, Laravel Sanctum (para autenticación), Fruitcake CORS (para manejo de CORS) y Migrations y Seeders.

Instalación y configuración:

 -- Clonar el repositorio:
        git clone https://github.com/toniramss/M07_ApiRestFull.git
        cd M07_ApiRestFull/backend

 -- Instalar dependencias:
        composer install

 -- Configurar variables de entorno: Copia el archivo .env.example, renómbralo como .env y edita la conexión a la base de datos:

    DB_CONNECTION=mysql  
    DB_HOST=127.0.0.1  
    DB_PORT=3306  
    DB_DATABASE=laredu 
    DB_USERNAME=root  
    DB_PASSWORD=  

 -- Generar la clave de la aplicación:
        php artisan key:generate

 -- Ejecutar migraciones y seeders:
        php artisan migrate --seed
        Si deseas reiniciar la base de datos y poblarla de nuevo:
        php artisan migrate:fresh --seed

 -- Levantar el servidor:
        php artisan serve
        La API estará disponible en http://127.0.0.1:8000


Autenticación con Sanctum:
El proyecto usa Laravel Sanctum para la autenticación de usuarios con tokens.

Para generar un token, envía una solicitud POST a /api/login con los siguientes datos en JSON:   

{
  "email": "usuario@example.com",
  "password": "contraseña"
}

Si la autenticación es correcta, la API responderá con un token:

{
 "message": "Login successful",
 "token": "1|sjhdgfjhsdfgh..."," // Tu token real
 "user": {
 "id": 1,
 "name": "Test User",
 "email": "test@example.com",
 ...
 }
}

Usa este token en el header Authorization para autenticar las peticiones:

Authorization: Bearer 1|t8Jz9uEoFfJ3kKx6P1Yb...


Rutas principales de la API:

 -- POST /api/register - Registrar un nuevo usuario (No requiere autenticación).
 -- POST /api/login - Iniciar sesión y obtener token (No requiere autenticación).
 -- GET /api/me - Obtener datos del usuario actual (Requiere autenticación).

 -- GET /api/courses - Obtener lista de cursos (Requiere autenticación).
 -- GET /api/courses/$ - Obtener curso específico (Requiere autenticación).
 -- POST /api/courses - Registrar un curso (Requiere autenticación).
 -- PUT /api/courses/$ - Actualizar un curso (Requiere autenticación).
 -- DELETE /api/courses/$ - Eliminar un curso (Requiere autenticación).

 -- GET /api/subjects - Obtener lista de asignaturas (Requiere autenticación).
 -- GET /api/subjects/$ - Obtener agignatura (Requiere autenticación).
 -- POST /api/subjects - Registrar asignatura (Requiere autenticación).
 -- PUT /api/subjects/$ - Actualizar asignatura (Requiere autenticación).
 -- DELETE /api/subjects/$ - Eliminar asignatura (Requiere autenticación).

 -- GET /api/assignments - Obtener lista de tareas (Requiere autenticación).
 -- GET /api/assignments/$ - Obtener tarea (Requiere autenticación).
 -- POST /api/assignments - Registrar tarea (Requiere autenticación).
 -- PUT /api/assignments/$ - Actualizar tarea (Requiere autenticación).
 -- DELETE /api/assignments/$ - Eliminar tarea (Requiere autenticación).

 -- GET /api/submissions - Obtener lista de entregas (Requiere autenticación).
 -- GET /api/submissions/$ - Mostrar entrega (Requiere autenticación).
 -- POST /api/submissions - Crear entrega (Requiere autenticación).
 -- PUT /api/submissions/$ - Actualizar calificación (Requiere autenticación).

 -- GET /api/calendar - Obtener lista de eventos (Requiere autenticación).
 -- POST /api/calendar - Crear evento (Requiere autenticación).
 -- GET /api/calendar/$ - Mostrar evento (Requiere autenticación).
 -- PUT /api/calendar/$ - Actualizar evento (Requiere autenticación).
 -- DELETE /api/calendar/$ - Eliminar evento (Requiere autenticación).

 -- GET /api/messages - Obtener lista de mensajes del usuario autenticado (Requiere autenticación).
 -- POST /api/messages - Enviar un mensaje (Requiere autenticación).
 -- GET /api/messages/conversation/$ - Conversacion con un usuario (Requiere autenticación).
 -- PUT /api/messages/$/read - Marcar mensaje como leído (Requiere autenticación).
 -- DELETE /api/messages/$ - Eliminar mensaje (Requiere autenticación).

 -- GET /api/roles - Obtener lista de roles (Requiere autenticación).
 -- POST /api/roles - Crear un rol (Requiere autenticación).
 -- POST /api/users/$/assing-role - Asignar rol a un usuario (Requiere autenticación).
 -- POST /api/users/$/remove-role - Eliminar rol de un usuario (Requiere autenticación).

 -- POST /api/logout - Cerrar sesión (Requiere autenticación).


 Troubleshooting:

Si al ejecutar php artisan migrate aparece el error Base table or view already exists: 1050 Table 'personal_access_tokens' already exists, usa:
 -- php artisan migrate:fresh --seed
Esto eliminará todas las tablas y las recreará desde cero.

Licencia:
Este proyecto está bajo la licencia MIT. Puedes usarlo y modificarlo libremente.

¡Gracias por usar M07_ApiRestFull!