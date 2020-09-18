<?php \Core\View::render('parts/header.php', ['title' => 'Create Post.']); ?>

    <div class="jumbotron">

        <div class="container">
            <div class="row">
                <div class="div col-sm-8 align-content-center align-self-center">
                    <h1 class="display-4">Create Post </h1>
                    <form method="POST" action="store">
                        <div class="form-group">
                            <label for="user_name">user name</label>
                            <input type="text" class="form-control" id="user_name" name="user_name"
                                   placeholder="user name"
                                   pattern="[A-Za-zА-Яа-яЁё0-9]{2,50}" required
                                   value="<?php echo !empty($data['user_name']) ? $data['user_name'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email"
                                   pattern="^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$"
                                   required value="<?php echo !empty($data['email']) ? $data['email'] : '' ?>">
                        </div>

                        <div class="form-group">
                            <label for="message">message</label>
                            <input type="text" class="form-control" id="message" name="message" placeholder="message"
                                   pattern="[A-Za-zА-Яа-яЁё0-9]{10,255}"
                                   required value="<?php echo !empty($data['message']) ? $data['message'] : '' ?>">

                        </div>
                        <button type="submit" class="btn btn-primary">Creat Post.</button>
                    </form>
                </div>
            </div>
        </div> <!-- /container -->
    </div> <!-- /container -->

<?php \Core\View::render('parts/footer.php'); ?>