<?php
require_once '../helpers/functions.php';

$id = $_POST['post_id'] ?? 0;
$title = $_POST['title'] ?? '';
$categoryId = $_POST['category_id'] ?? '';
$text = $_POST['text'] ?? '';
if (empty($title) || empty($text) || empty($categoryId)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if ($id) {
    if (!updatePost($id, $title, $text, $categoryId, $DBConnection)) {
        echo $DBConnection->error;
    }

    header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/blog/post/index.php?post_id=' . $id);
} else {
    if (!createPost($title, $text, $categoryId, $DBConnection)) {
        echo $DBConnection->error;
    }

    header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/blog/');
}