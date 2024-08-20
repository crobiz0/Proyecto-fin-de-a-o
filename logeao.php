<?php
session_start();

if(!isset($_SESSION['nombre_usuario'])){
include("index.php");
}else{
    include("yalogeo.php");
}

?>