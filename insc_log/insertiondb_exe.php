<?php

include './verif.php';

if(!empty($_POST)){
    $errors = [];

    if(empty($_POST['username'])){
        $errors[]= 'Le pseudo est vide';
    }

    elseif(empty($_POST['nom'])){
        $errors[]= 'Le Nom est vide';
    }

    elseif(empty($_POST['prenom'])){
        $errors[]= 'Le prenom est vide';
    }

    elseif(strlen($_POST['user_pass'])<6){
        $errors[]= 'Le mdp est vide';
    }

    elseif(empty($_POST['user_pass'])){
        $errors[]= 'Le mdp est vide';
    }

    elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
        $errors[]= 'Le mdp n\'est pas identique';
    }


    else {
        require "./bdd.php";
        $username = valid_donnees($_POST['username']);
        $nom = valid_donnees($_POST['nom']);
        $prenom = valid_donnees($_POST['prenom']);


        $req = $pdo->prepare("INSERT INTO utilisateurs set username = ?, nom = ?, prenom = ?, user_pass = ?");
        $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
        $req->execute([$username, $nom, $prenom, $password]);
        header('location: gg.php');
    }

exit();  

}

if(!empty($errors)){
    $_SESSION['erreur'] = $errors;
    header('location: notgg.php');
}



?>