<?php
    require_once __DIR__ . '/model/functions/get_comments.php';

    $comments = getComments();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php
    include __DIR__ . '/view/header.php';
    include __DIR__ . '/view/comments.php';
    ?>
    <hr>
    <?php
    include __DIR__ . '/view/send_comment.php';
    include __DIR__ . '/view/footer.php';
    ?>
</body>
</html>