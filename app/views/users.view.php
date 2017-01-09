<?php require('partials/head.php') ?>

    <h1>Привет, <?= $_COOKIE['name']?></h1>

    <ul>
        <?php
        foreach ($users as $user) {
            echo "<li>" . $user->Name . "</li>";
            echo "<li>" . $user->lastname . "</li>";
            echo "<li>" . $user->gender . "</li>";
            echo "<li>" . $user->groups . "</li>";
            echo "<li>" . $user->email . "</li>";
            echo "<li>" . $user->birthdate . "</li>";
            echo "<li>" . $user->exam . "</li>";
            echo "<li>" . $user->local . "</li>";
        }
    ?>
    </ul>

<?php require('partials/footer.php') ?>