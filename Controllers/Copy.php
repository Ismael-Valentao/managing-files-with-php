<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include('../classes/Delivery.php');
    $array_names        = $_FILES['files']['name'];
    $array_tmp_names    = $_FILES['files']['tmp_name'];
    $array_full_path    = $_FILES['files']['full_path'];
    $array_size         = $_FILES['files']['size'];
    $array_error        = $_FILES['files']['error'];

    $delivery = new Delivery();
    $response = $delivery->separate($array_tmp_names, $array_names, ['pdf', 'xls', 'xlsx', 'sql']);
    
    echo json_encode($response);

}