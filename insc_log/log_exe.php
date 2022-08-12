<?php


if(!isset($_POST["submit"]))
{
    echo 'remplissage absent';
}
else{require './bdd.php';
    $query = "SELECT * FROM utilisateurs WHERE username = :username LIMIT 1";
    $statement = $pdo->prepare($query);
    $statement-> execute(
        array(
            'username' => $_POST['username']
        )
        );
        $count = $statement->rowcount();
        if($count > 0) {
            
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if(password_verify($_POST['user_pass'], $result['user_pass'])){
                session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['user_kind'] = $result['user_kind'];
                exit(header('location: ../index.php'));
            }else{
                echo 'arf!';
            }

        }
        else{
            echo 'erf';
        }
 
}
?>