<div id="container">
    <form method="POST" action="/ipres/controller/employeController.php" >
        <br>
        <h1 style="text-align: center">Nouveau Employe</h1></br>
        <label><b>Nom * :</b></label>
        <input type="text" class="colon" placeholder="Entrer son nom" name="nom" required><br>
        <label><b>Prénom * :</b></label>
        <input type="text" class="colon" placeholder="Entrer son prénom" name="prenom" required><br>
        <label><b>Poste * :</b></label>
        <input type="text" class="colon" placeholder="Entrer son poste" name="poste" required><br>
        <input type="submit" value="Ajouter" name="ajout">
    </form>
</div>