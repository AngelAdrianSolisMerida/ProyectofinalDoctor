<?php
$host = 'nozomi.proxy.rlwy.net';
$puerto = '34137';
$usuario = 'postgres';
$clave = 'iAmFliewVOUbUsficgYIzSynYHpVVryi';
$base_de_datos = 'railway';

try {
    $conexion = new PDO("pgsql:host=$host;port=$puerto;dbname=$base_de_datos", $usuario, $clave);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // Establecer el formato de fecha para PostgreSQL
    $conexion->exec("SET datestyle = 'ISO, DMY'");
} catch (PDOException $e) {
    error_log('['.date('Y-m-d H:i:s').'] Error de conexión: ' . $e->getMessage());
    die(json_encode([
        'success' => false,
        'message' => 'Error de conexión a la base de datos',
        'details' => 'Verifique los logs para más información'
    ]));
}
?>