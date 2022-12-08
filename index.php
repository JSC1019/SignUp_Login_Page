<!DOCTYPE html>
<html>
<head>
	<title>Registration Project</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container my-5">
	<div class="row">
		<div class="col-md-6 col-xm-12">

			<form action="signup.php" method="post">
				<h1 class="text-center"> Sign Up</h1>
  <div class="form-group">
    <label for="Username" class="form-label"> Username</label>

    <input type="text" class="form-control" id="username" placeholder="Enter Username"  autocomplete="off" name="username">

  </div>

  <div class="form-group">
    <label for="Password" class="form-label"> Password</label>

    <input type="Password" class="form-control" id="password" placeholder="Enter Password" name="password" autocomplete="off" >
  </div>

  <div class="form-group">
    <label for="cpassword" class="form-label"> Confirm Password</label>

    <input type="password" class="form-control" id="cpassword" placeholder="Enter Password" name="cpassword" autocomplete="off" >
  </div>
  <button type="submit" class="btn btn-success w-100 my-3"name ="signup">Sign UP</button>
</form>
</div>


                                <!--Login Page-->
<div class="col-md-6 col-xm-12">

			<form action="login.php" method="post">
				<h1 class="text-center my-3"> Login Up</h1>
  <div class="form-group">
    <label for="Username" class="form-label"> Username</label>

    <input type="text" class="form-control" id="username" placeholder="Enter Username"  autocomplete="off" name="username">

  </div>

  <div class="form-group">
    <label for="Password" class="form-label"> Password</label>

    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" autocomplete="off">
  </div>

  
  <button type="submit" class="btn btn-dark w-100 my-3" name="login">Login</button>
</form>
</div>











</div>
</div>

</body>
</html>