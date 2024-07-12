<?php

include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

try {
    $sql = "SELECT * FROM contactos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $contactos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) { 
    error_log('Error al obtener contactos: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(array('error' => 'Error en el servidor, contacte a un administrador.'));
} finally {    
    $database->closeConnection();
}
?>