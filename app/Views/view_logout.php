<?= $this->extend('view_layout') ?>

<?= $this->section('content') ?>

    <h3>Your have been successfully logged out!</h3>
    <p><?= anchor('/', 'Try it again!') ?></p>

<?= $this->endSection() ?>