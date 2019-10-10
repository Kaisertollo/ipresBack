<?php
require_once '../model/modelEmployeur.php';
require_once '../model/modelUser.php';
if (isset($_GET['methods']))
{
    extract($_GET);
    switch ($methods) 
    {
        case "show":
            echo show($args);
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
}
//ipres/controller/employeurController.php?methods=list&args=
//JSON/employeurs/list/Agence
function show($args)
{
    $args = explode("_",$args);
    if($args[1]=='')
    {
        $employeurs = getAllEmployeur($args[0]);
        return json_encode($employeurs);
    }
    else
    {
        $employeurs = getEmployeurByFiltre($args[0],$args[1]);
        return json_encode($employeurs);
    }

    
}

?>