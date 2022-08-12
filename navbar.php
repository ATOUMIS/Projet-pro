<section id="navbar">

    <ul id="navbar2">

        <a class="link" href="./index.php">
            <li>Accueil</li>
        </a>
        <a class="link" href="./pageactualités.php">
            <li>Actualités</li>
        </a>
        <a class="link" href="./pageclassement.php">
            <li>Classement</li>
        </a>


        <?php if(empty($_SESSION['username'])) : ?>
        <a class="link" href="../MVP-TRACKER/insc_log/login.php">
            <li>Connexion</li>
        </a>
        <?php endif; ?>



        <?php if(!empty($_SESSION['username'])) : ?>
        <a class="link" href="./insc_log/deco.php">
            <li>Déconnexion</li>
        </a>
        <?php endif; ?>


        <?php if(!empty($_SESSION['username']) && $_SESSION['user_kind'] == 1) : ?>
        <a class="link" href="./dashboard.php">
            <li>Tableau de bord</li>
        </a>
        <?php endif; ?>


    </ul>

</section>
<br>
<br>