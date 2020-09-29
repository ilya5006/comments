<?php
require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Comment.php';

function getComments()
{
    $comments = Database::select('comments');

    $commentsObjects = [];

    foreach ($comments as $comment) {
        $datetime = new DateTime($comment['date']);

        $time = $datetime->format('H:i');
        $date = $datetime->format('d.m.Y');

        $commentsObjects[] = new Comment(
            $comment['id_comment'],
            $comment['username'],
            $comment['comment'],
            $time,
            $date
        );
    }

    return $commentsObjects;
}
