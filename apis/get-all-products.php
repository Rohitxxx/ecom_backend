<?php
$response = ['msg' => 'Something went wrong', 'error' => true, 'data' => null];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once './classes/Products.php';
    $products = new Products();
    $data = $products->getProducts();
    if ($data != false) {
        $response['data'] = $data;
        $response['msg'] = 'success';
        $response['error'] = false;
    }
} else {
    $response['msg'] = 'Invalid request';
}
echo json_encode($response);
