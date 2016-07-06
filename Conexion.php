<?php

$usuario= 'sa';
$pass = 'NanatsuNoTaizai29';
$servidor = 'DESKTOP-FIKNHUA\SQLRAYNIER'; 
$basedatos = 'AIRLINE';

$info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
$conexion = sqlsrv_connect($servidor, $info);  


if(!$conexion){

 die( print_r( sqlsrv_errors(), true));

 }

echo 'Conectado';





$query = 'SELECT * FROM Cliente';
$registros = sqlsrv_query($conexion, $query);





while($row = sqlsrv_fetch_object($registros)){
     
echo "
<br>
IdCliente: $row->IdCliente
<br>
Nombre: $row->Nombre
<br>
Apellido Paterno: $row->Apellido_Paterno
<br>";
	
}


?>
