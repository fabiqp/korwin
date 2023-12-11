<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    $sql = "INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')";
    $conn->query($sql);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new post</title>
</head>
<body>
    <h1>Create a new post</h1>

    <form method="post" action="create_post.php">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <label for="author">Your Name:</label>
        <input type="text" name="author" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
