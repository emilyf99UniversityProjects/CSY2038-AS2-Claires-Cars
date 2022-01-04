<!DOCTYPE html>
<html lang = "en"> 
	<head>
		<link rel="stylesheet" href="/styles.css"/>
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: <?php echo $weekdayOpeningHours ?></p>
				<p>Sat: <?php echo $saturdayOpeningHours ?></p>
				<p>Sun: <?php echo $sundayOpeningHours ?></p>
			</aside>
			<img src="/images/logo.png"/>

		</section>
	</header>
		
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/cars.php">Showroom</a></li>
			<li><a href="/about.html">About Us</a></li>
			<li><a href="/contact.php">Contact us</a></li>
			<li><a href="/clairescareers.php">Claire's Careers</a></li>
			<li><a href="/login.php">Admin Login</a></li>
		</ul>
	</nav>

	<img src="/images/randombanner.php"/>
	<main class = "<?php echo $class;?> ">
    	<?php echo $content; ?>
	</main>

	<footer>
		&copy; Claire's Cars 2021
	</footer>
</body>
</html>