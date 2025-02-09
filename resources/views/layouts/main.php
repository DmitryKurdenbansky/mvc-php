<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Приложение' ?></title>
</head>
<body>
<header>
    <h1>Приложение</h1>
</header>
<main>
    <?php include $content; ?>
</main>
</body>
</html>