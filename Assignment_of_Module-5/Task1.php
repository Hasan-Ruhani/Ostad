<?php
	include_once("Task3.php");
	include_once("Task2.php");

	if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
		$abc = new MyPerson();
		$abc->setName($_POST["name"]);
		$abc->setEmail($_POST["email"]);
	}

	else{
		$abc = new MyPerson();

		$abc->setName("!..............!");
		$abc->setEmail("!..............!");
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
					<form method="POST">
						<h1>Task-01</h1>
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
						<div class="btn float-right login_btn">
							<input type="submit" value="Submit" class="btn btn-outline-dark">
						</div>
					</form>
				</div>
				<div class="col">
					<h1>Task-02</h1>
					<p> 
						Here a basic php class is created with oop which is called by Person. And the properties and 
						methods that are asked to follow all the properties are followed.
						The output of this project has been displayed bellow.
					</p>
					<h6>
						<?php
							echo "Name: " . $person->getName() . "<br>";
							echo "Email: " . $person->getEmail() . "<br>";
						?>
					</h6>
				</div>
				<div class="col">
					<h1>Task-03</h1>
					<p>
						Here a php script is created which displays below data received from Task-01.
						Here all the conditions mentioned in Task-03 are filled up.
					</p>
					<h6>
						<?php
							echo "Name: " . $abc->getName() . "<br>";
							echo "Email: " . $abc->getEmail() . "<br>";
						?>
					</h6>
				</div>
			</div>
		</div>
    </body>
</html>