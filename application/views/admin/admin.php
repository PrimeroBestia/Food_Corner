<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://localhost/Food_Corner/assets/Admin/css/bootstrap.min.css" >
    <link rel="stylesheet" href="http://localhost/Food_Corner/assets/Admin/css/style.css" >
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">FOODCORNER</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url('/AdminView');?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('/AdminView/delivery');?>">Delivery</a></li>
            <li><a href="<?php echo site_url('/AdminView/recipe');?>">Recipe</a></li>
            <li><a href="<?php echo site_url('/AdminView/users');?>">Users</a></li>
            <li><a href="">Region</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a>Welcome Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard </h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo site_url('/AdminView');?>" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="<?php echo site_url('/AdminView/delivery');?>" class="list-group-item"> Delivery </a>
              <a href="<?php echo site_url('/AdminView/recipe');?>" class="list-group-item"> Recipe </a>
              <a href="<?php echo site_url('/AdminView/users');?>" class="list-group-item"> Users </a>
              <a href="" class="list-group-item">Region</a>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2>200 </h2>
                    <h4>Pending Orders</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2>200 </h2>
                    <h4>Current Recipes</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2>200 </h2>
                    <h4>Number of Users</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2> 200</h2>
                    <h4>Total Profit</h4>
                  </div>
                </div>


              </div>
            </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright &copy; 2018 Food Corner</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://localhost/Food_Corner/assets/Admin/js/bootstrap.min.js"></script>
  </body>
</html>
