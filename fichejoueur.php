<?php
require 'fonctions.php';
require 'model/model.php';

$id = $_GET['id'];
if(!empty($_POST) AND isset($_POST['modifier'])){
    modifierplayer($_POST['nom'],$_POST['prenom'], $id);
}

if(!empty($_POST) AND isset($_POST['supprimer'])){
    supprimerplayer($id);
    header('location: ./classement.php');
    exit();
}

$joueur = fetchPlayer($id);

require './head.php';
require './navbar.php';

?>

<section class="ficheplayer">

    <div class="ficheplayer2">

        <img id="backgroundplayer" src="./copyimage/<?= $joueur->picback ?>">



        <section id="presentationAll">

            <div id="firstrow" class="firstrow<?= $joueur->team ?>">
                <div id="secondrow" class="secondrow<?= $joueur->team ?>"">
                    <div id=" thirdrow" class="thirdrow<?= $joueur->team ?>">


                    <div id="KKKK">

                        <div id="identification" class="typo<?= $joueur->team; ?>">

                            <img id="photo" src="./copyimage/<?= $joueur->photo; ?>">

                            <div id="cv">
                                <p class="none <?= $joueur->nom?>"></p>
                                <p><?= $joueur->equipe; ?> | #<?= $joueur->numero; ?> | <?= $joueur->poste; ?></p>
                                <h1><?= $joueur->prenom; ?></h1>
                                <h1><?= $joueur->nom; ?></h1>
                                <br>
                                <p>x <?= $joueur->distincnbr1; ?> <strong><?= $joueur->distinc1; ?></strong>.</p>
                                <p>x <?= $joueur->distincnbr2; ?> <strong><?= $joueur->distinc2; ?></strong>.</p>
                            </div>

                        </div>



                        <div id="OOOO">

                            <img id="logoteam" src="./copyimage/<?= $joueur->logoequipe; ?>">

                        </div>

                    </div>

                </div>
            </div>
    </div>

</section>





<form action="" method="POST">

    <label for="nom">Nouveau Nom</label>
    <input type="text" name="nom">

    <label for="nom">Nouveau Prénom</label>
    <input type="text" name="prenom">

    <button type="submit" value="modifier" name="modifier">modifier</button>

</form>

<form action="" method="POST">

<button type="submit" value="supprimer" name="supprimer">supprimer</button>
</form>



















<section id="Allstats<?= $joueur->team; ?>">

    <div id="stat1">

        <div class="statg">
            <p class="statsolo">PPG</p>
            <p class="statsolo"><strong><?= $joueur->ptparmatch; ?></strong></p>
        </div>

        <div class="statg">
            <p class="statsolo">RPG</p>
            <p class="statsolo"><strong><?= $joueur->rebparmatch; ?></strong></p>
        </div>

        <div class="statg">
            <p class="statsolo">APG</p>
            <p class="statsolo"><strong><?= $joueur->passparmatch; ?></strong></p>
        </div>

    </div>

    <div id="stat2">


        <div class="PPPP">
            <div class="statg2">
                <p class="statsolo">TAILLE</p>
                <p class="statsolo"><?= $joueur->taille; ?>m</p>
            </div>

            <div class="statg2">
                <p class="statsolo">POIDS</p>
                <p class="statsolo"><?= $joueur->poids; ?>kg</p>
            </div>
        </div>



        <div class="PPPP">
            <div class="statg2">
                <p class="statsolo">PAYS</p>
                <p class="statsolo"><?= $joueur->pays; ?></p>
            </div>

            <div class="statg2">
                <p class="statsolo">AGE</p>
                <p class="statsolo"><?= $joueur->age; ?> ans</p>
            </div>
        </div>

    </div>

</section>

<br>

<section id="affichagetrophy">

    <div id="nbatrophy">






        <div class="grouptrophy none tro1">

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin1 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin1 ?>2"></div>

            </div>
            <br>
            <div id="containertrophy">

                <img class="trophy" src="./copyimage/trophy.SVG.svg">

            </div>

            <br>

            <p class="trophydate"><strong><?= $joueur->yearswin1 ?></strong></p>

            <br>

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin1 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin1 ?>2"></div>

            </div>

        </div>




        <div class="grouptrophy none tro2">

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin2 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin2 ?>2"></div>

            </div>
            <br>
            <div id="containertrophy">

                <img class="trophy" src="./copyimage/trophy.SVG.svg">

            </div>

            <br>

            <p class="trophydate"><strong><?= $joueur->yearswin2 ?></strong></p>

            <br>

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin2 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin2 ?>2"></div>

            </div>

        </div>



        <div class="grouptrophy none tro3">

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin3 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin3 ?>2"></div>

            </div>
            <br>
            <div id="containertrophy">

                <img class="trophy" src="./copyimage/trophy.SVG.svg">

            </div>

            <br>

            <p class="trophydate"><strong><?= $joueur->yearswin3 ?></strong></p>

            <br>

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin3 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin3 ?>2"></div>

            </div>

        </div>

        <div class="grouptrophy none tro4">

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin4 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin4 ?>2"></div>

            </div>
            <br>
            <div id="containertrophy">

                <img class="trophy" src="./copyimage/trophy.SVG.svg">

            </div>

            <br>

            <p class="trophydate"><strong><?= $joueur->yearswin4 ?></strong></p>

            <br>

            <div class="colorduo">

                <div id="colorone" class="back<?= $joueur->teamwin4 ?>"></div>
                <div id="colortwo" class="back<?= $joueur->teamwin4 ?>2"></div>

            </div>

        </div>



        <p class="champwin none <?= $joueur->champwin ?>"></p>









    </div>

    <br>

