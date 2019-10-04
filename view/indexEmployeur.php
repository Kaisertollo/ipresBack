
<?php
    if (isset($_GET['adresse'])){
    $employeurs = getAllEmployeur($_GET['adresse']);
    //print_r($employeurs);
    echo json_encode($employeurs);
}
?>

