<?php
header("Content-Type: application/json");

$request_method = $_SERVER["REQUEST_METHOD"];
switch($request_method)
{
    case 'GET':
        // Handle GET request
        handle_get();
        break;
    case 'POST':
        // Handle POST request
        handle_post();
        break;
    case 'PUT':
        // Handle PUT request
        handle_put();
        break;
    case 'DELETE':
        // Handle DELETE request
        handle_delete();
        break;
    default:
        // Invalid request method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

function handle_get()
{
    $response = array(
        'status' => 'success',
        'data' => 'This is a GET request'
    );
    echo json_encode($response);
}

function handle_post()
{
    $input = json_decode(file_get_contents('php://input'), true);
    $response = array(
        'status' => 'success',
        'data' => 'This is a POST request',
        'received' => $input
    );
    echo json_encode($response);
}

function handle_put()
{
    $input = json_decode(file_get_contents('php://input'), true);
    $response = array(
        'status' => 'success',
        'data' => 'This is a PUT request',
        'received' => $input
    );
    echo json_encode($response);
}

function handle_delete()
{
    $response = array(
        'status' => 'success',
        'data' => 'This is a DELETE request'
    );
    echo json_encode($response);
}
?>
git remote remove origin
git remote add origin https://github.com/EdmarLeopoldo/API-RESTful.git
