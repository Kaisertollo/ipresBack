<?php
    include 'header.php';
?>
<div id="container">
    <?php
    if(isset($_GET['connexion']) && $_GET['connexion'] == 0)
    {
        echo 'LOGIN OU MOT DE PASSE INCORRECT...';
    }
    ?>
    <form method="POST" action="/ipres/controller/userController.php">
        <br>
        <h1 style="text-align: center">Connexion</h1></br>
        <label><b>Login * :</b></label>
        <input type="text" class="colon" placeholder="Entrer votre Login" name="login" required><br>
        <label><b>Mot de passe *:</b></label>
        <input type="password" class="colon" placeholder="Entrer le mot de passe" name="mdp"><br><br>
        <input type="submit" value="se connecter" name="connexion">
    </form>
</div>
<?php
    include 'footer.php';
?>