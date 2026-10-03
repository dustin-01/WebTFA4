<?= view('templates/header', ['title' => $title]) ?>
<h1>login</h1>
<?php if ($error): ?>
<p><?= esc($error) ?></p>
<?php endif ?>
<form method="post" action="/login">
    <?= csrf_field() ?>
    <p><label>username<br><input type="text" name="username" required></label></p>
    <p><label>password<br><input type="password" name="password" required></label></p>
    <button type="submit">login</button>
</form>
<?= view('templates/footer') ?>
