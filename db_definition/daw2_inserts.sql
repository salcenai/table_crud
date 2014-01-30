/* mi_tablateca */

-- use daw2;

set names utf8;
set sql_mode = 'traditional';

insert into daw2_libros
    (titulo		, autor		,comentario             ,precio) values
    ('titulo de a'	,'autor a'	,'comentario a'         ,25.30)
,   ('titulo de b'	,'autor b'	,'comentario b'         ,15.2)
,   ('titulo de c'	,'autor c'	,'comentario c'         ,13)
;