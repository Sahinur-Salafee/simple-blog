<section class="create-blog-post-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <h2>Create Blog Post</h2>
                <form class="blog-create-form" method="POST">
                    <div class="form-group">
                        <label for="blogTitle">Blog Title</label>
                        <input type="text" name="title" class="form-control" id="blogTitle" aria-describedby="blogTitle" placeholder="Blog Title">
                    </div>
                    <div class="form-group">
                        <label for="blogDesc">Blog Description</label>
                        <textarea type="text" name="description" class="form-control" id="blogDesc" aria-describedby="emailHelp" placeholder="Blog Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Blog Post</button>
                </form>
                <a href="./../index.php" class="btn btn-primary">Back to blog list</a>
            </div>
        </div>
    </div>
</section>