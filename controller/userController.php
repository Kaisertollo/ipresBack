<?php
session_start();
require_once '../model/modelUser.php';
if (isset($_POST['connexion']))
{
    extract($_POST);
    $user = verifierConnexion($login, $mdp);
    if($user != null)
    {
        $_SESSION['profil'] = $user['profil'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['idUser'] = $user['id'];
        header('location:/ipres/view');
    }
    else
    {
        header('location:/ipres/index.php?connexion=0');
        return;
    }

}
?>
/*if ($_POST['ajoutUser']) {
    extract($_POST);
    if (insererUser($nom, $login, $mdp, $profil) > 0){
        header('location:/ipres/view/indexIpres.php?view=utilisateur&ok=1');
    }
    else
    {
        header('location:/ipres/view/indexIpres.php?view=utilisateur&ok=0');
    }
}
*/