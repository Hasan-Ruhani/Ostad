<?php include_once("logCheck.php") ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
	<body>
		<section class="h-100 gradient-form" style="background-color: #eee;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-xl-6">
						<div class="card rounded-3 text-black">
							<div class="">
								<div class="">
									<div class="card-body p-md-5 mx-md-4">

										<div class="text-center">
										<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
											style="width: 185px;" alt="logo">
										<h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
										</div>

										<form method="POST" action="login.php">
											<p>Please login to your account</p>

											<div class="form-outline mb-4">
												<?php echo $inv_email, $inv_email_blank; ?>
												<input type="text" id="eamil" name="email" class="form-control" placeholder="Email address">
												<label class="form-label" for="form2Example11">Email</label>
											</div>

											<div class="form-outline mb-4">
												<?php echo $inv_pass; ?>
												<input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
												<label class="form-label" for="form2Example22">Password</label>
											</div>

											<div class="text-center pt-1 mb-5 pb-1">
												<input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="login">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>