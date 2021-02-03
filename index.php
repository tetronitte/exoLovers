<?php
    if(count($_COOKIE) > 1) {
        header('Location: ../index.php/');
        exit();
    }

    session_start();
    if(isset($_SESSION['errors'])) {
        var_dump($_SESSION['errors']);
    }


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <form action="controllers/index_controller.php" method="POST">
            <div class="row-form">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname"/>
                <img src="assets/img/error.png" alt="erreur sur le nom" title="Erreur sur le nom" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_LASTNAME_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname"/>
                <img src="assets/img/error.png" alt="erreur sur le prénom" title="Erreur sur le prénom" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_FIRSTNAME_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="age">Age :</label>
                <input type="text" name="age"/>
                <img src="assets/img/error.png" alt="erreur sur l'age" title="Erreur sur l'age" width="30" height="30" <?php if(empty($_SESSION['errors']) || (!in_array('E_AGE_REGEX_FALSE',$_SESSION['errors']) && !in_array('E_AGE_YOUNGER',$_SESSION['errors']))) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="gender">Genre :</label>
                <select name="gender">
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                    <option value="androgyne">androgyne</option>
                </select>
                <img src="assets/img/error.png" alt="erreur sur le genre" title="Erreur sur le genre" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_GENDER_NOT_EXIST',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="postal">Code postal :</label>
                <input type="text" name="postal"/>
                <img src="assets/img/error.png" alt="erreur sur le code postal" title="Erreur sur le code postal" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_POSTAL_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="email">Adresse mail</label>
                <input type="email" name="email"/>
                <img src="assets/img/error.png" alt="erreur sur l'email" title="Erreur sur l'email" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_EMAIL_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="type">Votre type de recherche</label>
                <select name="type">
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                    <option value="androgyne">androgyne</option>
                    <option value="homme">homme et femme</option>
                    <option value="femme">homme et androgyne </option>
                    <option value="androgyne">femme et androgyne</option>
                </select>
                <img src="assets/img/error.png" alt="erreur sur le type de recherche" title="Erreur sur le type de recherche" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_TYPE_NOT_EXIST',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <button type="submit">Rencontrer nos célibataires</button>
        </form>
    </body>
</html>
