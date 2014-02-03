<div id="libros">
	<h1>Listado de libros</h1>
        <p>La siguiente tabla muestra los libros disponibles</p>
	
	<table border='1'>
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Autor</th>
				<th>Comentario</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($datos['filas'] as $fila)
			{
				echo "
					<tr>
						<td>{$fila['titulo']}</td>
						<td>{$fila['autor']}</td>
						<td>{$fila['comentario']}</td>
						<td>".\core\Conversiones::decimal_punto_a_coma_y_miles($fila['precio'])."</td>
						<td>
							<a href='".\core\URL::generar(array("libros","form_modificar",$fila['id']))."' >Modificar</a>
							<a href='".\core\URL::generar("libros/form_borrar/{$fila['id']}")."' >Borrar</a>
						</td>
					</tr>
					";
			}
			echo "
				<tr>
					<td colspan='4'></td>
					<td><a class='boton' href='".\core\URL::generar("libros/form_insertar")."' >Insertar</a></td>
				
                                </tr>
			";
			?>
		</tbody>
	</table>
</div>