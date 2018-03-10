
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
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/normalize.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/demo2.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/component.css'); ?>" />
        <script src="<?php echo base_url('js/snap.svg-min.js'); ?>"></script>

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
                            <li><a href="RecipeBook">Recipe Book</a></li>
                            <li><a href="AboutUsView">About Us</a></li>
                            <li><a href="LoginView">Log In</a></li>
                            <li><a href="SignupView">Sign Up</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
    </head>
<body>
    <div>
    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class = "alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php session_destroy();endif;?>