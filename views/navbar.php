<nav class="navbar navbar-expand-lg">
    <div class="navbar-nav">
        <span class="navbar-brand">Bonjour <?php if(isset($_COOKIE['firstname'])) echo $_COOKIE['firstname'] ?></span>
        <a class="nav-item nav-link" href="http://localhost/exoLovers/controllers/lovers_controller.php/">NOS CELIBATAIRES</a>
        <a class="nav-item nav-link" href="http://localhost/exoLovers/controllers/user_controller.php/">MES INFORMATIONS</a>
    </div>
</nav>