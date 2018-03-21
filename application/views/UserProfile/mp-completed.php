<!DOCTYPE html>
<html>
<head>
	<title>FOOD CORNER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/UserProfile/user.css'); ?>" />
	 <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>

	<div class="banner">
			<div class="side">
				<h3 class="displayname">username</h3>
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
				</ul>
			</div>

			<div class="up-content">
				<div class="tabs">
					<ul>
						<li><a href="<?php echo site_url('/ProfileView/mp_topay');?>">TO PAY</a></li>
						<li><a href="<?php echo site_url('/ProfileView/mp_toship');?>">TO SHIP</a></li>
						<li><a href="<?php echo site_url('/ProfileView/mp_torecieved');?>">TO RECEIVED</a></li>
						<li><a href="<?php echo site_url('/ProfileView/mp_completed');?>" class="completed">COMPLETED</a></li>
						<li><a href="<?php echo site_url('/ProfileView/mp_cancelled');?>">CANCELLED</a></li>
					</ul>
				</div>

			<div class="down-content">
				<div class="textalign">
					<h4>NO ORDERS YET</h4>
					<div class="ordernow">
						<a href="" class="btn btn-ordernow">Order Now</a>
					</div>
				</div>
			</div>

			</div>
		</div>

	</div>
	</section>

</body>
</html>