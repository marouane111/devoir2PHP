<?php 
	$msg='';
	$msgClass='';
	$password= isset($_POST['password']) ? $_POST['password'] : NULL;
	$email= isset($_POST['email']) ? $_POST['email'] : NULL;
	$smp="";
	if(isset($_POST['submit'])){
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);


	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<br><div class="container">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>';
	}else{
    	$smp="authentification.php";
	}	
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Website</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
</head>
<body><br>
	<form class="container" method="post" action="authentification.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>