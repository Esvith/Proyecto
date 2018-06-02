
<script type="text/javascript">
            /*CLIENTES*/
            $(document).ready(function() {
                $('#comesales').dataTable( {
                    // sDom: hace un espacio entre la tabla y los controles 
                "sDom": "<'row-fluid'<'span4'><'span4'f>r>t<'row-fluid'<'span4'i><'span4'p>>",
        
                } );
            } );
</script>

<div id="container">
	<h2 align="center">Registrar atencion</h2>
	<?php
if(isset($_GET['save'])){
	echo '<div class="alert alert-success text-center">La Información  se Almaceno Correctamente</div>';
}
if(isset($_GET['delete'])){
	echo '<div class="alert alert-warning text-center">La Información  se ha Eliminado Correctamente</div>';
}
if(isset($_GET['update'])){
	echo '<div class="alert alert-success text-center">La Información  se Actualizo Correctamente</div>';
}
if(isset($_GET['permisos'])){
		echo '<div class="alert alert-success text-center">Los Permisos fueron Asignados Correctamente</div>';
	}
	if(isset($_GET['password'])){
		echo '<div class="alert alert-success text-center">La Contraseña fue actualizado Correctamente</div>';
	}
?>
<center>
<table id="comesales" border="0" cellpadding="0" cellspacing="0" class="pretty">
<thead>
<tr>
	
	<th>codigo</th>
	<th>apellidos</th>
	<th>nombres</th>
	
	
	
	<th>facultad</th>
	<th>carrera</th>
	<th>sexo</th>
	<th> <h4 align="center"> ATENCION <h4></th>

</tr>
</thead>
<tbody>
 <?php 
 $contador = 0;
 if(!empty($comesales)){
 	foreach($comesales as $comesal){
 		echo '<tr>';
		
 		echo '<td>'.$comesal->codigo.'</td>';
		echo '<td>'.$comesal->apellidos.'</td>';
		echo '<td>'.$comesal->nombres.'</td>';
		// echo '<td>'.$comesal->sexo.'</td>';
		echo '<td>'.$comesal->facultad.'</td>';
		echo '<td>'.$comesal->carrera.'</td>';
 			
 			/*Si es estatus mostramos en texto*/
			if($comesal->sexo==1){
			echo '<td>Masculino</td>';
			}
			if($comesal->sexo==2){
			echo '<td>Femenino</td>';
			}
 			
 	echo '<td> <h5 align="center">'
?>
		<a href="<?php echo base_url();?>index.php/atenciones/editar/<?php echo $comesal->id;?>/" class="btn btn-success">Registrar Atencion</a>
		
		
<?php		
		echo '<h5></td>';
 		echo '</tr>';
 	} 
 }

 ?>
</tbody>
</table>
</center>
</div>