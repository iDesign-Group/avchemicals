<?php
/**
 * API: Get Products
 * Returns products.json filtered by optional category parameter.
 * 
 * Usage:
 *   GET /avchemicals/api/get_products.php
 *   GET /avchemicals/api/get_products.php?category=amino-acids
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('X-Content-Type-Options: nosniff');

$category = isset($_GET['category']) ? trim($_GET['category']) : 'all';

$jsonFile = __DIR__ . '/../assets/data/products.json';

if (!file_exists($jsonFile)) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Product data not found.',
        'data' => []
    ]);
    exit;
}

$data = json_decode(file_get_contents($jsonFile), true);

if ($data === null) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'Error reading product data.',
        'data' => []
    ]);
    exit;
}

if ($category !== 'all' && $category !== '') {
    $data = array_filter($data, function ($product) use ($category) {
        return $product['id'] === $category;
    });
    $data = array_values($data);
}

echo json_encode([
    'status' => 'success',
    'data' => $data,
    'total' => count($data)
]);
