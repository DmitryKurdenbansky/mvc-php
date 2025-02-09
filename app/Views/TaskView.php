<?

namespace App\Views;
class TaskView {
    public function render($view, $data = []) {
        extract($data);
        require_once __DIR__ . '/../../resources/views/' . str_replace('.', '/', $view) . '.php';
    }
}

?>