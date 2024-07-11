<?php
include 'pdo_conexion.php';
include 'upload_image.php';

$database = new Database();
$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método de solicitud no permitido.']);
    exit;
}

$name = isset($_POST['txtProductName']) ? htmlspecialchars($_POST['txtProductName'], ENT_QUOTES, 'UTF-8') : null;
$description = isset($_POST['txtDescription']) ? htmlspecialchars($_POST['txtDescription'], ENT_QUOTES, 'UTF-8') : null;
$category = isset($_POST['txtCategory']) ? htmlspecialchars($_POST['txtCategory'], ENT_QUOTES, 'UTF-8') : null;
$price = isset($_POST['txtPrice']) ? floatval($_POST['txtPrice']) : null;
$image = isset($_FILES['file']) ? $_FILES['file'] : null;

if (!$name || !$description || !$category || !$price || !$image) {
    echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
    exit;
}

try {
    $path = 'uploads/';
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    $maxSize = 2097152;

    $result = uploadFile($image, $path, $allowedExtensions, $maxSize);

    if ($result['success']) {
        $filePath = $result['file'];

        $sql = 'INSERT INTO productos (nombre, descripcion, imagen, categoria, precio) VALUES (:name, :description, :filePath, :category, :price)';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':filePath', $filePath);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->execute();

        echo json_encode(['success' => true, 'message' => 'Producto creado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => $result['message']]);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error al crear un producto: ' . $e->getMessage()]);
} finally {
    $database->closeConnection();
}
?>