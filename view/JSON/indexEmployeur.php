<?php
   if(isset($_GET['filtre']))
   {
        $employeurs = getEmployeurByFiltre($_GET['adresse'],$_GET['filtre']);
        echo json_encode($employeurs);
   }
   else if(isset($_GET['adresse']))
   {
        $employeurs = getAllEmployeur($_GET['adresse']);
        echo json_encode($employeurs);
   }
?>

