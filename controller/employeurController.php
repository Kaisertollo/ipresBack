<?php
require_once '../model/modelEmployeur.php';
require_once '../model/modelUser.php';
if (isset($_GET['methods']))
{
    extract($_GET);
    //extract($_POST);
    switch ($methods) 
    {
        case "show":
            echo show($args);
            break;
        case "showById":
            echo showByID($args);
            break;
        case "edit":
            echo edit(array_values($_POST));
            break;
        default:
            echo "eeesddsps";
    }
}

//JSON/employeurs/show/arg1_arg2
function show($args){
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
//JSON/employeurs/showById/id
function showById($id){
    return json_encode(getIdEmployeurById($id));
}
function edit($args){
    return updateEmployeur($args);
}

?>