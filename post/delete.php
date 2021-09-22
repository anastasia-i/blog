<?php
require_once '../helpers/functions.php';

$postId = $_GET['post_id'];
deletePost($postId, $DBConnection);

header('Location: ' . $_SERVER['HTTP_ORIGIN'] . '/blog/');
