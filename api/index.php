<?php
header('Content-Type: application/json');

echo json_encode([
    'success' => true,
    'message' => 'SEO Client Management API is running',
    'time' => date('c')
], JSON_PRETTY_PRINT);
