<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookcoffee";
$barras = $_POST['barras']; $desc = $_POST['desc'];$valor = $_POST['valor']; $cat = $_POST['cat']; 


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO produtos (cod_barras, descricao_produto, v_unit_produto ,categoria_produto )
VALUES ('$barras' , '$desc' ,'$valor' , '$cat')";

if (mysqli_query($conn, $sql)) {
  echo "INSERÇÃO FEITA COM SUCESSO";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("location: mesas.php");
mysqli_close($conn);
?>