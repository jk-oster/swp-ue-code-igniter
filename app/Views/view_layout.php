<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SWP UE7 Osterberger</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->
    <?= $this->include('Partials/style') ?>

</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<?= $this->include('Partials/header') ?>

<!-- CONTENT -->
<section>

    <?= $this->renderSection('content') ?>

</section>

<!-- SCRIPTS -->
<?= $this->include('Partials/script') ?>

</body>
</html>

