<?php
include_once("db_connect.php");


if (isset($_POST['proj'])) {
$proj = ($_POST['proj']);
$sql_query = "SELECT id, project, nombre, price FROM excelprueba WHERE project = '$proj'"; //Cambiar a la tabla de tu base de datos 
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$developer_records[] = $rows;

	}	
if(isset($_POST["export_data"])) {	
	$filename = "Pruebas".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($developer_records)) {
	  foreach($developer_records as $record) {
		if(!$show_coloumn) {
		  
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
}

}else{
	
}



?>