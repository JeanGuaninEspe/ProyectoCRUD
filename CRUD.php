<?php
include 'conexion.php';


$nombre = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    login();
}

function login(){
    global $conn, $nombre, $password;
    $sql = "SELECT * FROM users WHERE name = '$nombre' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Bienvenido";
header("location: prueba.php");
    } else {
        echo "Usuario o contraseña incorrectos";

    }
}