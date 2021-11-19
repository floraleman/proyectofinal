<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('modelo.php');

function traer_productos(){
    $productos = model_traer_productos();
    return $productos;
}


function traer_carrito(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdproyectofinal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM carrito";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)){
            $carrito[] = $row;
        }
    } else {
        echo "0 results";
    }

    return $carrito;

    mysqli_close($conn);

}


?>

