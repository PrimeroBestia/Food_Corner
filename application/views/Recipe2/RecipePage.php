
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
				<button type="button" class="btn-addtocart" data-toggle="modal" data-target="#myModal">Add to Cart</button>
				<p>want to try this recipe?</br> order ingredients now!</p>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body">
			        <p>Some text in the modal.</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>
		</div>