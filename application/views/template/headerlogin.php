
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Food Corner</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/fontAwesome.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/hero-slider.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/owl-carousel.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/FoodC/css/templatemo-style.css'); ?>">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <div class="header">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Welcome">Home</a></li>
                        <li><a href="">Order Now</a></li>
                        <li><a href="RecipeBook">Recipe Book</a></li>
                        <li><a href="AboutUsView">About Us</a></li>
                        <li><a href="">MyCart</a></li>
                        <li><a href="ProfileView"><?php echo $_SESSION['username'];?></a></li>
                        <li><a href="LogOut">Log Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div>
    </head>

<body>
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php session_destroy();endif;?>