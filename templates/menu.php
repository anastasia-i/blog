<?php /** @var $DBConnection */ ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/blog">My Blog</a>
    <ul class="navbar-nav mr-auto">
        <?php foreach (getCategories($DBConnection) as $category) : ?>
            <li class="nav-item">
                <a class="nav-link" href="./category.php?category_id=<?= $category['id'] ?>">
                    <?= $category['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>