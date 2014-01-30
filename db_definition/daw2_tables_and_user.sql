/* table_crud */

drop database if exists daw2;
create database daw2;

create user daw2_user identified by 'daw2_user';

-- Concedemos al usuario daw2_user todos los permisos sobre esa base de datos
grant all privileges on daw2.* to daw2_user;

use daw2;



set names utf8;

set sql_mode = 'traditional';

/* Tablas de table_crud */

-- Libros

drop table if exists daw2_libros;
create table if not exists daw2_libros( 
    id integer auto_increment 
,   titulo varchar(100) not null
,   autor varchar(100) not null
,   comentario varchar(255) null
,   precio float unsigned
,   primary key (id)
,   unique (titulo)
)engine = myisam default charset=utf8;

