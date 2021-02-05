<?php
include('const_path.php');
session_start();
unset($_SESSION['errors']);

$errors = array();
$genderArray = ['homme','femme','androgyne'];
$typeArray = ['homme','femme','androgyne','homme et femme','homme et androgyne','femme et androgyne','tout'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Nom
    if(isset($_POST['lastname']) && !empty($_POST['lastname'])) {
        $lastname = validData($_POST['lastname']);
        if(!regexName($lastname)) $errors[] = 'E_LASTNAME_REGEX_FALSE';
    }
    //Prénom
    if(isset($_POST['firstname']) && !empty($_POST['firstname'])) {
        $firstname = validData($_POST['firstname']);
        if(!regexName($firstname)) $errors[] = 'E_FIRSTNAME_REGEX_FALSE';
    }
    //Age
    if(isset($_POST['age']) && !empty($_POST['age'])) {
        $age = validData($_POST['age']);
        if(!regexAge($age)) $errors[] = 'E_AGE_REGEX_FALSE';
        if(intval($age) < 18) $errors[] = 'E_AGE_YOUNGER';
    }
    //Genre
    if(isset($_POST['gender']) && !empty($_POST['gender'])) {
        $gender = validData($_POST['gender']);
        if(!in_array($gender,$genderArray)) $errors[] = 'E_GENDER_NOT_EXIST';
    }
    //Code postal
    if(isset($_POST['postal']) && !empty($_POST['postal'])) {
        $postal = validData($_POST['postal']);
        if(!regexPostal($postal)) $errors[] = 'E_POSTAL_REGEX_FALSE';
    }
    //Adresse mail
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = validData($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) $errors[] = 'E_EMAIL_REGEX_FALSE';
    }
    //Type
    if(isset($_POST['type']) && !empty($_POST['type'])) {
        $type = validData($_POST['type']);
        if(!in_array($type,$typeArray)) $errors[] = 'E_TYPE_NOT_EXIST';
    }
    if(empty($errors)) {
        setcookie('lastname',$lastname,time()+3600*24,'/');
        setcookie('firstname',$firstname,time()+3600*24,'/');
        setcookie('age',$age,time()+3600*24,'/');
        setcookie('gender',$gender,time()+3600*24,'/');
        setcookie('postal',$postal,time()+3600*24,'/');
        setcookie('email',$email,time()+3600*24,'/');
        setcookie('type',$type,time()+3600*24,'/');
        header('Location: '.LOVERS);
        exit();
    }
    else {
        $_SESSION['errors'] = $errors;
        header('Location: '.INDEX);
        exit();
    }
}


//Vérifie les caractère de la chaibe
//@param string : la chaine de caractère vérifiée
function regexName($string) {
    return preg_match('/^([0-9a-zA-ZàáâäæçéèêëîïôœùûüÿÀÂÄÆÇÉÈÊËÎÏÖÔŒÙÛÜŸ \-\']+)$/',$string);
}

//Vérifie l'âge
//@param age : l'âge vérifié
function regexAge($age) {
    return preg_match('/^[0-9]{2}$/',$age);
}

//Vérifie le code postal
//@param postal : le code postal vérifié
function regexPostal($postal) {
    return preg_match('/^[0-9]{5}$/',$postal);
}

//Transforme la chaine de caractère envoyée par le formulaire pour la sécurisée
//@param data : la chaine de caractère à vérifier
//@return data : la chaine transformée
function validData($data) {
    $data = trim($data); //Supprime les espaces en début et fin de chaine
    $data = stripcslashes($data);//Supprime les antislash d'une chaine
    $data = htmlspecialchars($data);//Convertit les caractères spéciaux
    return $data;
}