<?php 
require 'Database.php';

$database = new Database($config);

$query = "SELECT * FROM posts";
$parameters = [
    'user_id' => 1,
];

$posts = $database->query($query)->fetchAll();
?>

<section class="blog-list-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="blog-wrapper">
                    <h1>Here is My All Blogs</h1>
                    <ul>
                        <?php foreach($posts as $post): ?>
                        <li>
                            <a href="controllers/single.php"><?php echo $post['title']; ?></a>
                        </li>
                        <li>
                            <a href="controllers/single.php">Learn how can you learn about programming.</a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
    
                <div class="create-button">
                    <a href="controllers/create.php" class="btn btn-primary">Create New Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>