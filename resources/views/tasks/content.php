<h1>Задачи</h1>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li><?= htmlspecialchars($task['title']) ?></li>
    <?php endforeach; ?>
</ul>