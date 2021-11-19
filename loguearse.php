<?php

$data = $_POST;

$enlace = mysqli_connect("localhost", "root", "", "bdproyectofinal");

if(!$enlace){
  echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
  echo "Error de depuración" . mysqli_connect_error() . PHP_EOL;
  echo "Error de depuración" . mysqli_connect_error() . PHP_EOL;

  exit;
}

$sql = "SELECT * FROM usuarios WHERE dni= '".$data["dni"]."'";

$result = mysqli_query($enlace, $sql);

if (mysqli_num_rows($result) > 0) {

    while($usuario = mysqli_fetch_assoc($result)){
        echo "Nombre: " . $usuario["nombre"]. "Apellido: " . $usuario["apellido"]. "Dni: " . $usuario["dni"]. "<br>";
        $hash = $usuario['contrasena'];

        if (password_verify($data['contrasena'], $hash)){
            echo 'La contraseña es válida. Bienvenido a MendoDrunk';
            session_start();
            $_SESSION['user'] = $usuario['dni'];
            

        } else{
            echo 'La contraseña no es válida.';
        }
    }

} else {
    echo "Su uruario no se encuentra registrado.";
}

?>