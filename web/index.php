<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Title: -->
  <title>MADMIN</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Bootstrap Styles -->
    <!-- Bootstrap 2.0.4 -->
    <link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome 2.0 -->
      <link rel="stylesheet" href="media/fonts/font-awesome/css/font-awesome.min.css" />
      
    <!-- /Font Awesome 2.0 -->
    <!-- IcoMoon font pack -->
      <link rel="stylesheet" href="media/fonts/icomoon-pack-madmin-1.5/style.css" />
      
    <!-- /IcoMoon font pack -->
  <!-- /Bootstrap Styles -->

  <!-- Theme Styles -->

    <!-- Libs Styles -->

    <!-- /Libs Styles -->

    <!-- Core Theme Styles -->
    <!-- <link rel="stylesheet/less" href="media/styles/style.less" /> -->
    <link rel="stylesheet" href="media/styles/style.css" />
    
  <!-- /Theme Styles -->

  <!-- CMS/Framework styles & scripts -->
    <!-- ADD HERE -->
  <!-- /CMS/Framework styles & scripts -->

  <!-- Style tweaks to CMS/plugins/widgets -->
    <!-- ADD HERE -->
    <!-- eg.: <link href="media/css/tweaks.css" rel="stylesheet" /> -->
  <!-- /Style tweaks to CMS/plugins/widgets -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements:
       load latest from Google Code, fall back to local if offline -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="media/js/libs/fixes/html5.js"><\/script>')</script>
  <![endif]-->

  <!-- Icons: place favicon.ico and apple-touch-icon.png in the root directory (more: mathiasbynens.be/notes/touch-icons) -->
    <!--
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/bootstrap/ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/bootstrap/ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="media/bootstrap/ico/apple-touch-icon-57-precomposed.png" />
    -->
  <!-- /Icons -->

  <!-- Fonts -->
    <!-- ADD HERE -->
  <!-- /Fonts -->

  <!-- LESS -->
  <!-- <script src="media/_tools/less-1.3.0.min.js"></script> -->
</head>

<body class="no-sidebar-page">

<!--============================= Page Body =================================-->





<div class="container-fluid" id="container">

  <!-- #content.row-fluid: The Main Content Section

    Just add the page content here for a regular page or use .page DIVs for panel pages.
    Use Bootstrap fluid layout for best effect.

  -->
     
  <div class="panel" id="panel-login">

    <header>
      <i class="icon-sign-blank"></i>
      <span>SIGN IN</span>
    </header>

    <div class="content">

      <form action="./" method="post">
      
        <h4 id="welcomeBack"></h4>
        
        <div class="login-fields">
                          
          <div class="field">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field input-xlarge">
          </div> <!-- /.field -->
          
          <div class="field">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field input-xlarge">
          </div> <!-- /.field -->
          
        </div><!-- /.login-fields -->
        
        <div class="login-actions">
          
          <br />
          <span class="login-checkbox">                
            <label class="choice">
              <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4">
              &nbsp;Keep me signed in
            </label>
          </span>
          
          <br />
          <a href="#" class="button btn btn-large btn-primary btn-madmin">Sign In</a>
          
        </div><!-- /.login-actions -->
      
      </form>

    </div><!-- /.content -->

  </div><!-- /.panel -->

</div><!-- /.container-fluid#container -->



<!--============================= /Page Body ================================-->

