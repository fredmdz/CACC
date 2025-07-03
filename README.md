# Research Context

> **Note**: This file contains research context. Most recent contexts are at the bottom.

---

## Research Query

Muestra el diagrama del proyecto reflejando conexiones entre backend, frontend, base de datos, modelos, etc.

*Session: 4651b4712dabb8ba349880e49fbecc7f | Generated: 7/3/2025, 2:20:26 PM*

### Analysis Summary

# Diagrama de Arquitectura del Proyecto "Ciencia"

El proyecto "Ciencia" es una aplicación web que sigue un patrón arquitectónico de tres capas, con un **Frontend** basado en tecnologías web estándar, un **Backend** desarrollado en PHP y una **Base de Datos** relacional.

```mermaid
graph TD
    subgraph Frontend
        A[Navegador Web/Cliente] --> B(HTML/CSS/JS)
    end

    subgraph Backend (PHP)
        C[Controladores] --> D(Modelos)
        C --> E(Librerías/Utilidades)
        D --> F[Base de Datos]
        E --> F[Base de Datos]
    end

    subgraph Base de Datos
        F[Base de Datos]
    end

    A -- Solicita Páginas/Datos --> C
    C -- Envía Páginas/Datos --> A
    C -- Interactúa con --> D
    D -- Lee/Escribe --> F
    C -- Utiliza --> E
```

## Componentes Principales y sus Interacciones

### Frontend

El **Frontend** es la capa de presentación con la que interactúan directamente los usuarios.

*   **Propósito:** Proporcionar la interfaz de usuario y manejar la interacción del lado del cliente.
*   **Partes Internas:**
    *   **HTML/CSS/JS:** Los archivos estáticos que definen la estructura, el estilo y la interactividad de la interfaz de usuario.
        *   [src/assets/css](file:src/assets/css): Contiene las hojas de estilo CSS.
        *   [src/assets/js](file:src/assets/js): Contiene los scripts JavaScript para la interactividad del lado del cliente.
*   **Relaciones Externas:**
    *   Envía solicitudes HTTP (GET, POST, etc.) al **Backend** para obtener datos o enviar información.
    *   Recibe y renderiza las páginas HTML y los datos enviados por el **Backend**.

### Backend (PHP)

El **Backend** es la capa de lógica de negocio y procesamiento de datos.

*   **Propósito:** Procesar las solicitudes del cliente, interactuar con la base de datos y generar las respuestas adecuadas.
*   **Partes Internas:**
    *   **Controladores** ([src/controlador](file:src/controlador)):
        *   **Propósito:** Manejar las solicitudes entrantes del Frontend, coordinar la lógica de negocio y preparar las respuestas.
        *   **Partes Internas:** Archivos PHP que contienen clases o funciones para manejar rutas específicas.
            *   [Admin.php](file:src/controlador/Admin.php)
            *   [Directorio.php](file:src/controlador/Directorio.php)
            *   [Videos.php](file:src/controlador/Videos.php)
        *   **Relaciones Externas:**
            *   Reciben solicitudes del **Frontend**.
            *   Interactúan con los **Modelos** para acceder y manipular datos.
            *   Utilizan **Librerías/Utilidades** para tareas comunes.
            *   Envían respuestas (HTML, datos) de vuelta al **Frontend**.
    *   **Modelos** ([src/modelo](file:src/modelo)):
        *   **Propósito:** Encapsular la lógica de negocio y la interacción con la **Base de Datos**.
        *   **Partes Internas:** Archivos PHP que representan entidades de la base de datos y sus operaciones.
            *   [Categoria.php](file:src/modelo/Categoria.php)
            *   [Contenido.php](file:src/modelo/Contenido.php)
            *   [Usuario.php](file:src/modelo/Usuario.php)
        *   **Relaciones Externas:**
            *   Son invocados por los **Controladores**.
            *   Realizan operaciones de lectura y escritura en la **Base de Datos**.
    *   **Librerías/Utilidades** ([src/lib](file:src/lib)):
        *   **Propósito:** Contener funciones y clases auxiliares reutilizables.
        *   **Partes Internas:**
            *   [Conexion.php](file:src/config/Conexion.php): Gestiona la conexión a la base de datos.
            *   [Session.php](file:src/lib/Session.php): Maneja la gestión de sesiones de usuario.
        *   **Relaciones Externas:**
            *   Son utilizadas por los **Controladores** y **Modelos**.
    *   **Rutas** ([src/rutas/web.php](file:src/rutas/web.php)):
        *   **Propósito:** Definir el mapeo entre las URLs y los controladores/acciones correspondientes.
        *   **Relaciones Externas:**
            *   Utiliza el enrutador ([vendor/bramus/router](file:vendor/bramus/router)) para dirigir las solicitudes entrantes.

