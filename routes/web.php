<?
require_once __DIR__ . '/../app/Http/Controllers/TaskController.php';
use App\Http\Controllers\TaskController;

$routes = [
    '/' => [TaskController::class, 'index']
];

$requestUri = strtok($_SERVER['REQUEST_URI'], '?');
$requestUri = str_replace('/public', '', $requestUri);

if (isset($routes[$requestUri])) {
    [$controller, $method] = $routes[$requestUri];
    (new $controller)->$method();
} else {
    http_response_code(404);
    echo 'Страница не найдена';
}

// public/index.php
require_once __DIR__ . '/../routes/web.php';
