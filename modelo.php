<?php


function model_traer_productos(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdproyectofinal";


    $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { 
    die("Connexión inválida: " . mysqli_connect_error());
}

    $sql = "SELECT * FROM productos";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $productos[] = $row;
        }
    } else {
        echo "0 results";
    }

    return $productos;

}


?>