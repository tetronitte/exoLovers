<?php

    include('const_path.php');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        setcookie('lastname','',time(),'/');
        setcookie('firstname','',time(),'/');
        setcookie('age','',time(),'/');
        setcookie('gender','',time(),'/');
        setcookie('postal','',time(),'/');
        setcookie('email','',time(),'/');
        setcookie('type','',time(),'/');
        
        unset($_SESSION['lovers']);
        unset($_SESSION['user']);
        header('Location: '.INDEX);
        exit();
    }
    else {
        $_SESSION['user'] = "
        <div>
            <span>Nom :".$_COOKIE['lastname']."</span>
            <span>Nom :".$_COOKIE['firstname']."</span>
            <span>Nom :".$_COOKIE['age']."</span>
            <span>Nom :".$_COOKIE['gender']."</span>
            <span>Nom :".$_COOKIE['postal']."</span>
            <span>Nom :".$_COOKIE['email']."</span>
            <span>Nom :".$_COOKIE['type']."</span>
        </div>";
        header('Location: '.USER);
        exit();
    }


    
    

?>