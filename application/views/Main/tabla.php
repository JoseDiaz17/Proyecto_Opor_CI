<!--Tabla q tendra los reguistros de la bd-->
<table class="centered">
	<thead class="black">
		<tr>
			<th hidden>id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	//aqui recorro el arreglo 
	foreach($datos as $item){
	?>
	<tr>
		<td hidden><?= $item->id ?></td>
		<td><?= $item->nombre ?></td>
		<td><?= $item->apellido ?></td>
		<td>
			<button class="Editar btn yellow">Editar</button>
			<button class="Eliminar btn red" value="<?= $item->id ?>">Eliminar</button>
		</td>
	</tr>	
	<?php 
	}
	?>
	</tbody>
</table>
