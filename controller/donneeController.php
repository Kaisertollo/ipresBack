<?php
session_start();
require_once '../model/modelDonnee.php';
require_once '../model/modelEmployeur.php';

if(isset($_POST['ajoutDonnee'])){
    extract($_POST);
    $idEmp = insererEmp($nomEtrp, $adresse,  $profil);
    $idGestDonnee = $_SESSION['idUser'];
    $idDonnee = ajoutDonnee($annee, $sommeDec, $somEst, $encReel, $effectif, $solde, $idEmployeur);
}
if (isset($_POST['nouvelleDonne'])) {
	var_dump($_POST);
	extract($_POST);
	$idEmp = getIdEmployeurByName($employeur);
	if (ajoutDonnee($anne, $sommeDec, $sommeEst, $encReel, $solde, $idEmp['id'], $effectif) > 0) {
		header('location:/ipres/view/indexIpres.php?view=Donnee&id='.$idEmp["id"].'');
	}
	else
	{
		header('location:/ipres/view/indexIpres.php?view=Donnee&id='.$idEmp["id"].'');
	}
}
?>
