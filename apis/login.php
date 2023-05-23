<?php
$response = ['message' => 'something went wrong', 'error' => true, 'data' => null];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once './classes/Auth.php';
    $auth = new Auth();
    if (isset($_GET['email'], $_GET['password'])) {
        $result = $auth->login($_GET['email'], $_GET['password']);
        if ($result == 1) {
            $response['message'] = 'Login success';
            $response['error'] = false;
        } else {
            $response['message'] = 'email or password is incorrect';
        }
    } else
        $response['message'] = "email or password not provided";
} else {
    $response['message'] = 'Invalid request';
}
echo json_encode($response); // array/object/variables ----> json
