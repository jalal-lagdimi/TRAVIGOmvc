<?php
$data = new ProductController();
$products = $data->getAllProducts();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="views/css/style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
		<a href="home" class="logo">T-TRAVEL</a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navbar">
            <li><a href="home">Home</a></li>
			<li><a href="tours">Tours</a></li>
			<li><a href="about">About</a></li>
			<li><a href="contact">Contact Us</a></li>
		</ul>
	</header>

	<!--Home section--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>OUR TOURS</h1>
			<p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the world.</p>
			<a href="#" class="home-btn">Let's go now</a>
		</div>
	</section>


   


<!--Package section--->
<section class="package" id="package">
	<div class="title">
		<h2>Top destination</h2>
	</div>

	<div class="package-content">
	<?php foreach($products as $product):?>
		<div class="box">
			<div class="thum">
			<img src="uploads/<?php echo $product['image'];?>">
				
			</div>

			<div class="dest-content">
				<div class="location">
					<h4><?php echo $product['destination'];?></h4>
					<p ><?php echo $product['description'];?>
				</div>
				
				<div class="stars">
					<a href="#"><i class='bx bxs-star'></i></a>
					<a href="#"><i class='bx bxs-star'></i></a>
					<a href="#"><i class='bx bxs-star'></i></a>
					<a href="#"><i class='bx bxs-star'></i></a>
					<a href="#"><i class='bx bxs-star'></i></a>
				</div>
				
			</div>
			<div>
				<p>from <?php echo $product['price'];?> $</p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	<div class="tittle"></div>
</section>

<section>
	<div class="cansl">
		<h2>Free canselation</h2>
		<p>You'll receive a full refund if you  cancel <br>your book at least 30 days  before the trip .</p>
	</div>
</section>


	

	<!--Newsletter--->
	<section class="newsletter">
		<div class="news-text">
			<h2>Newsletter</h2>
			<p>Subscribe For more HTML, CSS, and <br> coding tutorials</p>
		</div>

		<div class="send">
			<form>
				<input type="email" placeholder="Write Your Email" required>
				<input type="submit" value="Submit">
			</form>
		</div>
	</section>

    <!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tours</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Tour</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
						<li><a href="#">info@travigo.com</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ??2022 All rights reserved | Travigo</p>
		</div>
	</section>

    <!--js liks--->
    <script type="text/javascript" src="views/js/script.js"></script>
</body>
</html>