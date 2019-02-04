<html>
<head>
    <title>Create New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.gogleapis.com/css?family-Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="signup-form">
	    <form action="" method="post">
		    <div class="form-header">
			    <h2>Sign Up</h2>
				<p>Fill out this form and start chatting with your friends!</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Ex: Noah Katana"
				autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="password" 
				autocomplete="off" required>
			</div>
			
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="baba@booey.com"
				autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
				<option disabled="">section 1</option>
				<option>section 2</option>
				<option>section 3</option>
				<option>section 4</option>
				<option>far away from this place</option>
				<option>love place</option>
				<option>graveyard</option>
				<option>spirit land</option>
				</select>
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_gender" required>
				<option disabled="">Select your Gender</option>
				<option>Male</option>
				<option>Female</option>
				<option>Really?</option>
				<option>Masculine Presenting Transgendered Lesbian</option>
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">
				Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
			    <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
			</div>
			<?php include("signup_user.php"); ?>
	    </form>
		<div class="text-center small" style="color: #67428B;"> Already have account? <a href="signin.php">Sign in here</a></div>
	</div>

</body>
</html>