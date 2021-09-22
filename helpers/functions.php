<?php
require_once 'mysqlConnect.php';

function getCategories($DBConnection): ?array
{
    $categories = [];
    $query = 'SELECT * FROM categories';
    $result = $DBConnection->query($query);
    while ($category = $result->fetch_assoc()) {
        $categories[] = $category;
    }

    return $categories;
}

function getPosts($DBConnection): ?array
{
    $posts = [];
    $query = 'SELECT * FROM posts';
    $result = $DBConnection->query($query);
    while ($post = $result->fetch_assoc()) {
        $posts[] = $post;
    }

    return $posts;
}

function getPostsByCategory($categoryId, $DBConnection): ?array
{
    $posts = [];
    $query = 'SELECT * FROM posts WHERE category_id = ' . $categoryId;
    $result = $DBConnection->query($query);
    while ($post = $result->fetch_assoc()) {
        $posts[] = $post;
    }

    return $posts;
}

function getPost($DBConnection, $postId): ?array
{
    $query = 'SELECT * FROM posts WHERE id = ' . $postId;
    $result = $DBConnection->query($query);

    return $result->fetch_assoc();
}

function createPost($title, $text, $categoryId, $DBConnection): bool
{
    $query = 'INSERT INTO posts (title, text, category_id, date) VALUES ("' .
        $title . '", "' . $text . '",'. $categoryId . ', NOW())';
    return $DBConnection->query($query);
}

function updatePost($id, $title, $text, $categoryId, $DBConnection): bool
{
    $query = 'UPDATE posts SET title="' . $title .
        '", text = "' . $text .
        '", category_id = ' . $categoryId .
        ' WHERE id = ' . $id;
    return $DBConnection->query($query);
}

function deletePost($id, $DBConnection): bool
{
    $query = 'DELETE FROM posts WHERE id = ' . $id;
    return $DBConnection->query($query);
}

function saveComment($comment, $postId, $DBConnection): bool
{
    $query = 'INSERT INTO comments (comment, post_id, date) VALUES ("' . $comment . '", ' . $postId . ', NOW())';
    return $DBConnection->query($query);
}

function getPostComments($postId, $DBConnection): ?array
{
    $comments = [];
    $query = 'SELECT * FROM comments WHERE post_id = ' . $postId;
    $result = $DBConnection->query($query);
    while ($comment = $result->fetch_assoc()) {
        $comments[] = $comment;
    }

    return $comments;
}
