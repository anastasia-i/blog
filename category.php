<?php
require_once 'helpers/functions.php';
/** @var $DBConnection */
$posts = getPostsByCategory($_GET['category_id'], $DBConnection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header>
        <?php require_once 'templates/menu.php'; ?>
    </header>
    <section class="card-section">
        <div class="container">
            <?php if (!empty($posts)) {
                foreach ($posts as $post) {
                    require 'templates/post.php';
                }
            } else {
                echo 'No posts';
            } ?>

            <a class="btn btn-success" href="post/create.php">Create new post</a>
        </div>
    </section>
</body>
</html>