<?php
require_once 'bd.php';
function getEmployeurByIdDonnee($idDonnee)
{
    $sql = "SELECT Emp.* from employeur Emp, donnee Do where Do.idEmployeur = Emp.id AND Do.id = '$idDonnee'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
function getAllEmployeur($adresse)
{
    $sql = "SELECT nomEtrp,caisseID,ipresID,adresse,id from employeur WHERE adresse = '$adresse' ORDER BY id ASC LIMIT 500 OFFSET 2500";
    global $bd;
    return $bd -> query($sql) -> fetchAll();
}
function getAllEmployeur1()
{
    $sql = "SELECT nomEtrp,caisseID,ipresID,adresse,id from employeur";
    global $bd;
    return $bd -> query($sql) -> fetchAll();
}
/*  
function getAllEmploye()
{
    $sql = "SELECT * from employé ORDER BY idEmployeur";
    global $bd;
    return $bd -> query($sql) -> fetchAll();
} */
function getEmployeByIdEmployeur($id)
{
    $sql = "SELECT * from employé WHERE idEmployeur = $id";
    global $bd;
    return $bd -> query($sql) -> fetchAll();
}
function getIdEmployeurByName($nom)
{
    $sql = "SELECT id from employeur WHERE nomEtrp = '$nom'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
function getIdEmployeurById($id)
{
    $sql = "SELECT * from employeur WHERE id = '$id'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}
function getClientByNomEtrp($nomEtrp)
{
    $sql = "SELECT * from employeur where cni='$nomEtrp'";
    global $bd;
    return $bd -> query($sql) -> fetch();
}

function insererEmployeur($nomEtrp, $adresse,  $profil)
{
    $lastId = lastInsertIdForTable("employeur");

    $insert = "INSERT INTO employeur(id,nomEtrp,adresse,profil) VALUES ($lastId,'$nomEtrp','$adresse','$profil')";
    echo "$insert";
    global $bd;
    $bd -> exec($insert);
    return $bd -> lastInsertId();
}
function insererEmploye($nom, $prenom, $poste, $idEmp)
{
    global $bd;
    $id = lastInsertIdForTable('employé');
    $sql = "INSERT INTO employé VALUES($id, '$nom', '$prenom', '$poste', $idEmp)";
    return $bd -> exec($sql);
}
function setProfil($id,$profil)
{
    global $bd;
    $sql = "UPDATE employeur set profil='$profil' where id=$id";
    return $bd -> exec($sql);
}
?>
