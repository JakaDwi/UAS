<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Login</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/stylelogin.css"/>

		
		<link rel="stylesheet" type="text/css" href="gayaloginku.css">

	<style>
		div.background {
			background: url(img/background1.jpg);
			border: 1px solid black;
		}

		div.transbox {
			width: 0px;
			margin: 118px;
			background-color: #ffffff;
			border: 0.5px solid black;
			opacity: 0.6;
			filter: alpha(opacity=60);
		}

		div.transbox auto {
			margin: 0%;
			color: #000000;
		}
	</style>
</head>
	<body>
		<div class="background">
  			<div class="transbox">

				<header>
					<div id="header">
						<div class="container">
							<div class="row">
								<div class="col-md-3">
									<div class="header-logo">
									</div>
								</div>
									<form method = "post" action = "proseslogin.php">
										<div class="kotak_login">
												<p class="tulisan_login">Monggo login Admin</p>		
												<form>
													<label>Username</label>
													<input type="text" name="username" class="form_login" required="Username "> 
													<label>Password</label>
													<input type="password" name="password" class="form_login" required="Password ..">
													<input type="submit" class="tombol_login" value="LOGIN">
													<br/>
												</form>
										</div>
									</form>
								</div>	
							</div>
						</div>
					</div>
				</header>

			</div>
		</div>
</body>
</html>