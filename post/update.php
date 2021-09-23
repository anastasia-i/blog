<?php
require_once '../helpers/functions.php';
$postId = $_GET['post_id'] ?? 0;
if (!$postId) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$post = getPost($DBConnection, $postId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<header>
    <?php require_once '../templates/menu.php'; ?>
</header>

<div class="container">
    <?php require_once '../templates/form.php'; ?>
</div>
</body>
</html>
