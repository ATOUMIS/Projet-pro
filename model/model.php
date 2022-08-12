<?php

function modifierplayer($nom, $prenom, $id){
    require "./bdd.php";
    $req = $pdo->prepare("UPDATE joueurs SET nom = ?, prenom = ? where id = ?");
    $req->execute(array( $nom, $prenom, $id));

}

function fetchjoueur(){
    require './bdd.php';
    $req = $pdo->prepare('SELECT * FROM joueurs LIMIT 10');
    $req->execute();
    $joueurs = $req->fetchAll();
    return $joueurs;
}

function fetchPlayer($id){
    require './bdd.php';
    $req = $pdo->prepare('SELECT * FROM joueurs WHERE id = ?');
    $req->execute([$id]);
    $joueur = $req->fetch();
    return $joueur;
}

function supprimerplayer($id){
    require './bdd.php';
    $req = $pdo->prepare('DELETE FROM joueurs WHERE id = ?');
    $req->execute([$id]);
    
}

?>