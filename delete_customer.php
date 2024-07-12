<?php

include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
$id = isset($data['id']) ? intval($data['id']) : null;

if ($id === null) {
    http_response_code(400);
    echo json_encode(array('error' => 'No se recibió el ID del Cliente.'));
    exit;
}

try {
    $sql = "DELETE FROM contactos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        http_response_code(200);
        echo json_encode(array('message' => 'Registro eliminado correctamente.'));
    } else {
        http_response_code(404);
        echo json_encode(array('error' => 'No se encontró el Registro.'));
    }
} catch (PDOException $e) {
    http_response_code(500);
    error_log('Error al eliminar el registro: ' . $e->getMessage());
    echo json_encode(array('error' => 'Error en el servidor, contacte a un administrador.'));
} finally {
    $database->closeConnection();
}
?>