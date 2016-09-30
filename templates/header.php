<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <h1>My Blog</h1>
                <?php if (isset($_SESSION['user'])): ?>
                <h4>Welcome, <?= $_SESSION['user']['name'] ?></h4>
                <?php endif; ?>
            </div>
        </div>

