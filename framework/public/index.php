<?php
require_once '../vendor/autoload.php';

use Framework\Http\Request;
$request = new Request();

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('developer: hello');
echo 'Hello, ' . $name . '!';