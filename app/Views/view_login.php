<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->
    <?php include('Partials/style.php'); ?>


</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<?php include('Partials/header.php'); ?>

<!-- CONTENT -->

<section>


    <?= $validation->listErrors() ?>

    <?= form_open('login') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>

    <p>Not registered yet?</p>
    <p><?= anchor('register', 'Register now!') ?></p>

</section>

<!-- SCRIPTS -->
<?php include('Partials/script.php'); ?>

</body>
</html>

