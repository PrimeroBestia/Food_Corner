<!DOCTYPE html>
<html lang="en" class="demo-3 no-js">
	<head>
	</head>
	<body>
		<title> Western Dishes </title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/normalize.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/demo2.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/component.css'); ?>" />
		<script src="js/snap.svg-min.js"></script>
		<h1 text align = "center"><?php echo ucfirst($region); ?>ern Dishes</h1>
			<section id="grid" class="grid clearfix">
				<?php foreach($recipes as $recipe):?>
				<a href="<?php echo site_url('recipe/'.$recipe['r_id']);?>" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="<?php echo base_url().$recipe['r_photo'];?>" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2><?php echo $recipe['r_name'];?></h2>
							<button>View Recipe</button>
						</figcaption>
					</figure>
				</a>
				<?php endforeach; ?>
			</section>
			
		</div><!-- /container -->
		<script>
			(function() {
	
				function init() {
					var speed = 300,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
	</body>
</html>