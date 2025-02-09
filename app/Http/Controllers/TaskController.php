<?

namespace App\Http\Controllers;
use App\Models\Task;
use App\Views\TaskView;
class TaskController {
    public function index() {
        $tasks = Task::getAll();
        $view = new TaskView();
        $view->render('tasks.index', ['tasks' => $tasks]);
    }
}

?>