<!-- Javascript: placed at the end of the document to speed up page loading
     (generally gives more consistent behavior than 'defer') -->

  <!-- Scripts will most likely break in IE6 and below, so why bother loading them? -->
  <!--[if lte IE 6]><noscript><![endif]-->

  <!-- CMS/Framework scripts -->
    <!-- ADD HERE -->
  <!-- /CMS/Framework scripts -->

  <!-- jQuery -->
    <!-- 1: Grab Google CDN's jQuery, if the CMS/Framework hasn't loaded it -->
    <script>window.jQuery || document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><\/script>')</script>  
    <!-- 2: ...fall back to local if offline -->
    <script>window.jQuery || document.write('<script src="media/js/libs/jquery-1.8.3.min.js"><\/script>')</script>
    <!-- 3: if jQuery was loaded in compatibility mode, where you have to use the
            long 'jQuery(...)' instead of '$(...)' (Wordpress does this), revert
            to to "classic" jQuery behavior -->
    <script>if ($ === undefined) $ = jQuery</script> 
    <script type="text/javascript">
    	$(".btn-madmin").on("click", function(){
    		var username = $("").val();
    		var password = $("").val();
    		var timestamp = Math.round((new Date()).getTime() / 1000);
    		var identifier = Math.round((new Date()).getTime() * 3218);
    		var clientsalt = Math.round((new Date()).getTime() * 3219);
    		
    		
    		var getHashUrl = "http://api.kershik.com/kershik/auth/genhash";
    		$.ajax({
			  type: "POST",
			  url: getHashUrl,
			  data: { username: username, password: password, timestamp: timestamp, identifier: identifier, clientsalt: clientsalt }
			}).done(function( msg ) {
			  console.log( "Your hash: " + msg );
			});
    	});
    
    
		var LanguageRotator = {
			translations: [
				{ "English"     : "Welcome back"           },
				{ "German"      : "Willkommen zurück"      },
				{ "Polish"      : "Witamy z powrotem"      },
				{ "English"     : "Welcome back"           },
				{ "Spanish"     : "Bienvenido de nuevo"    },
				{ "Turkish"     : "Tekrar hoş geldiniz"    },
				{ "Swahili"     : "Karibu tena"            },
				{ "English"     : "Welcome back"           },
				{ "Portuguese"  : "Bem-vindo de volta"     },
				{ "Hungarian"   : "Üdvözöljük"             },
				{ "Greek"       : "Καλώς ήρθατε και πάλι"  },
				{ "Filipino"    : "Maligayang pagbalik"    },
				{ "English"     : "Welcome back"           },
				{ "Croatian"    : "Dobrodošli natrag"      },
				{ "Belarusian"  : "Сардэчна запрашаем"     },
				{ "Bulgarian"   : "Добре дошли обратно"    },
				{ "Czech"       : "Vítejte zpět"           },
				{ "English"     : "Welcome back"           },
				{ "Finnish"     : "Tervetuloa takaisin"    },
				{ "Haitian"     : "Byenveni"               },
				{ "Indonesian"  : "Selamat datang kembali" },
				{ "Malay"       : "Selamat kembali"        },
				{ "English"     : "Welcome back"           },
				{ "Romanian"    : "Bine ai revenit"        },
				{ "Swedish"     : "Välkommen tillbaka"     }, 
				{ "Russian"     : "Добро пожаловать"       },
				{ "Norwegian"   : "Velkommen tilbake"      },
				{ "English"     : "Welcome back"           },
				{ "Italian"     : "Bentornato"             },
				{ "French"      : "Bienvenue à nouveau"    },
				{ "Danish"      : "Velkommen tilbage"      },
				{ "Catalan"     : "Benvingut de nou"       },
				{ "English"     : "Welcome back"           },
				{ "Dutch"       : "Welkom terug"           },
				{ "Azerbaijani" : "Xoş gəlmisiniz"         }
			],
			select: function(){
				return this.translations[Math.floor((Math.random() * this.translations.length) + 1)];
			},
			inject: function(keyElement, valueElement){
				var array = this.select();
				var keyElementPointer = $(keyElement);
				var valueElementPointer = $(valueElement);
				for(var key in array){
					if(valueElementPointer.length > 0)
						valueElementPointer.text(array[key]); 
					if(keyElementPointer.length > 0)
						keyElementPointer.text("(" + key + ")");
				}
			}
		}
		LanguageRotator.inject("#wbLang", "#welcomeBack");
    </script>
  <!-- /jQuery -->

  <!-- Bootstrap Components -->
  <script src="media/bootstrap/js/bootstrap.min.js"></script>


<!-- /Javascript -->

</body>
</html>