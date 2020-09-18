<?php \Core\View::render('parts/header.php', ['title' => 'User.All Posts.']); ?>
<!--<link rel="stylesheet" href="--><?php //echo ASSETS_URI; ?><!--css/libs/bootstrap.min.css">-->
<div class="jumbotron">

    <div class="row justify-content-center">

        <?php if ($posts !== false) : ?>

            <div class="row">
                <h1>
                    <p class="text-center"> Published posts!</p>
                </h1>
                <div class="col-sm-10">
                    <?php foreach ($posts as $post): ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                Name: <?php echo $post['user_name']; ?>
                                <hr>
                                Message: <?php echo $post['message']; ?>
                                <hr>
                                Date: <?php echo $post['created_at']; ?>
                                <hr>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <h1>
                <p class="text-center"> No published posts!</p>
            </h1>
        <?php endif; ?>
    </div>
</div>
<?php \Core\View::render('parts/footer.php'); ?>

