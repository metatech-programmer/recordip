
/*==============================================================*/
/* Table: roles                                                 */
/*==============================================================*/
CREATE TABLE roles (
   id_rol               INT                 NOT NULL AUTO_INCREMENT,
   nombre_rol           VARCHAR(255)         NOT NULL,
   PRIMARY KEY (id_rol)
);

/*==============================================================*/
/* Table: usuarios                                              */
/*==============================================================*/
CREATE TABLE usuarios (
   id_usuario           INT                 NOT NULL AUTO_INCREMENT,
   id_rol_usuario       INT                 NOT NULL,
   nombres_usuario      VARCHAR(255)         NOT NULL,
   apellidos_usuario    VARCHAR(255)         NOT NULL,
   apodo_usuario        VARCHAR(255)         NOT NULL,
   telegram_id_usuario     VARCHAR(255)         NOT NULL,
   PRIMARY KEY (id_usuario),
   FOREIGN KEY (id_rol_usuario) REFERENCES roles(id_rol)
      ON DELETE RESTRICT
      ON UPDATE CASCADE
);


/*==============================================================*/
/* Table: accesos                                               */
/*==============================================================*/
CREATE TABLE accesos (
   id_usuario           INT                 NOT NULL,
   correo_acceso        VARCHAR(255)         NOT NULL,
   password_acceso      VARCHAR(255)         NOT NULL,
   PRIMARY KEY (id_usuario),
   FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE
);

/*==============================================================*/
/* Table: imagenes                                              */
/*==============================================================*/
CREATE TABLE imagenes (
   id_usuario           INT                 NOT NULL,
   nombre_imagen        VARCHAR(255)         NULL,
   PRIMARY KEY (id_usuario),
   FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE
);

/*==============================================================*/
/* Table: recordatorios                                         */
/*==============================================================*/
CREATE TABLE recordatorios (
   id_recordatorio      INT                 NOT NULL AUTO_INCREMENT,
   id_usuario           INT                 NOT NULL,
   fecha_recordatorio   DATE                 NOT NULL,
   hora_recordatorio    TIME                 NOT NULL,
   mensaje_recordatorio TEXT                 NOT NULL,
   PRIMARY KEY (id_recordatorio),
   FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE
);

ALTER TABLE accesos
   ADD CONSTRAINT fk_accesos_reference_usuarios FOREIGN KEY (id_usuario)
      REFERENCES usuarios (id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE;

ALTER TABLE imagenes
   ADD CONSTRAINT fk_imagenes_reference_usuarios FOREIGN KEY (id_usuario)
      REFERENCES usuarios (id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE;

ALTER TABLE recordatorios
   ADD CONSTRAINT fk_recordat_reference_usuarios FOREIGN KEY (id_usuario)
      REFERENCES usuarios (id_usuario)
      ON DELETE RESTRICT
      ON UPDATE CASCADE;

ALTER TABLE usuarios
   ADD CONSTRAINT fk_usuarios_reference_roles FOREIGN KEY (id_rol_usuario)
      REFERENCES roles (id_rol)
      ON DELETE RESTRICT
      ON UPDATE CASCADE;
