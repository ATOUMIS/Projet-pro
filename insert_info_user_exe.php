<?php
include './verif.php';

if(empty($_POST['username'])){
    $errors[]= 'Username est vide';
}

elseif(empty($_POST['nom'])){
    $errors[]= 'nom est vide';
}

elseif(empty($_POST['prenom'])){
    $errors[]= 'Prénom est vide';
}

elseif(empty($_POST['user_pass'])<6){
    $errors[]= 'Le mot de passe est vide';
}

elseif(empty($_POST['confirm_pass'])){
    $errors[]= 'Le mot de passe est vide';
}

elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
    $errors[]= 'Le mot de passe est différent';
}


else{
    $username = valid_donnees($_POST['username']);
    $nom = valid_donnees($_POST['nom']);
    $prenom = valid_donnees($_POST['prenom']);

    require "./bdd.php";
    $req = $pdo->prepare("INSERT INTO utilisateurs SET username = ?, nom = ?, prenom = ?, user_pass = ?");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
    $req->execute([$username, $nom, $prenom, $password, $_POST['user_kind']]);
header('location: ./gg.php');
exit();
}

if(!empty($errors)){
    $_SESSION['erreur'] = $errors;
    header('location : ./notgg.php');
}
















































?>