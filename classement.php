<?php
require_once './fonctions.php';
require 'model/model.php';
$joueurs = fetchjoueur();
$totals = classementjoueurs($joueurs);
require './head.php';

?>

<section id="presentation">

<div id="container">

<p id="titlerank"><strong>Classement MVP 2022 :</strong></p>

<?php foreach($totals as $key => $total): ?>
    <?php foreach($joueurs as $joueur): ?>
        <?php if($key == $joueur->nom): ?>
            <?= joueurHTML($joueur)?>
        <?php endif; ?>
    <?php endforeach; ?> 
<?php endforeach; ?>



</div>

</section>


    
<?php
require './footer.php';
?>