
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/Cart/css/custom.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
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
		<?php $total = 0; foreach($carts as $cart): ?>
			<tr class="row ">
				<td class="quantity"><?php echo $cart['amount'];?></td>
				<td class="recipename"><?php echo $cart['r_name'];?></td>
				<td class="popbtn"><a class="arrow" href="<?php echo base_url('cart/delete/'.$cart['r_id']);?>"></a></td>
				<td class="price"><?php $total = $total+$cart['r_price']; echo $cart['r_price'];?></td>
			</tr>
		<?php endforeach;?>
		<tr class="row list-inline columnCaptions">
			<td class="recipename"><br><br>TOTAL:</td>
			<td class="price"><br><br><?php echo $total;?></td>
		</tr>
		
	</table>
	<?php echo form_open('Order/add_order');?>
		<input type = hidden name = "price" value="<?php echo $total;?>">
		<table>
			<select name ="address_id" style="margin-right: 50px; margin-top: 50px; margin-left: -50px;" required>
				<?php foreach($addresses as $address):?>
					<option value="<?php echo $address['address_id']?>"><?php echo $address['address']?></option>
				<?php endforeach;?>
			</select>
			<tr class="row totals">
				<td class="order"><button type="submit" class="btn">CHECKOUT</button></td>	
			</tr>
		</table>
	</form>
</div>
</div>
	
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>
