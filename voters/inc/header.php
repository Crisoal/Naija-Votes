<?php 
    session_start();
    require_once("../../admin/inc/config.php");

    if($_SESSION['key'] != "VotersKey")
    {
        echo "<script> location.assign('../../admin/inc/logout.php'); </script>";
        die;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voters Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="stylesheet" href="../../user/css/dash.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row bg-black text-white">
            <div class="col-1"> 
                <img src="../../user/img/63f9d69b32da6.jpg" width="80px"/>
            </div>
            <div class="col-11 my-auto">
                <h3> NAIJA VOTING SYSTEM  - <small> Welcome  <?php echo $_SESSION['username']; ?></small> </h3>
            </div>
        </div>

 





