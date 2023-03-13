<?php
	include_once("function.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
    <style>
		body{
			background-color: #615d8329;
		}
		.col {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%;
			border: rgb(67 137 50 / 11%);
			padding-bottom: 100px;
			margin: 45px 7px;
			padding-top: 30px;
			background: rgb(67 137 50 / 11%);
			border-radius: 10px;
		}
		h1 {
			font-size: 2rem;
			font-family: roboto;
			font-weight: 600;
			color: lightslategrey;
		}
	</style>
    <body>
		<div class="container text-center">
			<div class="row">
				<div class="col">
                    <form method="POST" action="users.php" enctype="multipart/form-data">
						<h1> <?php echo $msg; ?> </h1>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<label for="name" class="input-group-text">Name:</label><br>
								</div>
								<input class="form-control" type="text" id="name" name="name" placeholder="Name" required><br>
							</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="email" class="input-group-text">Email:</label><br>
							</div>
							<input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
						</div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="password" class="input-group-text">Pass:</label><br>
							</div>
							<input class="form-control" type="password" id="password" name="password" placeholder="password" required>
						</div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="image" class="input-group-text">Image:</label><br>
							</div>
							<input class="form-control" type="file" id="profile-picture" name="profile-picture" accept="image/*" required>
						</div>
						<div class="btn float-right login_btn">
							<input type="submit" value="Submit" class="btn btn-outline-dark">
						</div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>