<h1>List of Blog Posts</h1>
<?php foreach ($posts as $post): ?>
    <h3>Post #<?php echo htmlspecialchars($post['id']); ?></h3>
    <?php echo htmlspecialchars($post['content']); ?>
    <a href="http://localhost/posts.php?id=<?php echo 
htmlspecialchars($post['id']); ?>">Read More</a>
    <hr/>
<?php endforeach; ?>