<?php 

$enlace =mysqli_connect('localhost', 'root', '', 'bdproyectofinal');
$data = $_POST;
$id_producto = $data['id'];
$id_usuario = $data['id_usuario'];
$precio = $data['precio'];
$nombre = $data['nombre'];
$imagen = $data['imagen'];

$sql = "INSERT INTO carrito (id, id_usuario, id_producto, precio, nombre, imagen, cantidad)
VALUES ('$id', '$id_usuario', '$id_producto', '$precio', '$nombre', '$imagen', 0)";

if ($enlace->query($sql) === TRUE) {
    echo "New record create succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $enlace->error;
}

return;

?>