<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
    <meta charset="UTF-8" />
    <title>Food Corner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Log In" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/style2.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/style.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/style1.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/animate-custom.css'); ?>" />
	<script type="text/javascript" src="assets/Login/js/modernizr.custom.86080.js"></script>
    </head>

	 <ul class="cb-slideshow">
        <li><span>Image 01</span></li>
        <li><span>Image 02</span></li>
        <li><span>Image 03</span></li>
        <li><span>Image 04</span></li>
        <li><span>Image 05</span></li>
        <li><span>Image 06</span></li>
    </ul>
    <div class="clr"></div>
    <body>
        <div class="container">
            <section>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <h1>Log in</h1>
                            <?php if($this->session->flashdata('wrong')): ?>
                                <?php echo '<p>'.$this->session->flashdata('wrong').'</p>';?>
                            <?php session_destroy();endif;?>
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('login/logins');?>
                                <p>
                                    <label for="email" class="mail" data-icon="u" >E-mail </label>
                                    <input id="email" name="email" type="email" required placeholder="john@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" type="password" required placeholder="*********" />
                                </p>
                                <!-- <p class="keeplogin">
									                <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									                 <label for="loginkeeping">Keep me logged in</label>
								                </p> -->
                               <p class="login button">
                                   <input type="submit"/>
                                </p>
                            <?php echo form_close();?>
                                            <p class="change_link">
            									Don't have an account?
            									         <a href="<?php echo site_url('/SignupView/index');?>">Sign up</a>
            								</p>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
