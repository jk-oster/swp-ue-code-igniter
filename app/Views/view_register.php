<?= $this->extend('view_layout') ?>

<?= $this->section('content') ?>

    <h2>Register</h2>

    <?php

    if(!empty($_POST) && $validation) {
        echo $validation->listErrors();
    }
    if(!empty($_POST) && !$nameAvailable){
        echo "
        <ul>
        <li>Username or password invalid!</li>
        </ul>
        ";
    }
    ?>

    <?= form_open('register') ?>

    <div>
        <label for="firstname">First name</label>
        <input type="text" name="firstname" value="<?= $firstname ?? '' ?>" size="50" />
    </div>

    <div>
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" value="<?= $lastname ?? '' ?>" size="50" />
    </div>

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" value="<?= $username ?? '' ?>" size="50" />
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" value="" size="50" />
    </div>

    <div>
        <label for="passconf">Password Confirm</label>
        <input type="password" name="passconf" value="" size="50" />
    </div>

    <div>
        <label for="email">Email Address</label>
        <input type="text" name="email" value="<?= $email ?? '' ?>" size="50" />
    </div>

    <div><input type="submit" value="Submit" /></div>

    </form>

    <p>You already have an account? <?= anchor('login', 'Login now!') ?></p>

<?= $this->endSection() ?>