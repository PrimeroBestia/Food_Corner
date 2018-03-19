<!DOCTYPE html>
<html>
<head>
	<title>FOOD CORNER</title>
	<link rel="stylesheet" type="text/css" href="assets/User/css/user.css">
	 <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="assets/User/img/logo.png">
			</div>
			<ul class="nav-main">
				<li><a href="<?php echo base_url();?>">HOME</a></li>
				<li><a href="">ORDER NOW</a></li>
				<li><a href="<?php echo site_url('/RecipeBook/index');?>">RECIPE BOOK</a></li>
				<li><a href="<?php echo site_url('/AboutUsView/index');?>">ABOUT US</a></li>
				<li><a href="" class="nav-item">USER</a>
					<div class="nav-content">
						<div class="nav-sub">
							<ul>
								<li><a href="myaccount.html">My Account</a></li>
								<li><a href="mypurchase.html">My Purchase</a></li>
								<li><a href="mycart.html">My Cart</a></li>
								<li><a href="">Log Out</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>

	<div class="banner">
			<div class="side">
				<h3 class="displayname">User's Name</h3>
				<ul class="sidemenu">
					<li><a href="myaccount.html">My Account</a>
							<ul>
								<li><a href="profile.html">Profile </a></li>
								<li><a href="bankcards.html">Bank & Cards</a></li>
								<li><a href="addresses.html">Addresses</a></li>
								<li><a href="changepw.html">Change Password</a></li>
							</ul>
					</li>
					<li><a href="mp-topay.html">My Purchase</a></li>
					<li><a href="mycart.html">My Cart</a></li>
				</ul>
			</div>


			<div class="content">
				<h2>My Addresses</h2>
				<div class="textalign">
					<h4>You don't have addresses yet</h4>
					<div class="newaddress">
						<a href="#modal-address" class="btn-newaddress">Add New Address!</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	</section>


			<div id="modal-address" class="form-address">
				<div class="popup">
					<a class="close" href="#">&times;</a>
					<h2>Add A New Address</h2>
				
				<div class="content">
						<input type="text" placeholder="first name">
						<input type="text" placeholder="first name">
						<input type="text" placeholder="first name">

						
			
				</div>
					
				</div>


			</div>


	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright &copy; 2018 Food Corner</p>
                </div>
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>




</body>
</html>