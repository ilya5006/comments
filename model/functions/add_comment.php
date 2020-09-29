<?php
require_once __DIR__ . '/../classes/Database.php';

function addComment(string $username, string $comment)
{
    Database::insert('comments', "null, '$username', NOW(), '$comment'");
}
