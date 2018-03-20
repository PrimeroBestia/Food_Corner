<!DOCTYPE html>
<html>
<head>
	<title>FOOD CORNER</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
	 <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

	<div class="banner">
      <div class="side">
        <h3 class="displayname">User's Name</h3>
        <ul class="sidemenu">
          <li><a href="<?php echo site_url('/ProfileView/myaccount');?>">My Account</a>
              <ul>
                <li><a href="<?php echo site_url('/ProfileView/profile');?>">Profile </a></li>
                <li><a href="<?php echo site_url('/ProfileView/bankcards');?>">Bank & Cards</a></li>
                <li><a href="<?php echo site_url('/ProfileView/addresses');?>">Addresses</a></li>
                <li><a href="<?php echo site_url('/ProfileView/changepw');?>">Change Password</a></li>
              </ul>
          </li>
          <li><a href="<?php echo site_url('/ProfileView/mypurchase');?>">My Purchase</a></li>
          <li><a href="<?php echo site_url('/ProfileView/mycart');?>">My Cart</a></li>
        </ul>
      </div>

			<div class="content">
				<h4 class="msl">Shopping Cart</h4>
				 	<div class="page">
     				 	<table class="cart">
     				 		<thead>
       						   <tr>
    								<th class="first">Product</th>
  						          	<th class="second">Unit Price</th>
   						         	<th class="third">Quantity</th>
  						         	<th class="fourth">Total Price</th>
            						<th class="fifth">Actions</th>
          						</tr>
      		  				</thead>

      		  				<tbody>
  								<tr class="productitm">
   									<td><img src="img/cook_lunch.png" class="sample-product"></td>
    								<td>₱ 200.00</td>
    								<td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
    								<td>₱ 200.00</td>
   									<td><a href="">Remove</a></td>
  								</tr>
  								<tr class="productitm">
   									<td><img src="img/cook_breakfast.png" class="sample-product"></td>
    								<td>₱ 200.00</td>
    								<td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
    								<td>₱ 200.00</td>
   									<td><a href="">Remove</a></td>
  								</tr>
  								<tr class="productitm">
   									<td><img src="img/cook_dinner.png" class="sample-product"></td>
    								<td>₱ 200.00</td>
    								<td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
    								<td>₱ 200.00</td>
   									<td><a href="">Remove</a></td>
  								</tr>
						</table>
					</div>
			</div>
	</div>

</body>
</html>