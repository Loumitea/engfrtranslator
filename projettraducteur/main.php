<?php
//ceci est le fichier qui contiendra un truc qui s'appelle le "contrôleur principal" ;
include 'functions.php';

$result = null; //variable qui stockera le résultat de la traduction

if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
    $word = isset($_POST['word']) ? trim($_POST['word']) : '';
    $direction = isset($_POST['direction']) ? $_POST['direction'] : '';

    $result = translate($word, $direction);
}

include 'vue.phtml';
?>