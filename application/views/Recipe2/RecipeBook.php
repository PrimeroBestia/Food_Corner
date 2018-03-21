
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/demo.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/style_common.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Recipe/css/style5.css'); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <div class= "container">
        	<br /><br />
            <h1>Recipes</span></h1>
            <div class="main">
                <?php foreach($regions as $region): ?>
                    <div class="view view-fifth">
                        <img src="<?php echo base_url($region['region_photo']); ?>" />
                        <div class="mask">
                            <h2><?php echo $region['region_name']; ?> Dishes</h2>
                            <p><?php echo $region['region_description']; ?> </p>
                            <a href="<?php echo site_url('/regions/region/'.$region['region_id']);?>" class="info">View Dishes</a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div><br /><br /><br />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
