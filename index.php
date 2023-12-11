<?php
include 'config.php';

$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    <h1>Forum</h1>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['content']}</p>";
        echo "<p>Author: {$row['author']}</p>";
        echo "<p>Created at: {$row['created_at']}</p>";
        echo "</div>";
    }
    ?>

    <a href="create_post.php">Create a new post</a>
</body>
</html>
