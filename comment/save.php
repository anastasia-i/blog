<?php
require_once '../helpers/functions.php';

$id = $_POST['post_id'] ?? 0;
$comment = $_POST['comment'] ?? '';

if (empty($comment)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

saveComment($comment, $id, $DBConnection);

header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/blog/post/index.php?post_id=' . $id);