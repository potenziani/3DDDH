<?php
// save_annotations.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

try {
    if (!isset($_FILES['file']) || !isset($_POST['path'])) {
        throw new Exception('Missing file or path parameter');
    }
    
    $uploadDir = $_POST['path'];
    $fileName = $_FILES['file']['name'];
    $tmpName = $_FILES['file']['tmp_name'];
    
    // Verifica che la directory esista
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    $filePath = $uploadDir . '/' . $fileName;
    
    // Sposta il file caricato nella posizione finale
    if (move_uploaded_file($tmpName, $filePath)) {
        echo json_encode([
            'success' => true, 
            'message' => 'File saved successfully',
            'path' => $filePath
        ]);
    } else {
        throw new Exception('Failed to save file');
    }
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => $e->getMessage()
    ]);
}
?>