<?php

namespace modelos;

class libros extends \core\sgbd\bd {
	
	public static $tabla = 'libros';
	
	
	public static function create_table() {
		
		$consulta = "
			create table ".self::$tabla."
			( id integer unsigned auto_increment primary key
			, titulo varchar(50) not null unique
			, autor varchar(500) not null
                        , comentario varchar(255) null
                        , precio decimal(10,2) unsigned
                        , fecha_publicacion date null
			)
			engine = myisam;	
		";
		
		return self::execute($consulta);
		
	}
	
	
	/**
	 * El parámetro fila es un array que trae detro en otro array asociado al índice 'values' los valores de las columnas a insertar.
	 * Si hay errores en el mismos array se devuelven dentro del índice 'errores'.
	 * @param array &$fila = array('values' =>array('col1' => valo1, ), 'errores' => array('col1' => 'error1', ))
	 * @return boolean
	 */
	public static function insertar(array &$fila ) {
		
		$validacion = true;
		if ( ! isset($fila['values']['titulo'])) {
			$validacion = false;
			$fila['errores']['titulo'] = "Esta columna no puede esta vacía.";
		}
                
                if ( ! isset($fila['values']['autor'])) {
			$validacion = false;
			$fila['errores']['autor'] = "Esta columna no puede esta vacía.";
		}
                
		if ( ! isset($fila['values']['comentario']) ) {
			$fila['values']['comentario'] = null;
		}
                
                if ( ! isset($fila['values']['precio']) ) {
			$fila['values']['precio'] = null;
		}
		elseif ( ! is_float($fila['values']['precio'])) {
			$validacion = false;
			$fila['errores']['precio'] = "Esta columna debe ser un float.";
		}
		if ( ! isset($fila['values']['fecha_publicacion'])) {
			$validacion = false;
			$fila['errores']['fecha_publicacion'] = "Esta columna no puede esta vacía.";
		}
                
                
		if ($validacion) {
		
			return self::insertar_fila($fila['values'], self::$tabla);
		}
		else {
			return false;
		}
	}
			
	 
	
	
	public static function borrar(array &$fila ) {
		
		
		$validacion = true;
		if ( ! isset($fila['values']['id']))  {
			$validacion = false;
			throw new \Exception(".....");
		}
		
		
		if ($validacion) {
		
			$consulta = "
				delete from ".self::$tabla."
					where titulo = '{$fila['values']['titulo']}' or id = {$fila['values']['id']}
				;		
			";

			return self::ejecutar_consulta($consulta);
		}
		else {
			return false;
		}
	}
		
	
}