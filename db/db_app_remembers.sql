/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     6/04/2023 10:32:59 p. m.                     */
/*==============================================================*/

/*==============================================================*/
/* Table: accesos                                               */
/*==============================================================*/
create table accesos (
   id_usuario           int4                 not null,
   correo_acceso        varchar(255)         not null,
   password_acceso      varchar(255)         not null,
   constraint pk_accesos primary key (id_usuario)
);

/*==============================================================*/
/* Table: imagenes                                              */
/*==============================================================*/
create table imagenes (
   id_usuario           int4                 not null,
   nombre_imagen        varchar(255)         null,
   constraint pk_imagenes primary key (id_usuario)
);

/*==============================================================*/
/* Table: recordatorios                                         */
/*==============================================================*/
create table recordatorios (
   id_recordatorio      serial               not null,
   id_usuario           int4                 not null,
   fecha_recordatorio   date                 not null,
   hora_recordatorio    time                 not null,
   mensaje_recordatorio text                 not null,
   constraint pk_recordatorios primary key (id_recordatorio)
);

/*==============================================================*/
/* Table: roles                                                 */
/*==============================================================*/
create table roles (
   id_rol               serial               not null,
   nombre_rol           varchar(255)         not null,
   constraint pk_roles primary key (id_rol)
);

/*==============================================================*/
/* Table: usuarios                                              */
/*==============================================================*/
create table usuarios (
   id_usuario           serial               not null,
   id_rol_usuario       int4                 not null,
   nombres_usuario      varchar(255)         not null,
   apellidos_usuario    varchar(255)         not null,
   apodo_usuario        varchar(255)         not null,
   telegram_id_usuario     varchar(255)         not null,
   constraint pk_usuarios primary key (id_usuario)
);

alter table accesos
   add constraint fk_accesos_reference_usuarios foreign key (id_usuario)
      references usuarios (id_usuario)
      on delete restrict on update cascade;

alter table imagenes
   add constraint fk_imagenes_reference_usuarios foreign key (id_usuario)
      references usuarios (id_usuario)
      on delete restrict on update cascade;

alter table recordatorios
   add constraint fk_recordat_reference_usuarios foreign key (id_usuario)
      references usuarios (id_usuario)
      on delete restrict on update cascade;

alter table usuarios
   add constraint fk_usuarios_reference_roles foreign key (id_rol_usuario)
      references roles (id_rol)
      on delete restrict on update cascade;

