<?php

/**
 * CE FICHIER A POUR BUT DE CONNECTER LA BASE DE DONNEMA
 * 
 * @return PDO
 */


function getPdo(){
    $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', 'Neyen-2017', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return  $pdo;
}

?>