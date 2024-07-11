<?php

function uploadFile($file, $path, $allowedExtensions, $maxSize) {
    $errors = [];
    
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_type = $file['type'];
    $file_size = $file['size'];
    $tmp = explode('.', $file['name']);
    $file_ext = strtolower(end($tmp));

    $file_path = $path . $file_name;

    if (!in_array($file_ext, $allowedExtensions)) {
        $errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
    }

    if ($file_size > $maxSize) {
        $errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
    }

    if (empty($errors)) {
        if (move_uploaded_file($file_tmp, $file_path)) {
            return ['success' => true, 'message' => 'File uploaded successfully.', 'file' => $file_path];
        } else {
            return ['success' => false, 'message' => 'Error uploading file.'];
        }
    } else {
        return ['success' => false, 'message' => 'File not uploaded due to errors.', 'errors' => $errors];
    }
}
?>