<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SWP UE7 Osterberger</title>
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

    <?= $this->renderSection('content') ?>

</section>

<!-- SCRIPTS -->
<?php include('Partials/script.php'); ?>

</body>
</html>

