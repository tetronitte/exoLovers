<?php
    //CSS
    define('STYLE_CSS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/css/style.css');
    define('LOVERS_CSS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/css/lovers.css');
    define('NAVBAR_CSS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/css/navbar.css');
    define('USER_CSS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/css/user.css');

    //JSON
    define('JSON', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets//json/lovers.json');

    //VIEWS
    define('LOVERS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/views/lovers.php');
    define('INDEX', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers');
    define('USER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/views/user.php');

    //CONTROLLERS
    define('LOVERS_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/controllers/lovers_controller.php');
    define('INDEX_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/controllers/index_controller.php');
    define('USER_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/controllers/user_controller.php');

    //IMG
    define('ERROR_IMG', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/img/error.png');
    define('LOVERS_IMG', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/img/');

    //JS
    define('LOVERS_JS', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/exoLovers/assets/js/lovers.js');
?>