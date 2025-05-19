<?php
// Habilitar informes de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Iniciar sesión
session_start();

// Cargar archivos principales
require_once "config.php";
require_once "Models/conexion.php";
require_once "Models/usuario_model.php";
require_once "Models/cotizacion_model.php";
require_once "Controllers/auth_controller.php";
require_once "Controllers/cliente_controller.php";
require_once "Controllers/main_controller.php";

// Iniciar el controlador
$controller = new MainController();
$controller->route();
?>