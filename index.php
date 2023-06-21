<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Myportfolio</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

	<!------------header design ----------->

	<header class="header">
		<a href="#" class="logo">Portfolio</a>

		<i class='bx bx-menu' id="menu-icon"></i>

		<nav class="navbar">
			<a href="#home" class="active">Home</a>
			<a href="#about">About</a>
			<a href="#Services">Services</a>
			<a href="#Portfolio">Portfolio</a>
			<a href="#contact">Contact</a>
		</nav>
	</header>

	<!------------- end header --------->

	<!----------- home section ---------->

	<section class="home" id="home">
		<div class="home-content">
			<h3>Hello, It's Me</h3>
			<h1>Lawrence Muraya</h1>
			<h3>And I'm a <span class="multiple-text">Fullstack Developer</span></h3>
			<p>Hello I'm Lawrence, a passionate Fullstack Developer with a love for crafting web applications.</p>

			<div class="social-media">
				<a href="#"><i class='bx bxl-facebook'></i></a>
				<a href="#"><i class='bx bxl-twitter'></i></a>
				<a href="#"><i class='bx bxl-instagram-alt'></i></a>
				<a href="#"><i class='bx bxl-linkedin'></i></a>
			</div>
			<a href="#" class="btn">Download CV</a>
		</div>
		<div class="home-img">
			<img src="./assets/IMG_7395.jpg" alt="">
		</div>
	</section>

	<!---------- end home -------------->


	<!----------------- about section ---------->

	<section class="about" id="about">
		<div class="about-img">
			<img src="./assets/IMG_7395.jpg" alt="">
		</div>

		<div class="about-content">
			<h2 class="heading">About <span>Me</span></h2>
			<h3>Fullstack Developer</h3>
			<p>I specialize in developing end-to-end solutions that deliver a seamless user experience. From designing and implementing intuitive user interfaces to building robust backend architectures, I thrive on efficient and scalable software solutions. My tech stack includes a wide range of cutting-edge technologies such as HTML5, CSS3, Javascript, React, PHP, and SQL.</p>
			<a href="#" class="btn">Read More</a>
		</div>
	</section>

	<!-------------------------- end about ------------------------->


	<!------------------- services section-------------->

	<section class="Services" id="Services">
		<h2 class="heading">My <span>Services</span></h2>

		<div class="services-container">
			<div class="services-box">
				<i class='bx bx-code-alt'></i>
				<h3>Fullstack Developer</h3>
				<p>Lawrence is a self motivated full-stack Developer with a passion for creating innovative and user-friendly web applications. I have honed my skills in both front-end and back-end development. On the front-end am proficient in HTML, CSS, and Javascript when it comes to back-end am proficient in PHP and MySQL.</p>
				<a href="#" class="btn">Read More</a>
			</div>

			<div class="services-box">
				<i class='bx bxs-data'></i>
				<h3>Database Administrator</h3>
				<p>I am a skilled database administrator that is in managing and optimizing databases with a good understanding on data management principles that is on various database management systems,including MySQL</p>
				<a href="#" class="btn">Read More</a>
			</div>

			<div class="services-box">
				<i class='bx bx-network-chart'></i>
				<h3>Network Administrator</h3>
				<p>I am a dedicated network administrator with a strong background in managing and maintaining computer networks. I have knowledge in network design,troubleshooting, and security. My duty is to ensure smooth operation and optimal performance of network infrastructures.</p>
				<a href="#" class="btn">Read More</a>
			</div>
		</div>
	</section>

	<!----------------------------- services end --------------------->


	<!------------ portfolio section ------------------->

	<section class="portfolio" id="Portfolio">
		<h2 class="heading">Latest <span>Projects</span></h2>

		<div class="portfolio-container">
			<div class="portfolio-box">
				<img src="./assets/2023-06-20.png" alt="">
				<div class="portfolio-layer">
					<h4>Blog website</h4>
					<p>Discover.Explore.Connect</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>

			<div class="portfolio-box">
				<img src="./assets/2023-06-20 (1).png" alt="">
				<div class="portfolio-layer">
					<h4>Online store</h4>
					<p>Shop with style. Unleash your fashion desires.</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>

			<div class="portfolio-box">
				<img src="./assets/2023-06-20 (2).png" alt="">
				<div class="portfolio-layer">
					<h4>University website</h4>
					<p>Nurturing minds. Empowering futures. Unleash your potential with us.</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>

			<div class="portfolio-box">
				<img src="./assets/Capture.PNG" alt="">
				<div class="portfolio-layer">
					<h4>Laptops store</h4>
					<p>Unlock boundless possibilities. Embrace innovation with our laptop haven.
					</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>

			<div class="portfolio-box">
				<img src="./assets/hospital.PNG" alt="">
				<div class="portfolio-layer">
					<h4>Hospital</h4>
					<p>Transforming Healthcare Streamlining Excellence. Empowering Hospital Management.
					</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>

			<div class="portfolio-box">
				<img src="./assets/gym.PNG" alt="">
				<div class="portfolio-layer">
					<h4>GYM</h4>
					<p>Fuel your fitness. Manage your momentum. Empowering Gym Management Solutions.
					</p>
					<a href="#"><i class='bx bx-link-external'></i></a>
				</div>
			</div>
		</div>
	</section>

	<!--------------- contact section --------->

	<section class="contact" id="contact">
		<h2 class="heading">Contact <span>Me</span></h2>

		<form action="#" method="#">
			<div class="input-box">
				<input type="text" name="#" placeholder="Full Name">
				<input type="email" name="#" placeholder="Email Address">
			</div>
			<div class="input-box">
				<input type="number" name="#" placeholder="Mobile Number">
				<input type="text" name="#" placeholder=" Email Subject">
			</div>
			<textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
			<input type="submit" name="" value="Send Message" class="btn">
		</form>
	</section>

	<!--------------------- contact section end ---------->


	<!------------------------------- footer section --------->

	<footer class="footer">
		<div class="footer-text">
			<p>Copyright &copy; 2023 by Lawrence | All Rights Reserved.</p>
		</div>

		<div class="footer-iconTop">
			<a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
		</div>
	</footer>

	<!--------- end of the footer section ---------->
	<script src="https://unpkg.com/scrollreveal"></script>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script src="script.js"></script>
</body>

</html>