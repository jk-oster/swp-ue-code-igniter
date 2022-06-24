<?= $this->extend('view_layout') ?>

<?= $this->section('content') ?>

    <h1><?= $headline ?? '' ?></h1>

    <h3>Your are successfully logged in "<?= $user['firstname'] ?> <?= $user['lastname'] ?>"!</h3>

    <p>This is the secret content only you can see...</p>

    <p><?= anchor('logout', 'Log me out again!') ?></p>

<?= $this->endSection() ?>