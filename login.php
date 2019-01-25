<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">
	<link rel="stylesheet" href="materialize/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="materialize/js/materialize.min.js"></script>
	<style>
		html, body, h1, h2, h3, h4, h5 {font-family: "Raleway", sans-serif}
	</style>
</head>
<body>
	<div class="w3-bar w3-top w3-white w3-xlarge" style="z-index:4">
		<span class="w3-bar-item w3-right"><img src="image/logoFix.png" class="w3-round w3-right" style="width:20%"></span>
	</div> 

	<div class="w3-container w3-display-middle w3-col l6 m8" style="padding-top:100px;">
		<div class="w3-container w3-black w3-card-2">
			<h2><i class="fa fa-user w3-margin-right"></i>Login Admin</h2>
		</div>

		<div class="w3-container w3-white w3-padding-16 w3-card-2">
			<form action="login_proses.php" method="post">
					<div class="w3-row-padding" style="margin:0 -16px;">
						<div class="w3-half w3-margin-bottom">
							<label>Username</label>
							<input class="w3-input w3-border" type="text" placeholder="username" required name="username">
						</div>
					</div>
					<div class="w3-row-padding" style="margin:8px -16px;">
						<div class="w3-half w3-margin-bottom">
							<label>Password</label>
							<input class="w3-input w3-border" type="password" placeholder="password" required name="password">
						</div>
					</div>
					<button class="w3-btn w3-black" type="submit">Login</button>
			</form>
		</div>

		<div class="w3-container w3-black w3-center w3-card-2">
			<h6>Don't Have Account?	|<a href="#" class="w3-button">Please Sign Up</a></h6>
		</div>
	</div>

</body>
</html>