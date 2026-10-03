<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?></title>
</head>
<body>
    <nav>
        <a href="/">today</a>
        <a href="/tasks">all tasks</a>
        <a href="/customers">customers</a>
        <a href="/users">users</a>
        <a href="/profile">profile</a>
        <a href="/about">about</a>
        <?php if (session()->get('user_id')): ?>
        <form method="post" action="/logout" style="display:inline">
            <?= csrf_field() ?>
            <button type="submit">logout</button>
        </form>
        <?php else: ?>
        <a href="/login">login</a>
        <?php endif ?>
    </nav>
    <hr>
