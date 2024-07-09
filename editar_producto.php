<?php
include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$id = isset($data["txtProductId"]) ? intval($data["txtProductId"]) : null;
$name = isset($data['txtProductName']) ? htmlspecialchars($data['txtProductName'], ENT_QUOTES, 'UTF-8') : null;
$description = isset($data['txtDescription']) ? htmlspecialchars($data['txtDescription'], ENT_QUOTES, 'UTF-8') : null;
$category = isset($data['txtCategory']) ? htmlspecialchars($data['txtCategory'], ENT_QUOTES, 'UTF-8') : null;
$price = isset($data['txtPrice']) ? floatval($data['txtPrice']) : null;

try {
    $sql = 'UPDATE productos SET nombre = :name, descripcion = :description, categoria = :category, precio = :price WHERE id = :id';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo json_encode(['message' => 'Producto actualizado correctamente']);
} catch (PDOException $e) {
    echo json_encode(['message' => $e->getMessage()]);
} finally {
    $database->closeConnection();
}
?>
