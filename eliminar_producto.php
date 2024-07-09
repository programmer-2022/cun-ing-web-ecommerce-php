<?php

include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);
$id = isset($data['id']) ? intval($data['id']) : null;

if ($id === null) {
    http_response_code(400); // Bad Request
    echo json_encode(array('error' => 'No se recibió el ID del producto.'));
    exit;
}

try {
    // Preparar la consulta SQL para eliminar el producto por su ID
    $sql = "DELETE FROM productos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Verificar si se eliminó correctamente
    if ($stmt->rowCount() > 0) {
        http_response_code(200); // OK
        echo json_encode(array('message' => 'Producto eliminado correctamente.'));
    } else {
        http_response_code(404); // Not Found
        echo json_encode(array('error' => 'No se encontró el producto.'));
    }
} catch (PDOException $e) {
    http_response_code(500); // Internal Server Error
    error_log('Error al eliminar el producto: ' . $e->getMessage());
    echo json_encode(array('error' => 'Error en el servidor, contacte a un administrador.'));
} finally {
    $database->closeConnection();
}
?>
