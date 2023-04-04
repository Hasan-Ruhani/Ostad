
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>BLOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 1px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }



  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }

  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">BLOG</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="blog.php">BLOG</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="#">SERVICES</a></li>
        <li><a href="#">PORTFOLIO</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
	<main>
		<section id="blog-posts">
			<div class="container">
				<h1>BLOG</h1>

				<div class="blog-post">
				<a href="data/post1.php"><h2>Our Village</h2></a>
					<img src="https://cdn.pixabay.com/photo/2023/01/23/17/28/tree-7739243_960_720.jpg" alt="Blog Post Image">
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat quisquam,
						quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi unde
						natusLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat 
						quisquam, quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi 
						unde natusLorem ipsum dolor sit adipisicing elit. Optio laborum provident<a href="data/post1.php">Read more...</a> 
					</p>				
					</div>

				<div class="blog-post">
				<a href="data/post2.php"><h2>Beautiful Tree</h2></a>
					<img src="https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_960_720.jpg" alt="Blog Post Image">
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat quisquam,
						quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi unde
						natusLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat 
						quisquam, quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi 
						unde natusLorem ipsum dolor sit adipisicing elit. Optio laborum provident<a href="data/post2.php">Read more...</a> 
					</p>				
				</div>

				<div class="blog-post">
				<a href="data/post3.php"><h2>Forest Tree</h2></a>
					<img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_960_720.jpg" alt="Blog Post Image">
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat quisquam,
						quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi unde
						natusLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat 
						quisquam, quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi 
						unde natusLorem ipsum dolor sit adipisicing elit. Optio laborum provident<a href="data/post3.php">Read more...</a> 
					</p>			
					</div>

				<div class="blog-post">
				<a href="data/post4.php"><h2>Grass & Folwers</h2></a>
					<img src="https://cdn.pixabay.com/photo/2014/02/27/16/10/flowers-276014_960_720.jpg" alt="Blog Post Image">
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat quisquam,
						quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi unde
						natusLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat 
						quisquam, quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi 
						unde natusLorem ipsum dolor sit adipisicing elit. Optio laborum provident<a href="data/post4.php">Read more...</a> 
					</p>				
				</div>

				<div class="blog-post">
				<a href="data/post5.php"><h2>Colorful Rose</h2></a>
					<img src="https://cdn.pixabay.com/photo/2015/04/19/08/32/rose-729509_960_720.jpg" alt="Blog Post Image">
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat quisquam,
						quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi unde
						natusLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio laborum provident placeat 
						quisquam, quas ratione ipsum libero non sint incidunt quasi deserunt hic nemo a itaque dicta nisi 
						unde natusLorem ipsum dolor sit adipisicing elit. Optio laborum provident<a href="data/post5.php">Read more...</a> 
					</p>				
				</div>
			</div>
		</section>
	</main>
	<?php include_once("footer.php"); ?>
</body>
</html>
