	<?php
	$user=0;
	$success=0;
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		include("connect.php");
		if(isset($_POST['signup']))
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$cpassword = md5($_POST['cpassword']);
		/*
	$sql = "insert into data(username,password) values('$username','$password') ";
	$result = mysqli_query($con,$sql);
	if($result){
		echo "data inserted successfully";
	}else{
		die(mysqli_error($con));
	}


	*/
	$sql = "select *from data where username = '$username'";
	$result = mysqli_query($con,$sql);
	if($result){
		$num = mysqli_num_rows($result);
		//echo $num;


		if($num >0){
			//echo "<h1>Already exists</h1>";
			$user=1;
			}else{
				if($password===$cpassword){
						$sql = "insert into data(username,password) values ('$username','$password')";
						$result = mysqli_query($con,$sql);


					if($result){
					//echo "SignUp Successfull";
					$success = 1;
				}
			}

				else{
					echo "Password did not Match";
					}
			
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
	if($user){
	echo "<div class='alert alert-danger' role='alert'>
	User Already Exists
  			</div>";
	}else{
		echo "<div class='alert alert-success' role=alert' >
		User SignUp Successful
	  </div>";
	}
	
	?>
</body>
</html> 