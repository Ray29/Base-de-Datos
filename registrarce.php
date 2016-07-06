<HTML>
<BODY>
<Form Action=registrarce.php Method=post>

Nombre de Usuario:
      <Input Type=text Name=nombre_administrador><BR>

Password:
      <Input Type=text Name=password><BR>



Nombre:
      <Input Type=text Name=Nombre><BR>

Apellido:
      <Input Type=text Name=Apellido><BR>



Cedula:
      <Input Type=text Name=Cedula><BR>



Dirección:
      <Input Type=text Name=Direccion><BR>



Telefono:
      <Input Type=text Name=Telefono><BR>



Correo: 
    <Input Type=text Name=Correo><BR>


<Input type=submit name=ok value="INSERT"><BR> 


</BODY>
</HTML>

<?php
      $ok = $_POST['ok'];
    
      $newusuario = $_POST['nombre_administrador'];
      $pass = $_POST['password'];
      $nom = $_POST['Nombre'];
      $ap = $_POST['Apellido'];
      $cedula = $_POST['Cedula'];
      $direc = $_POST['Direccion'];
      $tel = $_POST['Telefono'];
      $correo = $_POST['Correo'];
      
      

 if($ok == "INSERT"){




$serverName = "DESKTOP-FIKNHUA\SQLRAYNIER";
$connectionInfo = array( "Database"=>"WEB", "UID"=>"sa", "PWD"=>"NanatsuNoTaizai29" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "INSERT INTO Administradores (nombre_administrador, password, Nombre, Apellido, Cedula, Direccion, Telefono, Correo) VALUES  ('".$newusuario."','".$pass."','".$nom."','".$ap."','".$cedula."','".$direc."','".$tel."','".$correo."');";
$params = array(1, '".$newusuario."','".$pass."','".$nom."','".$ap."','".$cedula."','".$direc."','".$tel."','".$correo."' );

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

 
  //CONECCION AL SERVIDOR DE BASE DE DATOS
/*$usuario= 'sa';
$pass = 'NanatsuNoTaizai29';
$servidor = 'DESKTOP-FIKNHUA\SQLRAYNIER'; 
$basedatos = 'WEB';

$info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
$conexion = sqlsrv_connect($servidor, $info);  


if(!$conexion){

 die( print_r( sqlsrv_errors(), true));

 }

//construyendo insert

$q = "INSERT INTO Administradores(nombre_administrador, password, Nombre, Apellido, Cedula, Direccion, Telefono, Correo ) 
VALUES ('".$newusuario."','".$pass."','".$nom."','".$ap."','".$cedula."','".$direc."','".$tel."','".$correo."');";
$params = array(1, "some data");
//EJECTANDO AL QUERY

$Administradores= sqlsrv_query($q, $conexion, $params) or die( print_r( sqlsrv_errors(), true));;

if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}*/
?>
   <script languaje="javascript">
    alert("GRACIAS POR REGISTRARCE");

  
    location.href = "login.php";
   </script> 
  <?php



//avisando


};
?>
      
