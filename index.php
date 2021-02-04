<?php
    include('controllers/const_path.php');
    
    if(count($_COOKIE) > 1) {
        header('Location: '.LOVERS);
        exit();
    }
    else {
        session_start();
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="navbar-nav">
                <span class="navbar-brand">Bienvenue sur JusteUnTrou</span>
            </div>
        </nav>
        <form action="<?php echo INDEX_CONTROLLER ?>" method="POST">
            <div class="row-form">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname"/>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur le nom" title="Erreur sur le nom" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_LASTNAME_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname"/>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur le prénom" title="Erreur sur le prénom" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_FIRSTNAME_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="age">Age :</label>
                <input type="text" name="age"/>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur l'age" title="Erreur sur l'age" width="30" height="30" <?php if(empty($_SESSION['errors']) || (!in_array('E_AGE_REGEX_FALSE',$_SESSION['errors']) && !in_array('E_AGE_YOUNGER',$_SESSION['errors']))) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="gender">Genre :</label>
                <select name="gender">
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                    <option value="androgyne">androgyne</option>
                </select>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur le genre" title="Erreur sur le genre" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_GENDER_NOT_EXIST',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="postal">Code postal :</label>
                <input type="text" name="postal"/>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur le code postal" title="Erreur sur le code postal" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_POSTAL_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="email">Adresse mail</label>
                <input type="email" name="email"/>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur l'email" title="Erreur sur l'email" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_EMAIL_REGEX_FALSE',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <div class="row-form">
                <label for="type">Votre type de recherche</label>
                <select name="type">
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                    <option value="androgyne">androgyne</option>
                    <option value="homme et femme">homme et femme</option>
                    <option value="homme et androgyne">homme et androgyne</option>
                    <option value="femme et androgyne">femme et androgyne</option>
                    <option value="tout">tout</option>
                </select>
                <img src="<?php echo ERROR_IMG ?>" alt="erreur sur le type de recherche" title="Erreur sur le type de recherche" width="30" height="30" <?php if(empty($_SESSION['errors']) || !in_array('E_TYPE_NOT_EXIST',$_SESSION['errors'])) echo 'hidden' ?>>
            </div>
            <button type="submit" class="submit">Rencontrer nos célibataires</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
