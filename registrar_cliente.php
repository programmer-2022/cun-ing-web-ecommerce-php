<?php
include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (!$name || !$email || !$subject || !$message) {
    echo "<script>
        alert('Por favor, complete todos los campos correctamente.');
        window.location.href = 'contact.php';
    </script>";
    exit;
}

try {
    $stmt = $conn->prepare("INSERT INTO contactos (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':message', $message);
    $stmt->execute();

    echo "<script>
            alert('¡Mensaje enviado correctamente!');
            window.location.href = 'contact.php';
        </script>";

} catch(PDOException $e) {
    echo "<script>
        alert('Error al enviar el mensaje. Inténtalo de nuevo más tarde.');
        window.location.href = 'contact.php';
    </script>";
} finally {    
    $database->closeConnection();
}

?>
