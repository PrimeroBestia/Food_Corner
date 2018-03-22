

    
    
   <section class="slideshow-container">
                <div class="mySlides fade">
                    <img src="assets/FoodC/img/3.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="assets/FoodC/img/4.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="assets/FoodC/img/5.jpg" style="width:100%">
                </div>

        <br>

            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="assets/FoodC/img/1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h5>Guarantee Fresh Ingredients</h5>
                        <div class="contact-content">
                            <span>You can call us on:</span>
                            <h6>+ 1234 567 8910</h6>
                        </div>
                        <span>or</span>
                        <div class="primary-white-button">
                            <a href="<?php echo site_url('/RecipeBook/index');?>" class="scroll-link" data-id="book-table">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="assets/FoodC/img/2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-food">
        <div class="container">
            <div class="row">
                <div class="heading">
                    <h2>Weekly Featured Food</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Philippines</h2>
                        <img src="assets/FoodC/img/champo.jpg" alt="">
                        <div class="text-content">
                            <h4>Champorado</h4>
                            <p>The Filipino Champorado originated from Mexico, from its popular hot chocolate drink, Champurrado. Champorado is a chocolate lover’s dream. It’s rich, decadent, sweet, and a mild nutty. Nutty? That’s because the rice brings out a certain nuttiness to the porridge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Japan</h2>
                        <img src="assets/FoodC/img/omu.jpg" alt="">
                        <div class="text-content">
                            <h4>Omurice</h4>
                            <p>Omurice (オムライス) is a loanword from both Omelette (omuretsu, オムレツ) and Rice (raisu, ライス). In this recipe, fried rice is seasoned with sweet and sour flavor of ketchup and tomato puree, and tucked inside a thin blanket of golden fluffy omelette.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="food-item">
                        <h2>Korea</h2>
                        <img src="assets/FoodC/img/bulgogi.jpg" alt="">
                        <div class="text-content">
                            <h4>Bulgogi</h4>
                            <p>Bulgogi (/bʊlˈɡoʊɡiː/ buul-GOH-ghee; from Korean bul-gogi), literally "fire meat", is a gui (Korean-style grilled or roasted dish) made of thin, marinated slices of beef or pork grilled on a barbecue or on a stove-top griddle.</p>
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