<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
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

    <?= form_open('register') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50" />

    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="" size="50" />

    <div><input type="submit" value="Submit" /></div>

    </form>

    <p>You already have an account?</p>
    <p><?= anchor('login', 'Login now!') ?></p>

</section>

<?php include('Partials/script.php'); ?>

</body>
</html>

