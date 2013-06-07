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
              <p class="pull-right"><?php echo Config::$numLeft ?></p>
        </header>
        
        <div class="well well-large">
            <div id="mainDiv" style="width:1124px;height:1124px;border:1px solid yellow;">
                
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

    <!-- About Modal Content -->
    <div class="modal hide" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3>About <?php echo Config::$site ?></h3>
      </div>
      <div class="modal-body">
        <dl>
            <dt>What is <?php echo Config::$site ?>?</dt>
            <dd><?php echo Config::$site ?> is a way to get your message out there. Whatever it might be, whatever you want to say, it will be posted here, for the world to see, for as long as the internet exists and I am alive. All messages will remain anonymous (unless you make yourself known within the message itself).</dd>
            
            <dt>What will you be doing with the money?</dt>
            <dd>Gonna build me a rocket and fly it to Mars! Well, no...but something close to it. I honestly don't know. Most of it will go towards paying bandwidth bills - amongst other bills.</dd>
            
            <dt>What size is the <?php echo Config::$boxName ?></dt>
            <dd>The <?php echo Config::$boxName ?> is  1124 pixels wide by 1124 pixels high.</dd>
            
            <dt>What is the <?php echo Config::$boxName ?>?</dt>
            <dd>It's that box on the homepage of <?php echo Config::$site ?> with a yellow border.</dd>
            
            <dt>So, what can I do with my <?php echo Config::$plural ?>?</dt>
            <dd>Whatever message you want really. I will fill your <?php echo Config::$plural ?> with a solid color (of your choice) that users can click on to display your message.</dd>
            
            <dt>Okay, so how do I purchase <?php echo Config::$plural ?>?</dt>
            <dd>Click on Purchase <?php echo Config::$plural ?> under the Main Menu dropdown for details.</dd>
            
            <dt>Who are you?</dt>
            <dd>I am <a href="http://www.juanleonardosanchez.com" target="_blank">Juan Sanchez, a web developer in NYC</a>.</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>

    <!-- Purchase Modal Content -->
    <div class="modal hide" id="purchase" tabindex="-1" role="dialog" aria-labelledby="purchase" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3>Purchase <?php echo Config::$plural ?></h3>
      </div>
      <div class="modal-body">
        <p>You can purchase a minimum of one 4 pixel by 4 pixel block below. After purchasing, I will email you and ask what message and block color you would like. <br/><br/><strong>Within the PayPal area, you can choose how many 4x4 blocks you would like to purchase.</strong></p>
        <center>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="VM5A763SQZVRJ">
                <table>
                <tr><td><input type="hidden" name="on0" value="Prices">Prices</td></tr><tr><td><select name="os0">
                    <option value="0.03 per Pixl">0.03 per Pixl $0.48 USD</option>
                    <option value="0.07 per Pixl">0.07 per Pixl $1.12 USD</option>
                    <option value="0.15 per Pixl">0.15 per Pixl $2.40 USD</option>
                    <option value="0.25 per Pixl">0.25 per Pixl $4.00 USD</option>
                </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Name / Company Name">Name / Company Name</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
                </table>
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </center>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>

    <!-- calculator Modal Content -->
    <div class="modal hide" id="calculator" tabindex="-1" role="dialog" aria-labelledby="calculator" aria-hidden="true" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3><?php echo Config::$plural ?> Calculator</h3>
      </div>
      <div class="modal-body">
        <center>
            <label for="range">What would you pay?</label>
            <select id="range">
                <option value="0.03" selected="selected">$0.03</option>
                <option value="0.07">$0.07</option>
                <option value="0.15">$0.15</option>
                <option value="0.25">$0.25</option>
            </select>
            
            <label for="blocks">Number of 4x4 blocks you'd like to purchase:</label>
            <input type="number" id="blocks" name="blocks" value="0">
            
            <label for="price">Your price:</label>
            <input type="text" id="price" name="price" disabled="true" value="$0.00">
            
            <label for="pixls">Square <?php echo Config::$plural ?> you get:</label>
            <input type="text" id="pixls" name="pixls" disabled="true" value="0 square pixels.">
            
            <br/>
            <a href="#" class="btn" id="calculatePrice">Calculate</a>
        </center>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
      </div>
    </div>