<?php

include './head.php';

?>


   

<form action="./insert_info_user_exe.php" method="POST">

<label for="username">Nom d'utilisateur :</label>
<input type="text" name="username" id="usname" required>

<label for="nom">Nom :</label>
<input type="text" name="nom" id="usname" required>


<label for="prenom">Prénom :</label>
<input type="text" name="prenom" id="prename" required>

<label for="user_pass">Mot de passe :</label>
<input type="password" name="user_pass" id="uspass" required>

<label for="confirm_pass">Confirmez le Mot de Passe :</label>
<input type="password" name="confirm_pass" id="confpass" required>



<button type="submit">S'inscrire</button>
</form>
