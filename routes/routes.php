<?php

use App\Controller\AddContactController;
use App\Controller\ListContactController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/' && $method === 'GET') {
    (new ListContactController)->home();
} elseif ($uri === '/contact/add' && $method === 'GET') {
    (new AddContactController)->addForm();
} elseif ($uri === '/contact/add' && $method === 'POST') {
    (new AddContactController)->addBD();
} else {
    http_response_code(404);
    echo '404 Not Found';
}
