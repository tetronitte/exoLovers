<?php
    var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/navbar.css">
    </head>
    <body>
        <?php include('navbar.php'); ?>

        <div>
            <span>Nom :<?php if(isset($_COOKIE['lastname'])) echo ' '.$_COOKIE['lastname'] ?></span>
            <span>Prénom :<?php if(isset($_COOKIE['firstname'])) echo ' '.$_COOKIE['firstname'] ?></span>
            <span>Age :<?php if(isset($_COOKIE['age'])) echo ' '.$_COOKIE['age'] ?></span>
            <span>Genre :<?php if(isset($_COOKIE['gender'])) echo ' '.$_COOKIE['gender'] ?></span>
            <span>Code postal :<?php if(isset($_COOKIE['postal'])) echo ' '.$_COOKIE['postal'] ?></span>
            <span>Adresse mail :<?php if(isset($_COOKIE['email'])) echo ' '.$_COOKIE['email'] ?></span>
            <span>Type :<?php if(isset($_COOKIE['type'])) echo ' '.$_COOKIE['type'] ?></span>
        </div>

        <form action="../controllers/user_controller.php/" method="POST">
            <button type="submit">EFFACER TOUTES TRACES</button>
        </form>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>