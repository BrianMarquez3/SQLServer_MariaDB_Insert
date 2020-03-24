
<?php
/*CONEXION A LA BASE DE DATOS SQL SERVER 2019 CPN PHP 7.4*/
If(!empty($_POST)){
$server = "DESKTOP-G8JMAI1";  
$base = array("Database"=>"estudiantes","UID"=>"briandb", "PWD"=>"briandb");
$conn = sqlsrv_connect($server,$base);

$idusuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];
$sql = "INSERT INTO alumnos (usuario,password,email) VALUES ('$idusuario','$password','$email')";
$recurso=sqlsrv_prepare($conn,$sql);

if(sqlsrv_execute($recurso)){
echo"Agregado correctamente";
}
else{
echo"No Agregado";
}
}
?>


<?php
/*CONEXION A LA BASE DE DATOS MARIADB CON PHP 7.4*/

$servername = "127.0.0.1";
$database = "estudiantes_mariadb";
$username = "briandb";
$password = "briandb";
    // Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


$idusuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];
$mysql = "INSERT INTO alumnos (usuario,password,email) VALUES ('$idusuario','$password','$email')";
$sql= mysqli_query($conn, $mysql);

?>