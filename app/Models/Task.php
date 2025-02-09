<?
namespace App\Models;
class Task {
    public static function getAll() {
        return [
            ['id' => 1, 'title' => 'Купить хлеб'],
            ['id' => 2, 'title' => 'Выучить PHP MVC']
        ];
    }
}

?>