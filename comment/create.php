<?php require_once '../helpers/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
    <?php require_once '../templates/menu.php'; ?>
</header>
<div class="container">
    <form action="save.php" method="post">
        <input type="hidden" name="post_id" value="<?= $_GET['post_id'] ?>">
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="comment" id="text" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add comment</button>
    </form>
</div>

</body>
</html>