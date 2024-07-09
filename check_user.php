<?php

include 'pdo_conexion.php';

$database = new Database();
$conn = $database->getConnection();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if(!$username || !$password) {
    echo "<script>
    alert('Por favor, complete todos los campos correctamente.');
    window.location.href = 'contact.php';
</script>";
exit;
}

try {
    $sql = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>
        alert('Usuario o contraseña incorrectos');
        window.location.href = 'login.html';
      </script>";
    }
} catch(PDOException $e) { 
    echo "<script>
        alert('Error en el servidor, contacte a un administrador.');
        window.location.href = 'login.html';
    </script>";
} finally {    
    $database->closeConnection();
}
?>