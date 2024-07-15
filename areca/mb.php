<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>machines</title>
	<h1></h1>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins',sans-serif;
		}
		body{
			background: sandybrown ;
			display: flex;
			justify-content: center;
			align-items: center;
               flex-direction: column;
			min-height: 100vh;
		}
		body h1{
			text-transform: uppercase;
			letter-spacing: 1px;
			color: black;
		}
		.container{
			width: 100vw;
			display: grid;
			grid-template-columns: repeat(auto-fit,minmax(290px,1fr));
			grid-gap: 20px;
			padding: 20px;
		}
		.container .box{
			position: relative;
			height: 400px;
			box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			border-radius: 10px;
		}
		.container .box::before{
			position: absolute;
			content: "";
			top: 99%;
			left: 0;
			width: 100%;
			height: 90%;
			background-color: red;
			background-image: linear-gradient(360deg,#eb4511 0 %,#b02e0c 74%);
			transition: 0.4s;
		}
		.container .box:hover::before{
			top: 50%;
		}
		.container .box .imgbox{
			width: 100%;
			height: 70%;
		}
		.container .box .imgbox img{
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.container .box h1{
			font-size: 16px;
			position: relative;
		}

		.container .box::hover h1{
			color: white;
		}
		.container .box p{
			font-size: 14px;
			position: relative;
		}



	</style>

</head>
<body>
	<h1>available machineries</h1>
    <div class="container">
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/a5.jpg">

    		</div>
    		<h1>1</h1>
    		<p>areca climber</p>
    		
    	</div>
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/a7.jpg">

    		</div>
    		<h1>2</h1>
    		<p>arecanut dehusker</p>
    		
    	</div>
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/cm.jpg">

    		</div>
    		<h1>3</h1>
    		<p>coloring machine</p>
    		
    	</div>
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/hs.jpg">

    		</div>
    		<h1>4</h1>
    		<p>hand sizer</p>
    		
    	</div>
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/a.jpg">

    		</div>
    		<h1>5</h1>
    		<p>pruning machine</p>
    		
    	</div>
    	<div class="box">
    		<div class="imgbox">
    			<img src="image/gk.jpg">

    		</div>
    		<h1>6</h1>
    		<p>arecanut peeling machine</p>
    		
    	</div>
    	
    </div>


</body>
</html>