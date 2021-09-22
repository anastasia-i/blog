<?php /** @var $post */ ?>
<?php $comments = getPostComments($post['id'], $DBConnection); ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <?php if (isset($_GET['post_id'])) : ?>
                <span><?= $post['title'] ?></span>
            <?php else : ?>
                <a href="post/index.php?post_id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
            <?php endif; ?>
        </h5>
        <p class="card-text"><?= mb_substr($post['text'], 0, 158, 'UTF-8') ?></p>
        <p><?= $post['date'] ?></p>
    </div>

    <?php if (isset($_GET['post_id'])) : ?>
        <a class="btn btn-primary" href="../post/update.php?post_id=<?= $post['id'] ?>">Update</a>
        <a class="btn btn-danger" href="../post/delete.php?post_id=<?= $post['id'] ?>">Delete</a>

        <h3>Comments</h3>
    <?php endif; ?>

    <?php if ($comments && isset($_GET['post_id'])) : ?>
        <?php foreach ($comments as $comment) : ?>
            <p><?= $comment['comment'] ?></p>
            <p><?= $comment['date'] ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (isset($_GET['post_id'])) : ?>
        <a class="btn btn-info" href="../comment/create.php?post_id=<?= $post['id'] ?>">Add comment</a>
    <?php endif; ?>
</div>