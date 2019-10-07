<?php
$idEntr = getIdEmployeurByName($_SESSION['nom']);
$employeurs = getEmployeByIdEmployeur($idEntr['id']);

?>
<div class="aligner3">
    <a href="/ipres/view/indexIpres.php?view=nouveauEmploye"><button class="btn-Nv">Nouvelle Employe</button></a>
</div>
<br><br><br><br><br><br><br>
<span id="name-Emp">LISTE DES EMPLOYES DE <?= $_SESSION['nom'] ?></span><br><br>
<table class="tableauPlein1" cellspacing="0" align="center">
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>POSTE</th>
    </tr>
    <?php
    foreach ($employeurs as $key => $employe) {
        ?>
            <td><?= $employe['nom']?></td>
            <td><?= $employe['prenom']?></td>
            <td><?= $employe['poste'] ?></td>
        </tr>
        <?php
    } ?>
</table>
<?php
if (isset($_GET['ok'])){
    if ($_GET['ok'] == '1') {
        ?>
        <script src="/ipres/asset/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("Les Données ont été ajouter avec succès !!");
            })
        </script>
        <?php
    }else{
        ?>
        <script src="/ipres/asset/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("Echec de l'ajout des données !!");
            })
        </script>
        <?php
    }
}
?>
