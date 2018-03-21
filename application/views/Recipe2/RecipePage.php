
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/West-East-Dishes.css">
		<div class="backtowd">
			<a href="<?php echo base_url();?>RecipeBook" class="btn-backtowd">Recipe Book</a>
		</div>
		
		<div class="recipe-container">
			<h1><?php echo $recipe['r_name'];?></h1>
			<p><?php echo $recipe['r_country'];?></p>
			<img src="<?php echo base_url().$recipe['r_photo'];?>">
			<p class="recipetype"><?php echo $recipe['r_type'];?></p>
			<div class="ingredients">
				<h3>Ingredients</h3>
				<ul>
					<?php foreach ($ingridients as $ingridient): ?>
						<li><?php echo $ingridient['ing_name'];?></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="instruction">
				<h3>Instruction</h3>
				<p><?php echo $recipe['recipe_text'];?></p>
			</div>
			<p class="recipesource">SOURCE : www.allrecipes.com</p>
			<div class="addtocart">
				<button>Add to Cart</button>
				<p>want to try this recipe?</br> order ingredients now!</p>
			</div>
		</div>