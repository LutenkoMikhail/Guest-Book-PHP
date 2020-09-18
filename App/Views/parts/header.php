<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <?php if (!empty($title)): ?>
        <title><?php echo $title; ?></title>
    <?php endif; ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary mb-2">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <?php if (empty($_SESSION["is_auth"]) === true) { ?>
                <a class="nav-link" href="/home">Guest Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/post/create">Create Post</a>
            </li>
            <?php } ?>
            <?php if (empty($_SESSION["is_auth"])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>

            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/home"> <?php echo $_SESSION["login"] ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

<main role="main">




