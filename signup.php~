<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>demo-signup</title>
</head>
<body>
<!-- process data -->
<?php
$err_username = $err_password = $err_c_password = "";
$username = $password = $c_password = "";
$success = 0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["username"])){
		$err_username = "error: username is required";
	}else{
		$username = pretty_input($_POST["username"]);
		if(!preg_match("/^[\w]*$/", $username)){
			$err_username = "error: username should only contain letter, number, underscore";
		}else{
			$success++;
		}
	}

	if(empty($_POST["password"])){
		$err_password = "error: password is required";
	}else{
		$password = pretty_input($_POST["password"]);
		if(strlen($password)<6){
			$err_password = "error: password should contain at least 6 characters";
		}else{
			$success++;
		}
	}
	
	if(empty($_POST["c_password"])){
		$err_c_password = "error: confirm password is required";
	}else{
		$c_password = pretty_input($_POST["c_password"]);
		if($c_password!=$password){
			$err_c_password = "error: confirm password is different from password";
		}else{
			$success++;
		}
	}

	if(empty($_POST["code"])){
		$err_code = "error: code is required";
	}else{
		$code = pretty_input($_POST["code"]);
		if($code!=1231){
			$err_code = "error: code is wrong";
		}else{
			$success++;
		}
	}
	if($success==4){
		include 'data.php';
	}
}

function pretty_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<!-- page body -->
<h1 class="text-center">Signup</h1>
<br>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-3 control-label">Username</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" placeholder="Username">
			<p class="text-danger"><?php echo $err_username; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-3 control-label">Password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="password" placeholder="Password">
			<p class="text-danger"><?php echo $err_password; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label for="c_password" class="col-sm-3 control-label">Confirm Password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" name="c_password" placeholder="Confirm Password">
			<p class="text-danger"><?php echo $err_c_password; ?></p>
		</div>
	</div>
	<div class="form-group">
		<label for=“code" class="col-sm-3 control-label">Code</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="code" placeholder="Code">
			<p class="text-danger"><?php echo $err_code; ?></p>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-7">
			<button type="submit" class="btn btn-default">Sign up</button>
		</div>
	</div>
</form>
</body>
</html>
