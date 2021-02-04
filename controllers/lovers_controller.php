<?php
    include('const_path.php');

    createJSON();
    displayJSON();
    header('Location: '.LOVERS);
    


function displayJSON() {
    $json = file_get_contents('../assets/json/lovers.json');
    $array = json_decode($json,true);

    $type = $_COOKIE['type'];
    switch ($type) {
        case 'homme' :
            $cards = createCards('homme',$array);
            break;
        case 'femme' :
            $cards = createCards('femme',$array);
            break;
        case 'androgyne' :
            $cards = createCards('androgyne',$array);
            break;
        case 'homme et femme' :
            $cards = createCards('homme','femme',$array);
            break;
        case 'homme et androgyne' :
            $cards = createCards('homme','androgyne',$array);
            break;
        case 'femme et androgyne' :
            $cards = createCards('femme','androgyne',$array);
            break;
        case 'tout' :
            $cards = createCards('femme','androgyne','homme',$array);
            break;
    }

    session_start();
    shuffle($cards);
    $_SESSION['lovers'] = $cards;
}

function createCards() {
    $args = func_get_args();
    $cards = array();
    $card = "";
    for($i = 0 ; $i < count($args)-1; $i++) {
        foreach($args[count($args)-1][$args[$i]] as $elem) {
            $card .= '<div class="card">';
            $card .= '<img class="card-img-top" src="'.LOVERS_IMG.$elem['img'].'">';
            $card .= '<div class="card-body">';
            $card .= '<span class="card-title">'.$elem['firstname'].' '.$elem['lastname'].' - '.$elem['age'].' - '.$elem['postal'].'</span>';
            $card .= '<p class="card-text">'.$elem['infos'].'</p>';
            $card .= '</div></div>';
            $cards[] = $card;
            $card = "";
        }
    }
    return $cards;
}

function createJSON() {
    if (!file_exists('../assets/json/lovers.json')) {
        file_put_contents('../assets/json/lovers.json','lovers');
    }
    $json = file_get_contents('../assets/json/lovers.json');
    $array = json_decode($json,true);
    $array['homme'] = array(
        array('img' => 'arno_lapoutre.jpg','lastname' => 'Lapoutre','firstname' => 'Arno','age' => '29', 'postal' => '80000', 'infos' => 'Je suis chaud de la night !'),
        array('img' => 'ogustin_toutdur.jpg','lastname' => 'Toutdur','firstname' => 'Ogustin','age' => '32', 'postal' => '75000', 'infos' => 'Petit mais puissant !'),
        array('img' => 'tibo_laforme.jpg','lastname' => 'Laforme','firstname' => 'Tibo','age' => '35', 'postal' => '80080', 'infos' => 'Je suis doux comme un bébé !'),
        array('img' => 'filip_barro.jpg','lastname' => 'Barro','firstname' => 'Filip','age' => '27', 'postal' => '45876', 'infos' => 'Salut çà farte ?'));
    $array['femme'] = array(
        array('img' => 'lora_blue.jpg','lastname' => 'Blue','firstname' => 'Lora','age' => '19', 'postal' => '98546', 'infos' => 'Dispo pour tout!'),
        array('img' => 'anna_napolita.jpg','lastname' => 'Napolita','firstname' => 'Anna','age' => '24', 'postal' => '75000', 'infos' => 'Mes amies m\'appelle la cascade !'),
        array('img' => 'kristen_jess.jpg','lastname' => 'Jess','firstname' => 'Kristen','age' => '25', 'postal' => '54896', 'infos' => 'Promis je ne mord pas, enfin presque !'),
        array('img' => 'enora_lips.jpg','lastname' => 'Lips','firstname' => 'Enora','age' => '45', 'postal' => '12589', 'infos' => 'Zéro-six ~ 35 ~ Neuf-Un ~ 87 ~ Quatre-Deux ~ J\'ai envie'));
    $array['androgyne'] = array(
        array('img' => 'tilda_swinton.jpg','lastname' => 'Swinton','firstname' => 'Tilda','age' => '60', 'postal' => '75000', 'infos' => 'Salut je joue l\'ancien dans Doctor Strange et la méchante dans Narnia !'),
        array('img' => 'eliott_sailors.jpg','lastname' => 'Sailors','firstname' => 'Elliott','age' => '33', 'postal' => '98456', 'infos' => 'Je suis modèle photo'));
    $json = json_encode($array);
    file_put_contents('../assets/json/lovers.json',$json);
}
?>