# Proyecto Recordip

## Descripción

Recordip es una aplicación web diseñada para gestionar recordatorios de manera eficiente. Permite a los usuarios crear, editar y eliminar recordatorios, así como personalizar su experiencia a través de la selección de idioma y tema.

## Características

- **Gestión de Recordatorios**: Crear, editar y eliminar recordatorios.
- **Interfaz de Usuario Amigable**: Diseño intuitivo y fácil de usar.
- **Soporte Multilenguaje**: Cambia entre español e inglés.
- **Modo Oscuro**: Opción para alternar entre el modo claro y oscuro.
- **Notificaciones**: Recibe alertas sobre tus recordatorios.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación del lado del servidor.
- **MySQL**: Base de datos para almacenar los recordatorios y la información del usuario.
- **HTML5/CSS3**: Estructura y estilo de la aplicación.
- **JavaScript**: Interactividad en el cliente.
- **Bootstrap**: Framework CSS para un diseño responsivo.
- **jQuery**: Biblioteca de JavaScript para facilitar la manipulación del DOM.

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tu_usuario/recordip.git
   ```

2. Navega al directorio del proyecto:
   ```bash
   cd recordip
   ```

3. Instala las dependencias utilizando Composer:
   ```bash
   composer install
   ```

4. Configura la base de datos en el archivo `db.php` con tus credenciales.

5. Accede a la aplicación a través de tu servidor local.

## Uso

1. Inicia sesión o regístrate si eres un nuevo usuario.
2. Crea un nuevo recordatorio ingresando los detalles necesarios.
3. Edita o elimina recordatorios existentes según sea necesario.
4. Cambia el idioma y el tema desde la configuración de la aplicación.

## Ejemplo de Código

Aquí hay un ejemplo de cómo se puede utilizar el parser de CSS en el proyecto:

```php
$parser = new \Sabberworm\CSS\Parser(file_get_contents('somefile.css'));
$cssDocument = $parser->parse();
print $cssDocument->render();
```

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios y haz commit (`git commit -m 'Agregada nueva característica'`).
4. Haz push a la rama (`git push origin feature/nueva-caracteristica`).
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la Licencia Personalizada. Consulta el archivo `LICENSE` para más detalles.

## Contacto

Para más información, puedes contactar a:

- **Nombre**: Santiago Torres
- **Email**: santiagoaguialrt0@gmail.com
- **GitHub**: [metatech-programmer](https://github.com/metatech-programmer)

---

¡Gracias por usar Recordip!