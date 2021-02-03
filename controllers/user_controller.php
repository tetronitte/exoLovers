<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        setcookie('lastname');
        setcookie('firstname');
        setcookie('age');
        setcookie('gender');
        setcookie('postal');
        setcookie('email');
        setcookie('type');

        header('Location: ../index.php/');
        exit();
    }

?>