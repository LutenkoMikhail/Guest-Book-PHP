<?php \Core\View::render('parts/header.php', ['title' => 'Admin.All Posts.']); ?>
<div class="jumbotron">

    <div class="row justify-content-center">
        <?php if ($posts !== false) : ?>
        <div class="row">
            <h1>
                <p class="text-center"> New posts created!</p>
            </h1>
            <div class="col-sm-10">
                <?php foreach ($posts as $post): ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            Name: <?php echo $post['user_name']; ?>
                            <hr>
                            Email: <?php echo $post['email']; ?>
                            <hr>
                            Message: <?php echo $post['message']; ?>
                            <hr>
                            Date: <?php echo $post['created_at']; ?>
                            <hr>
                            <a href="/publication/<?php echo $post['id']; ?>" class="btn btn-primary">Publication</a>
                            <a href="/delete/<?php echo $post['id']; ?>" class="btn btn-primary">Delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <?php else: ?>
        <h1>
            No posts to check data!
        </h1>
    <?php endif; ?>
</div>
<?php \Core\View::render('parts/footer.php'); ?>

