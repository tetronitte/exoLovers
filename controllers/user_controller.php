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
        $_SESSION['user'] = '
        <div class="infos">
            <div class="row">
                <span class="title">Nom :&ensp;</span>
                <span class="value">'.$_COOKIE['lastname'].'</span>
            </div>
            <div class="row">
                <span class="title">Prénom :&ensp;</span>
                <span class="value">'.$_COOKIE['firstname'].'</span>
            </div>
            <div class="row">
                <span class="title">Age :&ensp;</span>
                <span class="value">'.$_COOKIE['age'].'</span>
            </div>
            <div class="row">
                <span class="title">Genre :&ensp;</span>
                <span class="value">'.$_COOKIE['gender'].'</span>
            </div>
            <div class="row">
                <span class="title">Postal :&ensp;</span>
                <span class="value">'.$_COOKIE['postal'].'</span>
            </div>
            <div class="row">
                <span class="title">Email :&ensp;</span>
                <span class="value">'.$_COOKIE['email'].'</span>
            </div>
            <div class="row">
                <span class="title">Type de recherche :&ensp;</span>
                <span class="value">'.$_COOKIE['type'].'</span>
            </div>
        </div>';
        header('Location: '.USER);
        exit();
    }


    
    

?>