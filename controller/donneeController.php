
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
        case "getD":
            echo getD($args);
            break;
        case "edit":
            echo edit(array_values($_POST));
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
function getD($id)
{
    return json_encode(getDonnee($id));
}
function edit($arr)
{
    return json_encode(updateDonnee($arr));
}


?>
