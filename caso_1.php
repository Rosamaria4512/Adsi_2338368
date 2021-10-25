<?php

$nombre = "ana";
$contrasena = 123456;
switch ($nombre) {

    case 'ana':
        echo "Bienvenida " . $nombre . "al programa";
        break;
        case 'carlos':
            echo "bienvenido " . $nombre . "al programa";
            break;
            default:
            echo "usuario no registrado ". $nombre;
            break;

}