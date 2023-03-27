<?php include_once("regCheck.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
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
            margin: 62px 197px;
            padding-top: 18px;
            background: rgb(67 137 50 / 11%);
            border-radius: 10px;
        }
		h1 {
			font-size: 2rem;
			font-family: roboto;
			font-weight: 600;
			color: lightslategrey;
		}

        h3 {
			font-size: 2rem;
			font-family: roboto;
			font-weight: 600;
			color: #ed699ac9;
		}

        h12 {
			font-size: 1rem;
			color: red;
		}

	</style>
    <body>
        <form action="login.php">
            <div class="btn float-right login_btn">
                <input type="submit" value="login" class="btn btn-outline-dark">
            </div>
        </form>

		<div class="container text-center">
			<div class="row">
				<div class="col">
                    <form method="POST" action="index.php">
                        <h1>Register Now</h1>

                        <div class="input-group"> <h12><?php echo $inv_first; ?></h12> </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <label for="name" class="input-group-text">First Name:</label><br>
                            </div>
                            <input class="form-control" type="text" id="fName" name="fName" placeholder="First Name"><br>
                        </div>

                        <div class="input-group"> <h12> <?php echo $inv_last; ?> </h12></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <label for="name" class="input-group-text">Last Name:</label><br>
                            </div>
                            <input class="form-control" type="text" id="lName" name="lName" placeholder="Last Name"><br>
                        </div>

                        <div class="input-group"><h12> <?php echo $inv_email, $inv_email_blank; ?></h12> </div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="email" class="input-group-text">Email:</label><br>
							</div>
							<input class="form-control" type="text" id="email" name="email" placeholder="E-mail">
						</div>

                        <div class="input-group"><h12> <?php echo $blank_pass; ?> </h12></div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="password" class="input-group-text">Password:</label><br>
							</div>
							<input class="form-control" type="password" id="password" name="password" placeholder="Password">
						</div>

                        <div class="input-group"> <h12> <?php echo $inv_pass; ?> </h12> </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="password" class="input-group-text">Repet Once:</label><br>
							</div>
							<input class="form-control" type="password" id="cPassword" name="cPassword" placeholder="Repet Password">
						</div>

						<div class="btn float-right login_btn">
							<input type="submit" value="Register" class="btn btn-outline-primary">
						</div>
                        <div class="input-group"> <h3><?php echo $suc_msg; ?></h3> </div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>