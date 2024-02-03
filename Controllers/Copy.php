<?php
include('../vendor/autoload.php');
use Src\Classes\Delivery as Manager;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include('../classes/Delivery.php');
    $array_names        = $_FILES['files']['name'];
    $array_tmp_names    = $_FILES['files']['tmp_name'];
    $array_full_path    = $_FILES['files']['full_path'];
    $array_size         = $_FILES['files']['size'];
    $array_error        = $_FILES['files']['error'];

    $array_ext          = $_POST['extensions'];
    $array_ext = explode(",",$array_ext);

    $manager = new Manager();
    $response = $manager->separate($array_tmp_names, $array_names, $array_ext);
    
    echo json_encode($response);

}