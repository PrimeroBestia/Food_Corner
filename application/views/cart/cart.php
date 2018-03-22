<div class = "container">
	<table>
		<tr>
			<td>Recipe Name</td><td>Amount</td>
		</tr>
		<?php foreach($carts as $cart): ?>
			<tr>
				<td><?php echo $cart['r_name'];?></td><td><?php echo $cart['amount'];?></td>
			</tr>
		<?php endforeach;?>
	</table>

	<a href = "<?php echo base_url('order/add_order/');?>">Checkout</a>
</div>