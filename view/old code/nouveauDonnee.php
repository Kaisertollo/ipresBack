<?php
    $nom = "";
    if (isset($_GET['id'])) {
        $emp = getIdEmployeurById($_GET['id']);
        $nom = $emp['nomEtrp'];
    }
 ?>
<div id="container">
    <form action="/ipres/controller/donneeController.php" method="POST">

        <h1 style="text-align: center">Ajouter une donnée</h1><br>

        <label><b>Entreprise * :</b></label>
        <select name="employeur" required="">
            <?php
                echo '<option>'.$nom.'</option>';
             ?>
        </select>        

        <label><b>Année * :</b></label>
        <input type="number" placeholder="Année" name="anne" min="1960" required>

        <label><b>Somme déclarée *:</b></label>
        <input type="number" placeholder="Entrez la somme déclarée" name="sommeDec" id="sommeDec" required>

        <label><b>Somme estimée *:</b></label>
        <input type="number" placeholder="Entrez la somme estimée" min="0" name="sommeEst" required>

        <label><b>Encaissement réel *:</b></label>
        <input type="number" placeholder="Entrez l'encaissement réel" min="0" name="encReel" id="encReel" required>

        <label><b>Effectif *:</b></label>
        <input type="number" placeholder="Effectif" name="effectif" required>

        <label><b>Solde *:</b></label>
        <input type="number" placeholder="Solde" name="solde" id="soldeDonnee" readonly></br></br>

        <input type="submit" id='submitDonne' value='Ajouter'  name="nouvelleDonne">
    </form>

</div>