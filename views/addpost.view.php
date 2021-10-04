<?php require_once 'partials/top.php' ?>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Bloger</a>
    <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['loggedUser'])): ?>
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
            <a href="index.php" class="nav-link">Back to Blog</a>
        </li>
        <?php endif; ?>

    </ul>
</nav>

<div class="jumbotron text-center">
    <h4>Add New Post</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <?php if($post->newPostStatus): ?>
            <div class="alert alert-success">New Post inserted</div>
            <?php endif; ?>
            <form action="add_post.php" method="POST">
                <input type="text" name="post_title" placeholder="Post title" class="form-control"><br>
                <textarea name="post_description" class="form-control" placeholder="description" cols="30"
                    rows="10"></textarea><br>
                <button type="submit" name="post_sub_btn" class="form-control btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php' ?>