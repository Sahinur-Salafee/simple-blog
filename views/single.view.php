<?php 

$config = dirname(__DIR__) . '/config.php';
require '../Database.php';
$database = new Database($config);
$posts = "SELECT * FROM posts WHERE user_id = 2";
// $parameters = [
//     'user_id' => 2,
// ];
$posts = $database->query($posts)->fetchAll();?>

<section class="blog-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="blog-content">
                    <?php foreach($posts as $post): ?>
                    <div class="blog-title">
                        <h1><?php echo $post['title']; ?></h1>
                        <p><?php echo $post['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
