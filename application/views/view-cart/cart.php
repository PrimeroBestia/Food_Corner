<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
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
		<select style="margin-right: 50px; margin-top: 50px; margin-left: -50px;">
				<option value="ADDRESS">ADDRESS</option>
				<option value="ADDRESS">ADDRESS 1</option>
				<option value="ADDRESS">ADDRESS 2</option>
				<option value="ADDRESS">ADDRESS 2</option>
			</select>
			<select>
				<option value="ADDRESS">PAYMENT</option>
				<option value="ADDRESS">PAYMENT 1</option>
				<option value="ADDRESS">PAYMENT 2</option>
				<option value="ADDRESS">PAYMENT 2</option>
			</select>
			<tr class="row totals">
			<td class="order"><a class="text-center">CHECKOUT</a></td>	
		</tr>
	</table>

	
</div>
</div>
	
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>

</body>
</html>