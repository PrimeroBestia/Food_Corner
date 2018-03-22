
<!DOCTYPE html>
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

    </head>

<body>

    <section class="aboutus-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="aboutus-item">
                        <img src="<?php echo base_url('assets/img/bg1L.jpg');?>" alt="">
                        <div class="date">13 Jan 2018</div>
                        <div class="down-content">
                            <h4>Food Corner</h4>
                            <span>Branding / Admin</span>
                            <p>FOOD CORNER is a website designed to innovate the food delivery industry. This website allows registered customers/users to choose a recipe of they desire to learn from a wide variety of cuisines originating from different regions of the world. The website also offers aid in learning these recipes by giving the customer the ability to purchase a package of ingredients corresponding to the recipe of their choosing right to their doorstep, each ingredient being measured, fresh, and ready to cook.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Signup for our newsletters</h2>
                    </div>
                </div>
            </div>
            <form id="contact" action="" method="get">
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required="">
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        <fieldset>
                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>

	
	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 4000); // Change image every 3 seconds
		}
	</script>

</body>
</html>
