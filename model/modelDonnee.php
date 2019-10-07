<?php
require_once 'bd.php';

function ajoutDonnee($annee, $somDec, $somEst, $encReel, $solde, $idEmployeur, $effectif)
{
    $lastId = lastInsertIdForTable("donnees");
    $insert = "INSERT INTO donnees VALUES ('$lastId','$annee','$somDec','$somEst','$encReel', '$effectif','$solde',$idEmployeur)";
    global $bd;
    echo "$insert";
    //die();
    $bd -> exec($insert);
    return $bd -> lastInsertId();
}
function getAllDonnee(){
    $sql = "SELECT * FROM donnees";
    global $bd;
    return $bd -> query($sql) -> fetchall();
}
function getAllDonneeAvecEmployeur(){
    $sql = "SELECT Do.*,Emp.nomEtrp FROM donnees Do,employeur Emp WHERE Do.idEmployeur = Emp.id";
    global $bd;
    return $bd -> query($sql) -> fetchall();
}
function getDonneeByIdEmployeur($idEmp)
{
    $sql = "SELECT Do.*,Emp.nomEtrp from donnees Do, employeur Emp WHERE Do.idEmployeur = Emp.id AND Emp.id = '$idEmp' ORDER BY annee DESC";
    global $bd;
    return $bd -> query($sql) -> fetchall();

}
function getLastDonneeByIdEmployeur($idEmp)
{
    $sql = "SELECT annee from donnees Do, employeur Emp WHERE Do.idEmployeur = Emp.id AND Emp.id = '$idEmp' ORDER BY annee DESC";
    global $bd;
    return $bd -> query($sql) -> fetch();

}
function getEncaissementByAnnee($idEmp,$annee)
{
    $sql = "SELECT encReel from donnees Do WHERE Do.annee = '$annee' AND Do.idEmployeur = '$idEmp'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
?>