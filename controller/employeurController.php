<?php
require_once '../model/modelEmployeur.php';
require_once '../model/modelUser.php';
if (isset($_GET['nomEtrp'])) {
    $client = getEmployeurByNomEtrp($_GET['nomEtrp']);
    if ($client == null){
        header('location:/ipres/view/indexIpres.php?view=rechEtrp&trouve=0');
    }else{
        $_SESSION['client'] = $client;
        header('location:/ipres/view/indexIpres.php?view=rechEtrp&trouve=1');
    }
}
if ($_POST['ajoutEtrp']) {
    extract($_POST);
    if (insererEmployeur($nomEtrp, $adresse, $profil) > 0 && insererUser($nomEtrp, $login, $mdp, $profil) > 0){
        header('location:/ipres/view/indexIpres.php?view=employeur&ok=1');
    }
    else
    {
        header('location:/ipres/view/indexIpres.php?view=employeur&ok=0');
    }
}
?>