<?php
include "header.php";
?>
<nav>
    <span>
         <img src="/ipres/asset/css/img/ipres.png" id="ipreslogo">
    </span>
    <ul class="ulTopbar">
			<div id="topBar" class="topnav">
			    <a href="?view=accueil" class="aBar"><li class="listeTopbar" id="navi">Accueil</li></a>
			    <a href="?view=employeur" <?php if($_SESSION['profil'] == 'employeur'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">listes des Entreprises</li></a>
			    <a href="?view=nouvEtrp" <?php if($_SESSION['profil'] == 'employeur'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">Ajout Entreprise</li></a>
			    <a href="?view=Donnee" <?php if($_SESSION['profil'] == 'admin'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">Données</li></a>
			    <a href="?view=eff" <?php if($_SESSION['profil'] == 'admin'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">Effectif</li></a>
			    <a href="?view=utilisateur" <?php if($_SESSION['profil'] == 'employeur'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">Ajout Utilisateur</li></a>
			    <a href="?view=effectif" <?php if($_SESSION['profil'] == 'employeur'){echo  'hidden';} ?> class="aBar"><li class="listeTopbar" id="navi">Effectifs</li></a>
                <a href="/ipres/controller/userController.php?deconnexion=1" id="deconnexion"><li class="listeTopbar"><button class="btnDeconnexion">DECONNEXION</button></li></a>
			</div>
    </ul>
</nav>
