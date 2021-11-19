<?php
$data = $_POST;

$data['habilitado'] = true;

$data['contrasena'] = password_hash($data['contrasena'], PASSWORD_DEFAULT);

$enlace = mysqli_connect("localhost", "root", "", "bdproyectofinal");

if(!$enlace){
  echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
  echo "Error de depuración" . mysqli_connect_error() . PHP_EOL;
  echo "Error de depuración" . mysqli_connect_error() . PHP_EOL;

  exit;
}


$sql = "INSERT INTO usuarios (nombre, apellido, dni, habilitado, contrasena)
VALUES ('".$data["nombre"]."', '".$data["apellido"]."', '".$data["dni"]."', '".$data["habilitado"]."', '".$data["contrasena"]."')";

if (mysqli_query($enlace, $sql)) {
echo "Has sido registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}
?>
