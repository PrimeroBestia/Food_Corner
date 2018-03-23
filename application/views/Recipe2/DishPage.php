

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Dish/');?>css/West-East-Dishes.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/Dish/');?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/Dish/');?>css/fontAwesome.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/Dish/');?>css/templatemo-style.css">
	<div>
		<div class="backtowd">
			<a href="<?php echo base_url('RecipeBook/');?>" class="btn-backtowd">Recipe Book</a>
			<a href="<?php echo base_url('regions/region/').$recipe['r_id_region'];?>" class="btn-backtowd1">Back</a>
		</div>
		
		<div class="recipe-container">
			<h1><?php echo $recipe['r_name'];?></h1>
		<p class="country"><?php echo $recipe['region_name'];?> Dish (<?php echo $recipe['r_country'];?>)</p>
			<h3 class="country"><?php echo $recipe['r_type'];?> </h3><br>
			<img src="<?php echo base_url('assets/Recipe/photo/').$recipe['r_photo'];?>">
			<p class="mdtime">Takes <?php echo $recipe['r_time'];?> minutes</p>
			<p class="mdnum">Makes <?php echo $recipe['r_serve'];?> serving</p><br><br>
			<div class="ingredients">
				<h3>Recipe Description</h3>
			<p class="description">
				<?php echo $recipe['r_description'];?>
			</p>
				<h3>Ingredients</h3>
				<ul>
					<?php foreach($ingridients as $ingredient):?>
    					<li><?php echo $ingredient['amount'];?> <?php echo $ingredient['ing_unit'];?> <?php echo $ingredient['ing_name'];?></li>
    				<?php endforeach;?>
				</ul>
			</div>
			<div class="instruction">
				<h3>Instructions</h3>
				<ul>
					<?php echo $recipe['recipe_text'];?>
				</ul>
			</div>

			<p class="recipesource">SOURCE : vikalinka.com</p>

			<div class="addtocart">
                <?php echo form_open('addcart/add_cart/');?>
                    <input type="hidden" name="r_id" value = "<?php echo $recipe['r_id'];?>">
                    <button type = "submit" class="btn-addtocart">Add to Cart</button>
                    <p><label for="quantity">Quantity</label>
                    <input type="number" min="1" name="quantity" value="1"><br><br>
                    Want to try this recipe?</br> order ingredients now!</p>
                </form>
			</div>
		</div>
	</div>
