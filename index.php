<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUẢN LÍ HỌC SINH</title>
</head>
<body>
    
</body>
</html>
<?php
include "model/config.php";
$db = new dbConfig;
$db->connect();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch ($controller) {
    case 'student':
        require_once('controller/student/index.php');
        break;
    
    default:
        # code...
        break;
}
?>