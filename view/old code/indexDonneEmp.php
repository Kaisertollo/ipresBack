<?php
require_once '../model/modelDonnee.php';
if (isset($_GET['id'])) {
    $donneeAvecEmployeurs = getDonneeByIdEmployeur($_GET['id']);
}
else
{
    $idEntr = getIdEmployeurByName($_SESSION['nom']);
    $donneeAvecEmployeurs = getDonneeByIdEmployeur($idEntr['id']);

}
?>
<br>
<table style="margin-top:5%; margin-left:10%;" id="table-legend">
    <tr>
        <td class="espace-legend"><i class="fas fa-exclamation-triangle" id="img-avr1"></i></td>
        <td class="espace-legend"><p id="p-legende"> L'entreprise n'a ni déclarer ni payer</p></td>
        <td class="espace-legend"><i class="fas fa-exclamation-triangle" id="img-avr2"></i></td>
        <td class="espace-legend"><p id="p-legende"> L'entreprise n'a pas déclarer mais a payer</p></td>
    </tr>
    <tr>
        <td class="espace-legend"><i class="fas fa-exclamation-triangle" id="img-avr3"></i></td>
        <td class="espace-legend"><p id="p-legende"> L'entreprise a déclarer mais n'a pas payer</p></td>
        <td class="espace-legend"><i class="fas fa-exclamation-triangle" id="img-avr4"></i></td>
        <td class="espace-legend"><p id="p-legende"> La somme déclarer est inférieur à l'Encaissement réel</p></td>
    </tr>
    <tr>
        <td class="espace-legend"><i class="fas fa-exclamation-triangle" id="img-avr5"></i></td>
        <td class="espace-legend"><p id="p-legende"> La somme déclarer est superieur à l'Encaissement réel</p></td>
    </tr>
</table>
<br><br>
<table id="listDonnee" cellspacing="0">
    <tr>
        <th>Année</th>
        <th>somme Déclarer</th>
        <th>Somme Estimer</th>
        <th>Encaissement réel</th>
        <th>effectif</th>
        <th>solde</th>
        <th id="alerte">Alertes</th>
    </tr>
    <?php
     foreach ($donneeAvecEmployeurs as $key => $value) {
        echo "<tr>";
        echo '<td>'.$value["annee"].'</td>';
        echo '<td>'.$value["somDec"].'</td>';
        echo '<td>'.$value["somEst"] .'</td>';
        echo '<td>'.$value["encReel"].'</td>';
        echo '<td><a href="#" id="lien-Eff"><button id="btn-Eff">'.$value["effectif"].'</button></a></td>';
        if($value["solde"] < 0){
            echo '<td id="solde">'.$value["solde"].'</td>';
        }else{
            echo '<td id="solde2">'.$value["solde"].'</td>';
        }
        if ($value["somDec"] <= 0) {
            if ($value["encReel"] <= 0) {
                echo'<td><i class="fas fa-exclamation-triangle" id="img-avr1"></i></td>';
            }
            else {
                echo'<td><i class="fas fa-exclamation-triangle" id="img-avr2"></i></td>';
            }
        }else
        {
            if ($value["encReel"] <= 0) {
                echo'<td><i class="fas fa-exclamation-triangle" id="img-avr3"></i></td>';
            }
            else
            {
                if ($value["somDec"] < $value["encReel"]) {
                    if($value["solde"] > 10000){
                        echo'<td><i class="fas fa-exclamation-triangle" id="img-avr4"></i></td>';
                    }else
                    {
                        echo '<td></td>';
                    }
                }
                elseif ($value["somDec"] > $value["encReel"]) {
                    if($value["solde"] < -10000){
                        echo'<td><i class="fas fa-exclamation-triangle" id="img-avr5"></i></td>';
                    }else
                    {
                        echo '<td></td>';
                    }
                }
                else
                {
                    echo '<td></td>';
                }
            }
        }
        echo "</tr>";
    }
    ?>
</table>