<?php include("Config.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo Config::$title ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>      
    <div class="container">
        <header class="jumbotron subhead" id="overview">
          <div class="nav-collapse collapse pull-right" style="margin-right:140px;">
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Main Menu <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#about" name="about" role="button" data-toggle="modal">About <?php echo Config::$site ?></a></li>
                  <li><a href="#purchase" name="purchase" role="button" data-toggle="modal">Purchase <?php echo Config::$site ?></a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Resources</li>
                  <li><a href="#calculator" name="calculator" role="button" data-toggle="modal">Calculate <?php echo Config::$site ?></a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
          <div class="row">
            <div class="span6">
              <h1 class="brand"><?php echo Config::$site ?></h1>
            </div>
          </div>
        </header>
        
        <div class="well well-large">
            <div class="alert alert-block alert-error">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <h4>Sorry!</h4>
                All blocks have been sold out.
            </div>
        </div>
    </div>
      
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-7976081-26']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
  </body>
</html>