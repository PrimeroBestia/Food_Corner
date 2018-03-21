
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Food Corner</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/fontAwesome.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/templatemo-style.css') ?>">
        <link rel="shortcut icon" href="../favicon.ico">
        
        <div class="header">
            <nav class="navbar navbar-inverse" role="navigation">
                <div id="logo-nav">
                    <img src="assets/FoodC/img/logo-nav.png" alt="">
                </div>
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo site_url('/RecipeBook/index');?>">Recipe Book</a></li>
                        <li><a href="<?php echo site_url('/AboutUsView/index');?>">About Us</a></li>
                        <li><a href="<?php echo site_url('/cart');?>">MyCart</a></li>
                        <li><a href="<?php echo site_url('/ProfileView/index');?>">My Profile</a></li>
                        <li><div class="logout"><a href="<?php echo site_url('/LogOut/index')?>" class="btn-logout">Log Out</a></div></li>
                    </ul>
                    
                </div>
                <!--/.navbar-collapse-->
                
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->

    </head>

<body>
    <div>
    <?php if(isset($_SESSION['alert'])): ?>
        <?php echo '<p class = "alert alert-success">'.$_SESSION['alert'].'</p>';$_SESSION['alert']=NULL;?>
    <?php endif;?>