<?php
/**
 * API: Get Industries
 * Returns industries.json data.
 * 
 * Usage:
 *   GET /avchemicals/api/get_industries.php
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('X-Content-Type-Options: nosniff');

$jsonFile = __DIR__ . '/../assets/data/industries.json';

if (!file_exists($jsonFile)) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Industries data not found.',
        'data' => []
    ]);
    exit;
}

$data = json_decode(file_get_contents($jsonFile), true);

if ($data === null) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Error reading industries data.',
        'data' => []
    ]);
    exit;
}

echo json_encode([
    'status' => 'success',
    'data' => $data,
    'total' => count($data)
]);
