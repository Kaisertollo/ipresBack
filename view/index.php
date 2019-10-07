<?php
session_start();
require_once '../model/modelDonnee.php';
require_once '../model/modelEmployeur.php';

if ($_SESSION == null)
{
    header("location:/ipres/index.php");
}
else
{
    /*include '../topBar.php';
    echo '<div class="container">';
    echo '<br>';*/
    if (isset($_GET['view']))
    {
        switch ($_GET['view'])
        {
            case 'Donnee':
                include 'indexDonneEmp.php';
                break;
            case 'donnee':
                include 'JSON/indexDonnee.php';
                break;
            case 'accueil':
                include 'accueil.php';
                break;
            case 'rechEtrp':
                include 'indexDonneEmp.php';
                break;
            case 'nouvEtrp':
                if(isset($_GET['ok'])){
                    if ($_GET['ok']==1) {
                        echo "Entreprise ajouté avec succés !!!";
                    }else {
                        echo "Erreur !!!";
                    }
                }
                include 'nouvelleEntreprise.php';
                break;
            case 'employeur':
                include 'SelectionAgence.php';
                break;
            case 'selection':
                include 'JSON/indexEmployeur.php';
                break;
            case 'nouveauDonnee':
                if(isset($_GET['ok'])){
                    if ($_GET['ok']==1) {
                        echo "Données ajouté avec succés !!!";
                    }else {
                        echo "Erreur !!!";
                    }
                }
                include_once 'nouveauDonnee.php';
                break;
            case 'utilisateur':
                include 'indexUtilisateur.php';
                break;
            case 'employe':
                include 'indexEmploye.php';
                break;
            case 'nouveauEmploye':
                include 'nouveauEmploye.php';
                break;
            case 'effectif':
                include 'indexEmploye.php';
                break;
            case 'eff':
                include 'listeEmploye.php';
                break;
            default:
                include_once 'erreur.php';
                break;
        }
    }
    else
    {
        include_once 'accueil.php';
    }
    //echo '</div>';

}
?>

<?php
    /*include '../footer.php';*/
?>
