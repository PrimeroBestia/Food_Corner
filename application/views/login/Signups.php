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
        <div class="container">
                <div class="clr"></div>
    <body>
        <div class="container">
		<header>
		<br />
		<br />
		</header>
            <section>
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('login/register');?>
                                <h1> Sign up </h1>
                                    <label for="usernamesignup" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="username"  type="text" placeholder="Username" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" > Email</label>
                                    <input id="emailsignup" name="email"  type="email" placeholder="john@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup" name="password"  type="password" placeholder="*********"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="cpassword"  type="password" placeholder="*********"/>
                                </p>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Phone</label>
                                    <input id="usernamesignup" name="phone"  type="text" placeholder="0999-999-9999" />
                                </p>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Address</label>
                                    <input id="usernamesignup" name="caddress"  type="text" placeholder="123 Layo St. Daan District, Manila, Philippines" />
                                </p>
                                <p class="signin button">
									                         <input type="submit" value="Sign up"/>
								                                 </p>
                                                      <?php echo form_close();?>
                                                      <p class="change_link">
                      									              Already a member?
                      									              <a href="LoginView" class="to_register"> Log in </a>
                      								                </p>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
