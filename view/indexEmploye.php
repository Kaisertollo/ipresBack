<?php
    $employeurs = getAllEmploye();
?>
<br><br><br><br><br><br>
<table class="tableauPlein1" cellspacing="0" align="center">
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>POSTE</th>
        <th>ENTREPRISE</th>
    </tr>
    <?php
    foreach ($employeurs as $key => $employe) {
        ?>
            <td><?= $employe['nom']?></td>
            <td><?= $employe['prenom']?></td>
            <td><?= $employe['poste'] ?></td>
            <?php
                $ent  = getIdEmployeurById($employe['idEmployeur']);
             ?>
             <td><a href="/ipres/view/indexIpres.php?view=Donnee&id=<?= $ent['id'] ?>" id="List-Emp"><?= $ent['nomEtrp'] ?></a></td>
        </tr>
        <?php
    } ?>
</table>
<br>
<?php
if (isset($_GET['ok'])){
    if ($_GET['ok'] == '1') {
        ?>
        <script src="/ipres/asset/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("Les Données ont été créer avec succès !!");
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
