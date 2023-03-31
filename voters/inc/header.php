 <?php 
    session_start();
    require_once("../admin/inc/config.php");

    if($_SESSION['key'] != "VotersKey")
    {
        echo "<script> location.assign('../admin/inc/logout.php'); </script>";
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script src="https://kit.fontawesome.com/4eb0e146e9.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../user/css/dash.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row bg-black text-white">
            <div class="col-1"> 
                <img src="../user/images/63f9d69b32da6.jpg" width="80px"/>
            </div>
            <div class="col-11 my-auto">
                <h3> ONLINE VOTING SYSTEM  - <small> Welcome  <?php echo $_SESSION['username']; ?></small> </h3>
            </div>
        </div>

        <div class="row bg-green">
    <div class="col-12 bg-green">
    <nav class="navbar navbar-expand-lg navbar-light bg-green">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link text-white mr-3" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white mr-3" href="../admin/logout.php">Logout</a>
        </li>
         </ul>
    </div>
    </nav>
</div>
</div>





