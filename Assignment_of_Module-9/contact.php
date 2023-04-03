<?php
$msg = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
    }

    if((!empty($name)) && (!empty($email)) &&  (!empty($subject)) && (!empty($message))){
      $msg = "Thank you for contacting us! We will get back to you as soon as possible.";
  }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>My Blog - Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
  </head>
  <body>
    <?php include_once("header.php"); ?>
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
			color: #3e1f2ac9;
		}

        h12 {
			font-size: 1rem;
			color: red;
		}

	</style>
    <main>
      <div class="container text-center">
			  <div class="row">
				  <div class="col">
              <form method="POST" action="contact.php">
                <h1>Register Now</h1>
                <div class="input-group form-group">
                  <div class="input-group-prepend">
                      <label for="name" class="input-group-text">Name:</label><br>
                    </div>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Name"><br>
                  </div>

						      <div class="input-group form-group">
							      <div class="input-group-prepend">
								      <label for="email" class="input-group-text">Email:</label><br>
							      </div>
							      <input class="form-control" type="email" id="email" name="email" placeholder="E-mail">
						      </div>

                  <div class="input-group form-group">
							      <div class="input-group-prepend">
								      <label for="subject" class="input-group-text">Subject:</label><br>
							      </div>
							      <input class="form-control" type="text" id="subject" name="subject" placeholder="subject">
						      </div>

                  <div class="input-group form-group">
							      <div class="input-group-prepend">
								      <label for="message" class="input-group-text">Message:</label><br>
							      </div>
							      <textarea class="form-control" type="text" id="message" name="message"></textarea>
						      </div>

						      <div class="btn float-right login_btn">
							      <input type="submit" value="Register" class="btn btn-outline-primary">
						      </div>
                  <div class="input-group"> 
                    <h3> <?php echo $msg; ?> </h3>
                </div>
					    </form>
				    </div>
			    </div>
		    </div>
    </main>
  </body>
  <?php include_once("footer.php"); ?>
</html>
