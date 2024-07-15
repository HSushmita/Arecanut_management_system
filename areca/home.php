<?php
  session_start();
  if(!isset($_SESSION['email'])){
  	header('location:login.html');
 }
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awsome/4.7.0/css/font-awsome.min.css">
<style type="text/css">
	body{
	
	font-size: large;
	margin: 0;
	padding: 0;
	background: url('image/a4.jpg');
	background-size: cover;

}

.dropdwn{
	margin: 0;
}
.dropdwn p{
	color: white;
}

nav{
	height: 60px;
	background: cadetblue;
	box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.logo{
	font-size: 35px;
	font-weight: bold;
	padding: 0 100px;
	line-height: 60px;
}

nav ul{
	padding: 0;
	margin: 0;
	float: right;
	margin-right: 30px;
}

nav ul li{
	display: inline-block;
	list-style: none;

}
nav ul li a{
	background: cadetblue;
	display: block;
	padding: 0 15px;
	color: white;
	text-decoration: none;
	line-height: 60px;
	font-size: 20px;
}

nav ul li a:hover{
	background: #243342;
}

nav ul ul{
	position: absolute;
	top: 60px;
	display: none;
}

nav ul li:hover > ul{
	display: block;
}
nav ul ul li{
	width: 230px;
	float: none;
	display: list-item;
	position: relative;
}
a.active,a:hover{
	border: 1px solid white;

	transition: .5s;
}

ul li a span{
	font-family: fantasy;
	color: darkred;
}

</style>
</head>
	

<body>
<div class="dropdwn">
		

	<nav>
		<label class="logo">VARADA TRADING COMPANY</label>
		<ul>
			<li><a class="active" href="#">Home </a></li>
			
			<li><a href="">services </a>
                <ul>
                
                	<li><a href="mb.php">Machineries</a></li>
                	
                </ul>
			</li>
			<li><a href="wreg.html">workers </a></li>
			<li><a href="contact.html">Contact </a></li>
			
			<li><a href="logout.php">Logout </a></li>
		
		
		
		</ul>
	</nav>
	
	<p>The areca nut (/ˈærɪkə/ or /əˈriːkə/) is the seed of the areca palm (Areca catechu), which grows in much of the tropical Pacific (Melanesia and Micronesia), Southeast and South Asia, and parts of east Africa. It is commonly referred to as betel nut, not to be confused with betel (Piper betle) leaves that are often used to wrap it (a preparation known as paan). The term areca originated from the Malayalam word aṭaykka (അടയ്ക്ക)[1] and dates back to the 16th century when Dutch and Portuguese sailors took the nut from Kerala to Europe. Consumption has many harmful effects on health and is carcinogenic to humans.<br>Various compounds present in the nut, including arecoline (the primary psychoactive ingredient which is similar to nicotine), contribute to histologic changes in the oral mucosa. It is known to be a major risk factor for cancers (squamous cell carcinoma) of the mouth and esophagus. As with chewing tobacco, its use is discouraged by preventive efforts. Consumption by hundreds of millions of people worldwide – mainly with southern and eastern Asian origins – has been described as a "neglected global public health emergency".<br>The areca nut is not a true nut, but rather the seed of a fruit categorized as a berry. It is commercially available in dried, cured, and fresh forms. When the husk of the fresh fruit is green, the nut inside is soft enough to be cut with a typical knife. In the ripe fruit, the husk becomes yellow or orange, and as it dries, the fruit inside hardens to a wood-like consistency. At that stage, the areca nut can only be sliced using a special scissors-like cutter.</p>

	<ul>
		<li>
			<a href="mb.php">
				<span>mechineries</span>
			</a>
		</li>

	</ul>

<footer class="bg-dark text-white pt-5 pb-4">

<div class="container text-center text-mid-left">

	<div class="row text-center text-mid-left">

		<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
			<h5 class="text-uppercase mb-4 font-weight-bold text-warning ">categories</h5>
			<p>
				<a href="#"class="text-white" style="text-decoration: none;">colored areca</a>
      </p>
      <p>    
				<a href="#"class="text-white" style="text-decoration: none;">chali adike</a>
			</p>

		</div>

		<div class="col-md-1 col-lg-2 col-xl-2 mx-auto mt-2">
			<h5 class="text-uppercase mb-4 font-weight-bold text-warning ">address</h5>
			<p>
				<address>Varada Trading Company
					     yellapur
					     Uttara kannada
					      Karnataka
					      581 359   
				</address>
			</p>
		</div>

		<div  class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-2">
			<h5 class="text-uppercase mb-4 font-weight-bold text-warning ">Contact</h5>
			<p>
				<i class="fas fa-home mr-2"></i>Yellapur varada trading co #26
			</p>
			<p>
				<i class="fas fa-phone mr-3"></i>+91 8762200021
			</p>
			<p>
				<i class="fas fa-envelope mr-3"></i>varadaylpr@gmail.com
			</p>


		</div>

	</div>

</div>
</footer>
</div>
<form>
	
</form>

</body>
</html>