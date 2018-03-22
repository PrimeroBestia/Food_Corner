<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Add Recipe</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/Food_Corner/assets/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Food_Corner/assets/Admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/Admin/css/newstyle.css');?>" rel="stylesheet">
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
            <li><a href="<?php echo site_url('/AdminView');?>">Dashboard</a></li>
            <li><a href="<?php echo site_url('/AdminView/delivery');?>">Delivery</a></li>
            <li class="active"><a href="<?php echo site_url('/AdminView/recipe');?>">Recipe</a></li>
            <li><a href="<?php echo site_url('/AdminView/users');?>">Users</a></li>
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
            <h1>Recipe</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a>Dashboard</a></li>
          <li class="active">Add Recipe</li>
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
              <a href="<?php echo site_url('/AdminView/delivery');?>" class="list-group-item">Delivery</a>
              <a href="<?php echo site_url('/AdminView/recipe');?>" class="list-group-item">Recipe</a>
              <a href="<?php echo site_url('/AdminView/users');?>" class="list-group-item">Users</a>
            </div> 
          </div>
          
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add Recipe</h3>
              </div>
              <div class="panel-body">
                <div class=padd>
                  <form action="" id="repform">
                    <h3>Recipe Title</h3>
                    <input type="text" name="reptitle" size="25" required>
                    <br>
                    <br>
                    <h4>Region</h4>
                    <select name="region">
                      <option value="Eastern">Eastern</option>
                      <option value="Western">Western</option>
                    </select>
                    <br>
                    <br>
                    <h4>Recipe Description</h4>
                    <textarea rows="10" cols="100" name="repdesc" required></textarea>
                    <br>
                    <h4>Recipe Instruction</h4>
                    <textarea rows="10" cols="100" name="repinst" required></textarea>
                    <h4>Ingredients</h4>
                    <br>
                    <select name="ingred">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred2">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred3">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred4">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred5">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred6">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred7">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred8">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred9">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <select name="ingred10">
                      <option>--select ingredient--</option>
                      <option value="patola">PATOLA</option>
                    </select><br><br>
                    <input type="submit" value="ADD RECIPE">
                  </form>
                </div>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright &copy; 2018 Food Corner</p>
    </footer>

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
