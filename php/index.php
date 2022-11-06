
<?php  require 'db.php';
session_start();
if(isset($_SESSION['email'])){
   $email= $_SESSION['email'];
    $result =mysqli_query($connect,"SELECT * FROM users WHERE uemail='$email';");
    $user = $result->fetch_assoc();
     if($user['urole']=='Admin'){
        header("location:../admin/index.php");}
           if($user['urole']=='Customer'){
        header("location:../customer/index.php");}
}else{
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Petcare.lk Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/bootstrap.min.js">
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="login-wrap">
			<div class="login-html container-fluid">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
				<label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up">
				<label for="tab-2" class="tab">Sign Up</label>
				<div class="login-form">
					<div class="sign-in-htm">
						<form action="#" method="post">
							<div class="group">
								<label for="user" class="label">Email</label>
								<input name="email" type="text" class="input" >
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input name="password" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Keep me Signed in</label>
							</div>
							<div class="group">
								<input type="submit" name='login' class="button" value="Sign In">
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<a href="#forgot">Forgot Password?</a>
							</div>
							<br>
							<!--<div align="center" class="logo">
								<img src="" width="30%" height="30%">
							</div>	-->
						</form>
					</div>
					<form action="#" method="post">
						<div class="sign-up-htm">
							<div class="group">
								<label for="pass" class="label">Email Address</label>
								<input id="pass" type="text" class="input" name="email" required>
							</div>
							<div class="group">
								<label for="user" class="label">First Name</label>
								<input id="user" type="text" class="input"  name="fname" required>
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass" type="password" class="input" data-type="password"  name="password"required>
							</div>
							<div class="group">
								<label for="user" class="label">Telephone Number</label>
								<input id="user" class="input" type="tel" name="phone" pattern="[0]{1}[0-9]{9}" required>
							</div>
							<div class="group">
								<input type="submit" class="button" value="Sign Up" name='register'>
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<label for="tab-1">Already Member?</a>
							</div>
							<!--<div align="center" class="logo">
								<img src="" width="30%" height="30%">
							</div>	-->
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
<?php } ?>