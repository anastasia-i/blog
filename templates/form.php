<?php /** @var $post */ ?>
<form action="save.php" method="post">
    <input type="hidden" name="post_id" value="<?= $post ? $post['id'] : '' ?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" value="<?= $post ? $post['title'] : '' ?>" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="category">Select category</label>
        <select class="form-control" id="category" name="category_id">
            <option></option>
            <?php foreach (getCategories($DBConnection) as $category) : ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea class="form-control" name="text" id="text" rows="5">
            <?= $post ? $post['text'] : '' ?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>