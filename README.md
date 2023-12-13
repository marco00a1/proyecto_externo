# Aplicación de Tarea

# Desplegar la DB en su local para que pueda funcionar correctamente.
# en caso de aver algun error en la creacion de la tabla tarea. (agrego la tabla la cual utilize)

--
-- Base de datos: `pruebabpo`
--
-- Estructura de tabla para la tabla `tareas`
--
CREATE TABLE `tareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `dni`, `titulo`, `descripcion`, `fecha`, `estado`, `created_at`, `updated_at`) VALUES
(1, '99998888', 'tarea 8', 'descripcion tarea 8', '2023-12-13 23:00:22', 2, '2023-12-13 22:51:31', '2023-12-13 23:00:22'),
(2, '12345678', 'tarea 2', 'descripcion tarea 2', '2023-12-13 05:00:00', 1, '2023-12-13 22:55:55', '2023-12-13 22:55:55');

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);



# Configurar el .env
configurar el DB,user,pass,host.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebabpo
DB_USERNAME=root
DB_PASSWORD=

# Levantar laravel y listo para el funcionamiento.

# Nota de funcionamiento:
Esto es parte del funcionamiento del API:

listar tareas:      http://127.0.0.1:8000/api/tarea/     ---- GET
listar una tarea:   http://127.0.0.1:8000/api/tarea/1     ---- GET
insertar tarea:     http://127.0.0.1:8000/api/tarea/insert     ---- POST
actualizar tarea:   http://127.0.0.1:8000/api/tarea/update/1     ---- PUT
-- body : raw
{
    "dni": "99998888",
    "titulo": "tarea 7",
    "descripcion": "descripcion tarea 8"
}
eliminar tarea:     http://127.0.0.1:8000/api/tarea/delete/1     ---- DELETE


-----------------------------------------------------------------------------------------------------------------------------
-----------------------------------ADJUNTO IMAGENES DE LAS PRUEBAS REALIZADAS CON POSTMAN------------------------------------
-----------------------------------------------------------------------------------------------------------------------------

![image](https://github.com/marco00a1/proyecto_externo/assets/151717549/9adfd4ca-7459-49e1-9939-5ce4c860ed2d)
![image](https://github.com/marco00a1/proyecto_externo/assets/151717549/12f58de2-226a-4e3f-bc4c-64aebc05f43a)
![image](https://github.com/marco00a1/proyecto_externo/assets/151717549/bb41e5b4-9525-4f22-9075-5e763d6e25d0)



