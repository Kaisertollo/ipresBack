<?php
require_once 'bd.php';
function getEmployeurByIdDonnee($idDonnee)
{
    $sql = "SELECT Emp.* from employeur Emp, donnee Do where Do.idEmployeur = Emp.id AND Do.id = '$idDonnee'";
    global $bd;
    return $bd -> query($sql) -> fetch(PDO::FETCH_ASSOC);
}
function getAllEmployeur($adresse)
{
    $sql = "SELECT nomEtrp,caisseID,ipresID,profil,adresse,id from employeur WHERE adresse = '$adresse' ORDER BY id ASC";
    global $bd;
    return $bd -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
}
function getEmployeurByFiltre($adresse,$filtre)
{
    $sql = "SELECT nomEtrp,caisseID,ipresID,profil,adresse,id from employeur WHERE adresse = '$adresse' and profil='$filtre' ORDER BY id ASC";
    global $bd;
    return $bd -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
}
function getAllEmployeur1()
{
    $sql = "SELECT nomEtrp,caisseID,ipresID,adresse,id from employeur";
    global $bd;
    return $bd -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
}
/*  
function getAllEmploye()
{
    $sql = "SELECT * from employé ORDER BY idEmployeur";
    global $bd;
    return $bd -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
} */
function getEmployeByIdEmployeur($id)
{
    $sql = "SELECT * from employé WHERE idEmployeur = $id";
    global $bd;
    return $bd -> query($sql) -> fetchAll(PDO::FETCH_ASSOC);
}

function getIdEmployeurById($id)
{
    $sql = "SELECT * from employeur WHERE id = '$id'";
    global $bd;
    return $bd -> query($sql) -> fetch(PDO::FETCH_ASSOC);
}
function getClientByNomEtrp($nomEtrp)
{
    $sql = "SELECT * from employeur where cni='$nomEtrp'";
    global $bd;
    return $bd -> query($sql) -> fetch(PDO::FETCH_ASSOC);
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
function updateEmployeur($arr)
{
    global $bd;
    $sql = "UPDATE employeur set nomEtrp='$arr[1]',ipresID='$arr[2]',caisseID='$arr[3]',communID='$arr[4]',adresse='$arr[5]' where id=$arr[0]";
    return $bd -> exec($sql);
}
?>
