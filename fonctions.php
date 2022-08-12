<?php
function joueurHTML($joueur){

    return <<<HTML
    <a id="linkrank" href="./fichejoueur.php?id=$joueur->id"><div class="containerplayer">

            <div id="firstrow" class="firstrow$joueur->team">

                <div id="secondrow" class="secondrow$joueur->team">

                    <div id="thirdrow" class="thirdrow$joueur->team">

                        <div class="joueur">
                            <img class="id-photo" src="./copyimage/$joueur->photo" alt="photo joueur">
                            <div class="nameandco">
                                <p>$joueur->equipe | #$joueur->numero | $joueur->poste<p class="team $joueur->team none">$joueur->team</p></p>
                                <h1>$joueur->prenom<h1>
                                <h1>$joueur->nom</h1>
                            </div>
                            <img class="logoteam" src="./copyimage/$joueur->logoequipe" alt="">
                        </div>


                    </div>

                </div>

            </div>

        </div>

        <div class="containerplayer2">
            <div class="stats$joueur->team">

                <div class="stats2">
                    <p>Matchs</p>
                    <p><strong>$joueur->nbdematch</strong></p>
                </div>

                <div class="stats2">
                    <p>Pts/m</p>
                    <p><strong>$joueur->ptparmatch</strong></p>
                </div>

                <div class="stats2">
                    <p>Pass/m</p>
                    <p><strong>$joueur->passparmatch</strong></p>
                </div>

                <div class="stats2">
                    <p>Rbds/m</p>
                    <p><strong>$joueur->rebparmatch</strong></p>
                </div>

            </div>
            
        </div>
        <br>
</a>
HTML;
}




function classementjoueurs($joueurs){
    $pointparmatchs = [];
    $passparmatchs = [];
    $rebondparmatchs = [];
    $totals = [];
    foreach($joueurs as $joueur) {
        $pointparmatchs[$joueur->nom] = $joueur->ptparmatch;
        $passparmatchs[$joueur->nom] = $joueur->passparmatch;
        $rebondparmatchs[$joueur->nom] = $joueur->rebparmatch;
        $totals[$joueur->nom] = 0;
    }
    arsort($pointparmatchs);
    arsort($passparmatchs);
    arsort($rebondparmatchs);
    $alls = [$pointparmatchs, $passparmatchs, $rebondparmatchs];
    foreach($alls as $all){
        $i=10;
        foreach($all as $key => $x){
            $totals[$key] += $i;
            $i--;
        }
    }
    arsort($totals);
    return $totals;
}


?>