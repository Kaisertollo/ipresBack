<?php
require_once '../model/modelDonnee.php';
require_once '../model/modelEmployeur.php';
if (isset($_GET['id'])) {
    $donneeAvecEmployeurs = getDonneeByIdEmployeur($_GET['id']);
    //getLastDonneeByIdEmployeur($idEmp)
    echo json_encode($donneeAvecEmployeurs);
}
else
{
    $idEntr = getIdEmployeurByName($_SESSION['nom']);
    $donneeAvecEmployeurs = getDonneeByIdEmployeur($idEntr['id']);

}
//var_dump($donneeAvecEmployeurs);
?>

