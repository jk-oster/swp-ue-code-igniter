<?= $this->extend('view_layout') ?>

<?= $this->section('content') ?>

    <h2><?= $headline ?? 'Login' ?></h2>

    <?php if (isset($headline)) echo "<p>You must log in to access the secret</p>"; ?>

    <?php

    if (!empty($_POST) && isset($validation)) {
        echo $validation->listErrors();
    }
    if (!empty($_POST) && isset($loginOkay) && !$loginOkay) {
        echo "
            <ul>
            <li>Username or password invalid!</li>
            </ul>
            ";
    }
    ?>

    <?= form_open('login') ?>

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" value="<?= $username ?? '' ?>" size="50"/>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" value="" size="50"/>
        </div>

        <div><input type="submit" value="Submit"/></div>

    </form>

    <p>Not registered yet? <?= anchor('register', 'Register now!') ?></p>

<?= $this->endSection() ?>