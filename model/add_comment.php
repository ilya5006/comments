<?php
require_once __DIR__ . '/functions/add_comment.php';

addComment($_POST['username'], $_POST['comment']);

header('Location: /');
