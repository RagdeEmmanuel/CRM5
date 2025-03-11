<?php
header('Content-Type: application/json');
echo json_encode([
    ['id' => 1, 'nombre' => 'Opción 1'],
    ['id' => 2, 'nombre' => 'Opción 2'],
    ['id' => 3, 'nombre' => 'Opción 3'],
]);
?>