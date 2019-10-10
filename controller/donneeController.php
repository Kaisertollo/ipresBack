
<?php
require_once '../model/modelDonnee.php';
if (isset($_GET['methods']))
{
    extract($_GET);
    switch ($methods) 
    {
        case "showByID":
            echo showByID($args);
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
}
function showByID($args)
{
	
	$donneeAvecEmployeurs = getDonneeByIdEmployeur($args);
    return json_encode($donneeAvecEmployeurs);
}

?>
