<?php
session_start();
$login =0;
$invalid =0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "connect.php";
    if(isset($_POST['login'])){
        $username= $_POST['username'];
        $password= ($_POST['password']);

        $sql= "SELECT * FROM data where username= '$username' AND password = '$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                //echo"Login Successfull";
            $login =1;
            $_SESSION['username']=$username;
            header("location:welcome.php");
            }else{
                //echo"Username or Password is Incorrect !";
            $invalid=1;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up 
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php
	if($login){
	echo "<div class='alert alert-success' role='alert'>
	Login Successfull
  			</div>";
	}else{
		echo "<div class='alert alert-danger' role=alert' >
		Username or Password is Incorrect !
	  </div>";
	}
	
	?>
</body>
</html>
