<?php
function connect_sql(){ 
    // Conectando, seleccionando la base de datos
	$serverName = "sql7.freemysqlhosting.net"; 
	$uid = "sql7258311";   
	$pwd = "PF4xhh1ZkT";  
	$databaseName = "sql7258311"; 

	// Create connection
	$conn = new mysqli($serverName, $uid, $pwd, $databaseName);
	return $conn;
} 

function close_sql($conn){ 
    // Cerrar la conexión
	$conn->close();
} 

function select_arts_sql($conn){ 
    // Realizar una consulta MySQL
	$query = 'SELECT * FROM artists';
	$result = $conn->query($query);
	return $result;
}

function select_pls_art_sql($conn, $id_art){ 
    // Realizar una consulta MySQL
	$query = 'SELECT * FROM LPs where id_art='.$id_art;
	$result = $conn->query($query);
	return $result;
}


?>