</section>



<section id="biographie">

    <p id="biotitle"><strong>Biographie :</strong></p>
    <br>
    <p id="txt"><?= $joueur->biographie ?></p>

</section>

<section id="besttrackrecord">

    <p id="titlebesttrackrecord"><strong><?= $joueur->bestrecord;?></strong></p>
    <br>
    <img id="illu2" src="./copyimage/<?= $joueur->photobestrecord; ?>">

    <p id="txt"><?= $joueur->txtrecord ?></p>

</section>

<section id="lastgame">

    <p id="titlelastgame"><strong>5 derniers matchs :</strong></p>

    <table>
        <tr id="rowstat">
            <th>DATE</th>
            <th>MATCHUP</th>
            <th>W/L</th>
            <th>MIN</th>
            <th>PTS</th>
            <th>REB</th>
            <th>AST</th>
            <th>STL</th>
            <th>BLK</th>
            <th>TOV</th>
        </tr>
        <tr id="rowGone">
            <td><?= $joueur->g1date?></td>
            <td><?= $joueur->matchup1?></td>
            <td><?= $joueur->worl1?></td>
            <td><?= $joueur->min1?></td>
            <td><?= $joueur->pts1?></td>
            <td><?= $joueur->reb1?></td>
            <td><?= $joueur->ast1?></td>
            <td><?= $joueur->stl1?></td>
            <td><?= $joueur->blk1?></td>
            <td><?= $joueur->tov1?></td>
        </tr>
        <tr id="rowGtwo">
            <td><?= $joueur->g2date?></td>
            <td><?= $joueur->matchup2?></td>
            <td><?= $joueur->worl2?></td>
            <td><?= $joueur->min2?></td>
            <td><?= $joueur->pts2?></td>
            <td><?= $joueur->reb2?></td>
            <td><?= $joueur->ast2?></td>
            <td><?= $joueur->stl2?></td>
            <td><?= $joueur->blk2?></td>
            <td><?= $joueur->tov2?></td>
        </tr>
        <tr id="rowGthree">
            <td><?= $joueur->g3date?></td>
            <td><?= $joueur->matchup3?></td>
            <td><?= $joueur->worl3?></td>
            <td><?= $joueur->min3?></td>
            <td><?= $joueur->pts3?></td>
            <td><?= $joueur->reb3?></td>
            <td><?= $joueur->ast3?></td>
            <td><?= $joueur->stl3?></td>
            <td><?= $joueur->blk3?></td>
            <td><?= $joueur->tov3?></td>
        </tr>
        <tr id="rowGfour">
            <td><?= $joueur->g4date?></td>
            <td><?= $joueur->matchup4?></td>
            <td><?= $joueur->worl4?></td>
            <td><?= $joueur->min4?></td>
            <td><?= $joueur->pts4?></td>
            <td><?= $joueur->reb4?></td>
            <td><?= $joueur->ast4?></td>
            <td><?= $joueur->stl4?></td>
            <td><?= $joueur->blk4?></td>
            <td><?= $joueur->tov4?></td>
        </tr>
        <tr>
            <td><?= $joueur->g5date?></td>
            <td><?= $joueur->matchup5?></td>
            <td><?= $joueur->worl5?></td>
            <td><?= $joueur->min5?></td>
            <td><?= $joueur->pts5?></td>
            <td><?= $joueur->reb5?></td>
            <td><?= $joueur->ast5?></td>
            <td><?= $joueur->stl5?></td>
            <td><?= $joueur->blk5?></td>
            <td><?= $joueur->tov5?></td>
        </tr>


    </table>

</section>



<section class="sectionlast <?= $joueur->nbrlastteam ?>">
    <br>
    <p id="titlelastteam"><strong>Last team :</strong></p>
    <br>
    <div class="lastteamspace">

        <div class="oldteam">

            <div class="teamandlogo">
                <h3><?= $joueur->lastteam1 ?></h3>
                <img class="oldlogo" src="./copyimage/<?= $joueur->lastlogo1 ?>">
            </div>
            <img class="oldpic" src="./copyimage/<?= $joueur->lastpic1 ?>">

            <p class="olddate"><?= $joueur->lastdate1 ?></p>

        </div>

        <div class="oldteam">

            <div class="teamandlogo">
                <h3><?= $joueur->lastteam2 ?></h3>
                <img class="oldlogo" src="./copyimage/<?= $joueur->lastlogo2 ?>">
            </div>
            <img class="oldpic" src="./copyimage/<?= $joueur->lastpic2 ?>">
            <p class="olddate"><?= $joueur->lastdate2 ?></p>
        </div>

        <div class="oldteam">

            <div class="teamandlogo">
                <h3><?= $joueur->lastteam3 ?></h3>
                <img class="oldlogo" src="./copyimage/<?= $joueur->lastlogo3 ?>">
            </div>
            <img class="oldpic" src="./copyimage/<?= $joueur->lastpic3 ?>">
            <p class="olddate"><?= $joueur->lastdate3 ?></p>
        </div>

</section>
<br>

</section>



<?php 
require './footer.php';
?>