### Base de Datos

La **Base de Datos** es la capa de persistencia de datos.

*   **Propósito:** Almacenar y gestionar todos los datos de la aplicación de forma estructurada.
*   **Relaciones Externas:**
    *   Es accedida exclusivamente por los **Modelos** del **Backend** para realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar).
    *   La conexión se establece a través de [src/config/Conexion.php](file:src/config/Conexion.php).

## Flujo de Interacción Típico

1.  El **Navegador Web/Cliente** (Frontend) envía una solicitud HTTP (por ejemplo, `GET /directorio`) al servidor.
2.  El **Backend** recibe la solicitud. El punto de entrada [index.php](file:index.php) y el enrutador ([vendor/bramus/router](file:vendor/bramus/router)) dirigen la solicitud al **Controlador** apropiado (por ejemplo, [Directorio.php](file:src/controlador/Directorio.php)).
3.  El **Controlador** interactúa con el **Modelo** correspondiente (por ejemplo, un modelo de "Directorio" o "Usuario") para obtener los datos necesarios de la **Base de Datos**.
4.  El **Modelo** ejecuta consultas SQL a través de la conexión definida en [Conexion.php](file:src/config/Conexion.php) para recuperar los datos de la **Base de Datos**.
5.  La **Base de Datos** devuelve los datos al **Modelo**.
6.  El **Modelo** devuelve los datos al **Controlador**.
7.  El **Controlador** procesa los datos y prepara la vista (por ejemplo, [directorio.php](file:src/vistas/directorio.php)) utilizando los datos.
8.  El **Backend** envía la página HTML generada (con CSS y JavaScript asociados) de vuelta al **Navegador Web/Cliente**.
9.  El **Navegador Web/Cliente** renderiza la página para el usuario.

### Implementation Steps

1. **Understanding the Overall Architecture**
   The 'Ciencia' project is a web application built with a three-layer architectural pattern. It comprises a `Frontend` for user interaction, a `Backend` developed in PHP for business logic, and a relational `Database` for data persistence. These components interact to deliver the application's functionality.

2. **Exploring the Frontend Component**
   The `Frontend` is the presentation layer, directly interacting with users. Its purpose is to provide the user interface and handle client-side interactions. It consists of `HTML/CSS/JS` files that define the structure, style, and interactivity. The `Frontend` sends HTTP requests to the `Backend` to fetch or send data and renders the pages and data received from the `Backend`.

3. **Delving into the Backend (PHP) Component**
   The `Backend` is the core logic layer, responsible for processing client requests, interacting with the database, and generating appropriate responses. It is built with PHP and comprises several key internal parts: `Controllers`, `Models`, `Libraries/Utilities`, and `Routes`.

4. **Understanding Backend Controllers**
   Within the `Backend`, `Controllers` are responsible for handling incoming requests from the `Frontend`. They coordinate business logic, interact with `Models` to access and manipulate data, and utilize `Libraries/Utilities` for common tasks. Finally, they prepare and send responses back to the `Frontend`.

5. **Examining Backend Models**
   The `Models` within the `Backend` encapsulate the business logic and manage interactions with the `Database`. They represent database entities and their operations. `Models` are invoked by `Controllers` and perform read and write operations on the `Database`.

6. **Discovering Backend Libraries and Utilities**
   The `Libraries/Utilities` section of the `Backend` contains reusable auxiliary functions and classes. These include components for managing the database connection and handling user sessions. They are utilized by both `Controllers` and `Models` to perform common tasks.

7. **Defining Backend Routes**
   The `Routes` define the mapping between URLs and the corresponding `Controllers` or actions within the `Backend`. They use an internal router to direct incoming requests to the correct handler.

8. **Interacting with the Database**
   The `Database` is the data persistence layer, designed to store and manage all application data in a structured manner. It is exclusively accessed by the `Models` within the `Backend` to perform CRUD (Create, Read, Update, Delete) operations. The connection to the `Database` is managed by a dedicated utility.

9. **Understanding the Typical Interaction Flow**
   A typical interaction begins with the `Web Browser/Client` (Frontend) sending an HTTP request to the server. The `Backend` receives this request, and its router directs it to the appropriate `Controller`. The `Controller` then interacts with the relevant `Model` to retrieve necessary data from the `Database`. The `Model` executes database queries, and the `Database` returns the data to the `Model`, which then passes it back to the `Controller`. Finally, the `Controller` processes the data, prepares the view, and the `Backend` sends the generated HTML page (with associated CSS and JavaScript) back to the `Web Browser/Client` for rendering.

