<?php
include "connect.php";

session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>  
    <div class="container">
        <div class"jumbotron">
            <h1 class="display-4 text-center">Welcome  <?php echo $_SESSION['username']?> </h1>


            <p>It our pleasure to have you here!!</p>

<a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
 
</p>
</div>
</div> 

        </body>
</html>