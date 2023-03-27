<?php include_once("logCheck.php")  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profile</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>

    <style>
		h1 {
			font-size: 4rem;
			font-family: roboto;
			font-weight: 600;
			color: maroon;
		}

        h2 {
			font-size: 3rem;
			font-family: roboto;
			font-weight: 600;
			color: red;
		}

        h3 {
			font-size: 2rem;
			font-family: roboto;
			font-weight: 700;
			color: boolval;
            margin: -45.5px;
		}

	</style>

	<body>
        <!-- Section: Design Block -->
        <section class=" text-center text-lg-start">
            <style>
                .rounded-t-5 {
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
                }

                @media (min-width: 992px) {
                .rounded-tr-lg-0 {
                    border-top-right-radius: 0;
                }

                .rounded-bl-lg-5 {
                    border-bottom-left-radius: 0.5rem;
                }
                }
            </style>
            <div class="card mb-3">
                <div class="row g-0 d-flex align-items-center">
                    <div class="col-lg-4 d-none d-lg-flex">
                        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                        class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body py-5 px-md-5">
                            <?php echo "<h2>Hey</h2><h1>$first_name</h1> <br> <h3>Welcome to your new profile</h3>" ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
</body>
</html>