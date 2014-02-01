<div id='libros'>
	<h1>Libros disponibles</h1>
	<p>La siguiente tabla muestra los libros disponibles</p>
	<table border='1px'>
		<thead>
			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Comentario</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
			/*
			 for ($i = 0; $i < count($datos['libros']); $i++) {
			 
				echo "<tr>
						<td>{$datos['libros'][$i]['titulo']}</td>
						<td>{$datos['libros'][$i]['autor']}</td>
						<td>{$datos['libros'][$i]['comentario']}</td>
					</tr>";
			}
			*/
			foreach ($datos['libros'] as $id => $libro) {
				echo "<tr>
						<td>{$libro['titulo']}</td>
						<td>{$libro['autor']}</td>
						<td>{$libro['comentario']}</td>
						<td>
							<a href='".\core\URL::generar(array("libros","form_modificar",$id))."' >Modificar</a>
							<a href='".\core\URL::generar("libros/form_borrar/$id")."' >Borrar</a>
						</td>
					</tr>";
			}
			?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan='4'><button onclick='window.location.assign("<?php echo \core\URL::generar("libros/form_anexar"); ?>");'>anexar un libro</button></td>
			</tr>
		</tfoot>
		
	</table>
</div>