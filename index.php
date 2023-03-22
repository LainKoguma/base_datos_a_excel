<?php 
include_once("db_connect.php");
include("export_data.php");

?>
<title>Exportacion</title>

<div class="container">	
	<h2>Exportar</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">		
				<label>N# Projecto</label><input type="text" name="proj" >			
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered" style="text-align: center;">
		<tr>
			<th>Id</th>
			<th>N° Proyecto</th>
			<th>Nombre</th>	
			<th>Precio</th>	
		</tr>
		<tbody>
			<?php 
			$selectabla = "SELECT id, project, nombre, price FROM excelprueba";
			$muestratablas = mysqli_query($conn, $selectabla);
			$arraytablas = array();
			foreach($muestratablas as $arraytablas) { ?>
			   <tr>
			   <td>#<?php echo $arraytablas ['id']; ?></td>
			   <td>#<?php echo $arraytablas ['project']; ?></td>
			   <td><?php echo $arraytablas ['nombre']; ?></td>   
			   <td>$<?php echo $arraytablas ['price']; ?></td>		   
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	
</div>




