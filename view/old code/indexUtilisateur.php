<br><br><br><br><br>
<form method="POST" action="/ipres/controller/userController.php" id="userForm" >
    <h1 style="text-align: center">Ajouter un utilisateur</h1>
    <table style="width: 100%" id="table-ajoutUser">
        <tr>
            <td>
                <input type="text" placeholder="NOM de votre structure" name="nom" id="nom" required/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" placeholder="LOGIN" name="login" id="login" required/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" placeholder="MOT DE PASSE" name="mdp" id="mdp" required/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <select class="champsNewC" name="profil">
                    <option selected></option>
                    <option value="admin">admin</option>
                    <option value="employeur">employeur</option>
                </select>
            </td>
        </tr>
    </table>
    <br><br>
    <div><input type="submit" name="ajoutUser" value="Valider" ></div>
</form>
<?php
if (isset($_GET['ok'])){
    if ($_GET['ok'] == '1') {
        ?>
        <script src="/ipres/asset/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("L'Utilisateur a été ajouter avec succès !!");
            })
        </script>
        <?php
    }else{
        ?>
        <script src="/ipres/asset/js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                alert("Echec de l'ajout de l'Utilisateur !!");
            })
        </script>
        <?php
    }
}
?>