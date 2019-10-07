<?php 
session_start();
	require_once '../model/modelEmployeur.php';
	if (isset($_POST['ajout'])) {
		extract($_POST);
		$idEmp = getIdEmployeurByName($_SESSION['nom']);
		if (insererEmploye($nom, $prenom, $poste, $idEmp['id']) > 0) {
			header('location:/ipres/view/indexIpres.php?view=eff&ok=1');
		}
		else
		{
			header('location:/ipres/view/indexIpres.php?view=eff&ok=0');
		}
	}
 ?>