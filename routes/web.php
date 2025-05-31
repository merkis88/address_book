<?php

use App\Controller\AddContactController;
use App\Controller\ListContactController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$path = str_replace('/address_book/public', '', $uri);

if ($path === '/' && $method === 'GET') {
    (new ListContactController)->home();
} elseif ($path === '/contact/add' && $method === 'GET') {
    (new AddContactController)->showForm();
} elseif ($path === '/contact/add' && $method === 'POST') {
    (new AddContactController)->addBD();
} else {
    http_response_code(404);
    echo '404 Not Found';
}
