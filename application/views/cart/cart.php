<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Your shopping cart</h1>
				<p>
					This is <b>FOOD CORNER</b>. A website designed to innovate the food delivery industry. This website allows registered customers/users to choose a recipe of they desire to learn from a wide variety of cuisines originating from different regions of the world. 
				</p>
			</div>


<div class="container text-center">


<div class="col-md-7 col-sm-12 text-center">
	<table>
		<tr class="row list-inline columnCaptions">
			<td class="quantity">QTY</td>
			<td class="recipename">RECIPE NAME</td>
			<td class="price">&emsp;PRICE</td>
		</tr>
		<?php foreach($carts as $cart): ?>
			<tr class="row  ">
				<td class="quantity">1</td>
				<td class="recipename"><?php echo $cart['r_name'];?>bibimbap</td>
				<td class="popbtn"><a class="arrow"></a></td>
				<td class="price"><?php echo $cart['amount'];?>250PHP</td>
			</tr>
		<?php endforeach;?>
		<tr class="row list-inline columnCaptions">
			<td class="recipename"><br><br>TOTAL:</td>
			<td class="price"><br><br>250php</td>
		</tr>
		
	</table>
	<table>
		<tr class="row totals">
			<td class="order"><a class="text-center">CHECKOUT</a></td>	
		</tr>
		<div class="dropdown">
  			<button class="dropbtn">ADDRESS</button>
  				<div class="dropdown-content">
    				<a href="#">Link 1</a>
    				<a href="#">Link 2</a>
    				<a href="#">Link 3</a>
 				</div>
		</div>
		
		<div class="dropdown">
  			<button class="dropbtn">PAYMENT</button>
  				<div class="dropdown-content">
    				<a href="#">Link 1</a>
    				<a href="#">Link 2</a>
    				<a href="#">Link 3</a>
 				</div>
		</div>
	</table>
	
</div>
</div>
	
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

</body>
</html>