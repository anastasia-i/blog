<?php

require_once '../helpers/functions.php';
/** @var $DBConnection */
$postId = $_GET['post_id'];
$post = getPost($DBConnection, $postId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post['title'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
    <?php require_once '../templates/menu.php'; ?>
</header>

<div class="container">
    <?php require_once '../templates/post.php'; ?>
</div>
</body>
</html>

