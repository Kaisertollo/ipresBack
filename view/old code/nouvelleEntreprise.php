<div id="container">
    <form action="/ipres/controller/employeurController.php" method="POST">

        <h1 style="text-align: center">Ajouter une entreprise</h1><br>
        <label><b>Nom de l'Entreprise * :</b></label>
        <input type="text" placeholder="Entrer le nom de l'entreprise" name="nomEtrp" required>

        <label><b>Adresse *:</b></label>
        <input type="text" placeholder="Entrer l'adresse de l'entreprise" name="adresse" required>

        <label><b>Profil *:</b></label>
        <select class="champsNewC" name="profil">
                    <option selected></option>
                    <option value="admin">admin</option>
                    <option value="employeur">employeur</option>
                </select>
        <label><b>Login *:</b></label>
        <input type="text" placeholder="Login" name="login" required>

        <label><b>Mot de passe *:</b></label>
        <input type="password" placeholder="Mot de passe" name="mdp" required>

        <input type="submit" id='submit' value='Ajouter' name="ajoutEtrp">
    </form>
</div>
