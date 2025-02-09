<?

require_once __DIR__ . '/../app/Http/Controllers/TaskController.php';
use App\Http\Controllers\TaskController;

$routes = [
    '/test' => [TaskController::class, 'index']
];

$requestUri = strtok($_SERVER['REQUEST_URI'], '?');
if (isset($routes[$requestUri])) {
    [$controller, $method] = $routes[$requestUri];
    (new $controller)->$method();
} else {
    http_response_code(404);
    echo 'Страница не найдена';
}

?>