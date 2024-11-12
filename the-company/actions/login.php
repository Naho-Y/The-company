<?php

    include "../classes/User.php";

    $user = new User;

    $user->login($_POST);

    // $_POST - houlds the data fro, the form views > index.php
    /*
        $_POST['username'];
        $_POST['password'];
    */

?>