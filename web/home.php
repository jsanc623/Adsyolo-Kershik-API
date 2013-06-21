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
	    
	    <!-- IcoMoon font pack -->
	    <link rel="stylesheet" href="media/fonts/icomoon-pack-madmin-1.5/style.css" />
	  <!-- /Bootstrap Styles -->
	
	  <!-- Theme Styles -->
	    <!-- Libs Styles -->
	      <!-- Google Code Prettyfy - source-code highlighter -->
	      <link rel="stylesheet" href="media/js/libs/google-code-prettify/prettify.css" />
	    
	      <!-- jQuery Page Slide Plugin -->
	      <link rel="stylesheet" href="media/js/libs/jquery.pageslide/jquery.pageslide.css" />      
	    
	      <!-- jQuery Table Sorter Plugin -->
	      <link rel="stylesheet" href="media/js/libs/jquery.tablesorter/themes/blue/style.css" />
	      <link rel="stylesheet" href="media/js/libs/jquery.tablesorter/addons/pager/jquery.tablesorter.pager.css" />
	    <!-- /Libs Styles -->
	
	    <!-- Core Theme Styles -->
	      <!-- <link rel="stylesheet/less" href="media/styles/style.less" /> -->
	      <link rel="stylesheet" href="media/styles/style.css" />
	    <!-- /Core Theme Styles -->
	  <!-- /Theme Styles -->
	
	  <!-- CMS/Framework styles & scripts -->
	  <!-- /CMS/Framework styles & scripts -->
	
	  <!-- Style tweaks to CMS/plugins/widgets -->
	    <link href="media/css/tweaks.css" rel="stylesheet" />
	  <!-- /Style tweaks to CMS/plugins/widgets -->
	
	  <!-- HTML5 shim, for IE6-8 support of HTML5 elements: load latest from Google Code, fall back to local if offline -->
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
	  <!-- /Fonts -->
	
	  <!-- LESS -->
	  <!-- <script src="media/_tools/less-1.3.0.min.js"></script> -->
	</head>

	<body class="sidebar-max">
	
	<!--============================= Page Body =================================-->
	
	<!-- #topbar: Top Bar Menu -->
	<ul id="topbar" class="on-click">
	  <li class="pull-left">
	    <h1 id="topbar-title">
	      <i class="icon-cogs"><!----></i>
	      <!-- <i class="icon-icomoon-grid-view"></i> -->
	      <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
	      <a href="index.html">Kershik Control Panel</a>
	    </h1>
	  </li>
	  <li>
	    <a href="theme-docs.html">
	      <i class="icon-book"></i>
	      <!-- <i class="icon-icomoon-grid-view"></i> -->
	      <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
	      <span>Theme Docs</span>
	    </a>
	  </li>
	  <li class="parent pull-right">
	    <a href="#" data-toggle="dropdown">
	      <i class="icon-user"></i>
	      <span>John Adminsky</span>
	    </a>
	    <ul class="dropdown-menu">
	      <li><a href="#">Profile</a></li>
	      <li><a href="#">Finances</a></li>
	      <li class="divider"></li>
	      <li><a href="#">Logout</a></li>
	    </ul>
	  </li>
	  <li class="parent pull-right">
	    <a href="#" data-toggle="dropdown">
	      <i class="icon-cog"></i>
	      <span>Settings</span>
	    </a>
	    <ul class="dropdown-menu">
	      <li><a href="#">Backend Settings</a></li>
	      <li><a href="#">Frontend Settings</a></li>
	    </ul>
	  </li>
	  <li class="pull-right">
	    <a href="page-login.html">
	      <i class="icon-sign-blank"></i>
	      <span>Sign in</span>
	    </a>
	  </li>
	</ul>
	<!-- /#topbar: Top Bar Menu -->
	
	
	<div class="container-fluid" id="container">
	
	    <!-- #sidebar: Sidebar -->
	    <div id="sidebar">
	
	      <div class="search-mini-wrapper">
	        <form action="#" class="search-mini">
	          <input name="search" type="text" placeholder="Search..." />
	          <button type="submit">
	            <i class="icon-search"></i>
	          </button>
	        </form>
	      </div>      
	
	      <!-- ul.sidebar-menu: Sidebar Menu -->
	      <ul class="sidebar-menu on-click" id="main-menu">
	        <li class="active">
	          <div class="sidebar-menu-item-wrapper">
	            <a href="#" data-target-page="page-dashboard">
	              <i class="icon-home"></i>
	              <!-- <i class="icon-icomoon-grid-view"></i> -->
	              <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
	              <span>Dashboard</span>
	            </a>
	          </div>
	        </li>
	        <li class="inactive">
	          <div class="sidebar-menu-item-wrapper">
	            <a href="#" data-target-page="page-stats-and-reports">
	              <i class="icon-bar-chart"></i>
	              <span>Stats &amp; Reports</span>
	            </a>
	          </div>
	        </li>
	        <li class="parent inactive">
	          <div class="sidebar-menu-item-wrapper">
	            <a href="#">
	              <i class="icon-hdd"></i>
	              <!-- <i class="icon-icomoon-grid-view"></i> -->
	              <span>Database</span>
	            </a>
	            <ul>
	              <li><a href="#" data-target-page="page-database-settings"><i class="icon-cog"></i> <span>Settings</span></a></li>
	              <li><a href="#" data-target-page="page-database-table1"><i class="icon-table"></i> <span>Table 1</span></a></li>
	              <li class="parent inactive">
	                <a href="#"><i class="icon-icomoon-grid-view"></i> <span>Sub Menu</span></a>
	                <ul>
	                  <li class="parent inactive">
	                    <a href="#"><i class="icon-cog"></i> <span>More Settings</span></a>
	                    <ul>
	                      <li><a href="#" data-target-page="page-sample"><span>Alpha</span></a></li>
	                      <li><a href="#" data-target-page="page-sample"><span>Beta</span></a></li>
	                      <li><a href="#" data-target-page="page-sample"><span>Theta</span></a></li>
	                    </ul>
	                  </li>
	                  <li><a href="#" data-target-page="page-database-table1"><i class="icon-table"></i> <span>Table 2</span></a></li>
	                </ul>
	              </li>
	            </ul>
	          </div>
	        </li>
	        <li class="inactive">
	          <div class="sidebar-menu-item-wrapper">
	            <a href="#" data-target-page="page-sample">
	              <i class="icon-dashboard"></i>
	              <span>Virtual Machines</span>
	            </a>
	          </div>
	        </li>
	        <li class="parent inactive">
	          <div class="sidebar-menu-item-wrapper">
	            <a href="#">
	              <i class="icon-group"></i>
	              <span>Users</span>
	            </a>
	            <ul>
	              <li><a href="#" data-target-page="page-sample">User Accounts</a></li>
	              <li><a href="#" data-target-page="page-sample">User settings</a></li>
	              <li><a href="#" data-target-page="page-sample">Special user settings</a></li>
	            </ul>
	          </div>
	        </li>
	      </ul>
	      <!-- /ul.sidebar-menu: Sidebar Menu -->
	
	
	      <a href="#" id="sidebar-resizer">
	        <i class="min icon-resize-small"></i>
	        <i class="max icon-resize-full"></i>
	      </a>
	
	    </div>
	    <!-- /#sidebar: Sidebar -->
	
	    <!-- #content: The Main Content Section
	
	      Just add the page content here for a regular page or use .page DIVs for panel pages.
	      Use Bootstrap fluid layout for best effect.
	
	    -->
	    <div id="content">
	
	      <div class="page" id="page-dashboard">
	
	        <!-- Panel Page Dashboard Content: -->
	
	        <div class="hero-unit hero-special">
	          <h1>MADMIN Dashboard <small>v 1.6</small></h1>
	          <p>MADMIN is a Metro inspired fluid-adaptive admin theme that tries to be as light as posible and put your data and controls in focus, not the theme chrome. It features a highly configurable CSS based (mostly) sidebar menu that you will just love!</p>
	          <p><a href="theme-docs.html" class="btn btn-primary btn-large">Learn more »</a></p>
	        </div>
	
	        <div class="panel" id="panel-101">
	          <header>
	            <i class="icon-asterisk"></i>
	            <span>Shortcuts</span>
	          </header>
	          <div class="content tiles-container">
	            
	            <a href="#" class="tile-btn"><i class="icon-bar-chart"></i><span>Stats</span></a>
	            <a href="#" class="tile-btn"><i class="icon-hdd"></i><span>Database</span></a>
	            <a href="#" class="tile-btn"><i class="icon-dashboard"></i><span>VMs</span></a>
	            <a href="#" class="tile-btn">
	              <i class="icon-group"></i>
	              <!-- <i class="icon-icomoon-grid-view"></i> -->
	              <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
	              <span>Users</span>
	            </a>
	
	            <a href="#" class="tile-btn"><i class="icon-tasks"></i><span>Monitoring</span></a>
	            <a href="#" class="tile-btn"><i class="icon-flag"></i><span>Notices</span></a>
	            <a href="#" class="tile-btn"><i class="icon-film"></i><span>Media</span></a>
	
	          </div>
	        </div>
	
	        <div class="row-fluid">
	
	          <div class="span6">
	
	            <div class="panel" id="panel-24">
	              <header>
	
	                <i class="icon-bar-chart"></i>
	                <span>At a glance</span>
	                
	              </header>
	              <div class="content">
	
	                <div class="accordion" id="accordion2">
	                  <div class="accordion-group">
	                    <div class="accordion-heading">
	                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
	                        Server Load
	                      </a>
	                    </div>
	                    <div id="collapseOne" class="accordion-body in collapse" style="height: auto; ">
	                      <div class="accordion-inner">
	
	                        <div id="dashboard-dynamic-chart"></div>
	
	                      </div>
	                    </div>
	                  </div>
	                  <div class="accordion-group">
	                    <div class="accordion-heading">
	                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
	                        Daily Numbers
	                      </a>
	                    </div>
	                    <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
	
	                      <table class="table-key-numbers">
	                        <tr>
	                          <td>23</td>
	                          <td>4</td>
	                          <td>1</td>
	                        </tr>
	                        <tr>
	                          <th>New Subscriptions</th>
	                          <th>Upgrades</th>
	                          <th>Cancellation</th>
	                        </tr>
	                      </table>
	                      <br />
	
	                    </div>
	                  </div>
	                  <div class="accordion-group">
	                    <div class="accordion-heading">
	                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
	                        Alerts
	                      </a>
	                    </div>
	                    <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
	                      <div class="accordion-inner">
	                        <p>No new alerts today.</p>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	
	              </div>
	            </div>
	
	            <div class="panel" id="panel-13">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>One more panel</span>
	              </header>
	              <div class="content">
	                
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	              </div>
	            </div>
	
	          </div>
	
	          <div class="span6">
	
	            <div class="panel" id="panel-102">
	              <header>
	                <i class="icon-trophy"></i>
	                <!-- <i class="icon-icomoon-grid-view"></i> -->
	                <!-- <span aria-hidden="true" class="icon-icomoon-grid-view"></span> -->
	                <span>Daily sales top</span>
	              </header>
	              <div class="content tiles-container">
	                
	                <table id="table0" class="tablesorter">
	                  <thead>
	                    <tr>
	                      <th class="header">Service Name</th>
	                      <th class="header">Category</th>
	                      <th class="header">Price</th>
	                      <th class="header headerSortDown"># Sold</th>
	                    </tr>
	                  </thead>
	                  <tbody>             
	                    <tr class="odd">
	                      <td>Super Foo Service</td>
	                      <td>Cloud Management</td>
	                      <td>$987</td>
	                      <td>25</td>
	                    </tr><tr class="even">
	                      <td>Super Bar Service</td>
	                      <td>Remote Monitoring</td>
	                      <td>$765</td>
	                      <td>23</td>
	                    </tr><tr class="odd">
	                      <td>Standard Services</td>
	                      <td>Cloud Management</td>
	                      <td>$432</td>
	                      <td>12</td>
	                    </tr><tr class="even">
	                      <td>Enterprise All Inclusive</td>
	                      <td>Integrated Services</td>
	                      <td>$6987</td>
	                      <td>11</td>
	                    </tr><tr class="odd">
	                      <td>Royal Deluxe</td>
	                      <td>Integrated Services</td>
	                      <td>$9000</td>
	                      <td>10</td>
	                    </tr>
	                  </tbody>
	                </table>
	
	              </div>
	            </div>
	
	            <div class="panel" id="panel-106">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>And another panel</span>
	              </header>
	              <div class="content">
	
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	                <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image.</p>
	
	              </div>
	            </div>
	
	          </div>
	        </div>
	
	        <!-- /Panel Page Dashboard Content -->
	
	      
	      </div>
	
	      <div class="page hidden" id="page-stats-and-reports">
	
	        <!-- Panel Page Stats and Reports Content: -->
	
	        <h1>Statistics and Reports</h1>
	        <br />
	
	        <div class="row-fluid">
	
	          <div class="span6">
	
	            <div class="panel" id="panel-23">
	              <header>
	                <i class="icon-bar-chart"></i>
	                <span>Browser usage</span>
	              </header>
	              <div class="content">
	
	                <div id="stats-pie-chart" class="flot-chart"></div>
	
	              </div>
	            </div>
	
	            <div class="panel" id="panel-13b">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>One more panel</span>
	              </header>
	              <div class="content">
	                
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	              </div>
	            </div>
	
	          </div>
	
	          <div class="span6">
	
	            <div class="panel" id="panel-14">
	              <header>
	
	                <i class="icon-signal"></i>
	                <span>Server load</span>
	                
	              </header>
	              <div class="content">
	
	                <table class="table-key-numbers">
	                  <tr>
	                    <td>10,962</td>
	                    <td>56%</td>
	                    <td>129</td>
	                  </tr>
	                  <tr>
	                    <th>Unique Visitors</th>
	                    <th>New Visitors</th>
	                    <th>New Accounts</th>
	                  </tr>
	                </table>
	
	                <div id="stats-area-chart"></div>
	
	              </div>
	            </div>
	
	            <div class="panel" id="panel-206">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>And another panel</span>
	              </header>
	              <div class="content">
	
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	                <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image.</p>
	
	              </div>
	            </div>
	
	          </div>
	        </div>
	
	        <!-- /Panel Page Stats and Reports Content -->
	
	      
	      </div>
	
	      <div class="page hidden" id="page-database-settings">        
	
	        <!-- Panel Page Database Settings Content: -->
	        
	        <h1>Database settings</h1>
	        <br />
	
	        <form class="form-horizontal">
	          <fieldset>
	            <div class="control-group">
	              <label class="control-label" for="prependedDropdownButton">Text input</label>
	              <div class="controls">
	                <div class="input-prepend">
	                  <div class="btn-group">
	                    <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
	                    <ul class="dropdown-menu">
	                      <li><a href="#">Action</a></li>
	                      <li><a href="#">Another action</a></li>
	                      <li><a href="#">Something else here</a></li>
	                      <li class="divider"></li>
	                      <li><a href="#">Separated link</a></li>
	                    </ul>
	                  </div><!-- /btn-group -->
	                  <input class="span2" id="prependedDropdownButton" type="text">
	                </div>
	                <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="optionsCheckbox">Checkbox</label>
	              <div class="controls">
	                <label class="checkbox">
	                  <input type="checkbox" id="optionsCheckbox" value="option1">
	                  Option one is this and that—be sure to include why it's great
	                </label>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="select01">Select list</label>
	              <div class="controls">
	                <select id="select01">
	                  <option>something</option>
	                  <option>2</option>
	                  <option>3</option>
	                  <option>4</option>
	                  <option>5</option>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="multiSelect">Multicon-select</label>
	              <div class="controls">
	                <select multiple="multiple" id="multiSelect">
	                  <option>1</option>
	                  <option>2</option>
	                  <option>3</option>
	                  <option>4</option>
	                  <option>5</option>
	                </select>
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="fileInput">File input</label>
	              <div class="controls">
	                <input class="input-file" id="fileInput" type="file">
	              </div>
	            </div>
	            <div class="control-group">
	              <label class="control-label" for="textarea">Textarea</label>
	              <div class="controls">
	                <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
	              </div>
	            </div>
	            <div class="form-actions">
	              <button type="submit" class="btn btn-primary">Save changes</button>
	              <button class="btn">Cancel</button>
	            </div>
	          </fieldset>
	        </form>
	
	        <!-- /Panel Page Database Settings Content -->
	
	      
	      </div>
	
	      <div class="page hidden" id="page-database-table1">        
	
	        <!-- Panel Page Database Table 1 Content: -->
	
	        <h1>Table 1</h1>
	
	        <table id="table1" class="tablesorter">
	          <thead>
	            <tr>
	              <th class="header headerSortDown">First Name</th>
	              <th class="header">Last Name</th>
	              <th class="header headerSortUp">Age</th>
	              <th class="header">Total</th>
	              <th class="header">Discount</th>
	              <th class="header">Difference</th>
	              <th class="header">Date</th>
	            </tr>
	          </thead>
	          <tbody>             
	          <tr class="odd">
	              <td>Bruce</td>
	              <td>Almighty</td>
	              <td>45</td>
	              <td>$153.19</td>
	              <td>44.7%</td>
	              <td>+77</td>
	              <td>Jan 18, 2001 9:12 AM</td>
	            </tr><tr class="even">
	              <td>Bruce</td>
	              <td>Evans</td>
	              <td>22</td>
	              <td>$13.19</td>
	              <td>11%</td>
	              <td>-100.9</td>
	              <td>Jan 18, 2007 9:12 AM</td>
	            </tr><tr class="odd">
	              <td>Bruce</td>
	              <td>Evans</td>
	              <td>22</td>
	              <td>$13.19</td>
	              <td>11%</td>
	              <td>0</td>
	              <td>Jan 18, 2007 9:12 AM</td>
	            </tr><tr class="even">
	              <td>Clark</td>
	              <td>Kent</td>
	              <td>18</td>
	              <td>$15.89</td>
	              <td>44%</td>
	              <td>-26</td>
	              <td>Jan 12, 2003 11:14 AM</td>
	            </tr><tr class="odd">
	              <td>John</td>
	              <td>Hood</td>
	              <td>33</td>
	              <td>$19.99</td>
	              <td>25%</td>
	              <td>+12</td>
	              <td>Dec 10, 2002 5:14 AM</td>
	            </tr><tr class="even">
	              <td>Peter</td>
	              <td>Parker</td>
	              <td>28</td>
	              <td>$9.99</td>
	              <td>20.9%</td>
	              <td>+12.1</td>
	              <td>Jul 6, 2006 8:14 AM</td>
	            </tr></tbody>
	        </table>
	
	        <!-- /Panel Page Database Table 1 Content -->
	
	      
	      </div>
	
	      <div class="page hidden" id="page-sample">        
	
	        <!-- Panel Page Sample Content: -->
	
	        <div class="hero-unit">
	          <h1>MADMIN Sample Page</h1>
	          <p>MADMIN is a Metro inspired fluid-adaptive admin theme that tries to be as light as posible and put your data and controls in focus, not the theme chrome. It features a highly configurable CSS based (mostly) sidebar menu that you will just love!</p>
	          <p><a href="theme-docs.html" class="btn btn-primary btn-large">Learn more »</a></p>
	        </div>
	
	        <div class="row-fluid">
	
	          <div class="span6">
	
	            <div class="panel" id="panel-13c">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>One more panel</span>
	              </header>
	              <div class="content">
	                
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	                <p>Click <a href="help.html" class="help-link">here</a> to get help!</p>
	
	              </div>
	            </div>
	
	          </div>
	
	          <div class="span6">
	
	            <div class="panel" id="panel-106b">
	              <header>
	                <i class="icon-th-large"></i>
	                <span>And another panel</span>
	              </header>
	              <div class="content">
	
	                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	
	                <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
	
	                <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
	
	                <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image.</p>
	
	                <p>Click <a href="help.html" class="help-link">here</a> to get help!</p>
	                
	              </div>
	            </div>
	
	          </div>
	        </div>
	
	        <section id="typography">
	          <div class="page-header">
	            <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
	          </div>
	
	          <h2>Headings &amp; body copy</h2>
	
	          <!-- Headings & Paragraph Copy -->
	          <div class="row-fluid">
	            <div class="span4">
	              <h3>Typographic scale</h3>
	              <p>The entire typographic grid is based on two Less variables in our variables.less file: <code>baseFontSize</code> and <code>baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
	              <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
	            </div>
	            <div class="span4">
	              <div class="well">
	                <h1>h1. Heading 1</h1>
	                <h2>h2. Heading 2</h2>
	                <h3>h3. Heading 3</h3>
	                <h4>h4. Heading 4</h4>
	                <h5>h5. Heading 5</h5>
	                <h6>h6. Heading 6</h6>
	              </div>
	            </div>
	            <div class="span4">
	              <div class="well">
	                <h1 class="light">h1. Light H1</h1>
	                <h2 class="light">h2. Light H2</h2>
	                <h3 class="light">h3. Light H3</h3>
	                <h4 class="light">h4. Light H4</h4>
	                <h5 class="light">h5. Light H5</h5>
	                <h6 class="light">h6. Light H6</h6>
	              </div>
	            </div>
	          </div>
	
	          <!-- Misc Elements -->
	          <h2>Emphasis, address, and abbreviation</h2>
	          <table class="table table-bordered table-striped">
	            <thead>
	              <tr>
	                <th>Element</th>
	                <th>Usage</th>
	                <th>Optional</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>
	                  <code>&lt;strong&gt;</code>
	                </td>
	                <td>
	                  For emphasizing a snippet of text with <strong>important</strong>
	                </td>
	                <td>
	                  <span class="muted">None</span>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <code>&lt;em&gt;</code>
	                </td>
	                <td>
	                  For emphasizing a snippet of text with <em>stress</em>
	                </td>
	                <td>
	                  <span class="muted">None</span>
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <code>&lt;abbr&gt;</code>
	                </td>
	                <td>
	                  Wraps abbreviations and acronyms to show the expanded version on hover
	                </td>
	                <td>
	                  <p>Include optional <code>title</code> attribute for expanded text</p>
	                  Use <code>.initialism</code> class for uppercase abbreviations.
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <code>&lt;address&gt;</code>
	                </td>
	                <td>
	                  For contact information for its nearest ancestor or the entire body of work
	                </td>
	                <td>
	                  Preserve formatting by ending all lines with <code>&lt;br&gt;</code>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	
	          <div class="row-fluid">
	            <div class="span4">
	              <h3>Using emphasis</h3>
	              <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
	              <p><strong>Note:</strong> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5, but their usage has changed a bit. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
	            </div>
	            <div class="span4">
	              <h3>Example addresses</h3>
	              <p>Here are two examples of how the <code>&lt;address&gt;</code> tag can be used:</p>
	              <address>
	                <strong>Twitter, Inc.</strong><br>
	                795 Folsom Ave, Suite 600<br>
	                San Francisco, CA 94107<br>
	                <abbr title="Phone">P:</abbr> (123) 456-7890
	              </address>
	              <address>
	                <strong>Full Name</strong><br>
	                <a href="mailto:#">first.lastgmail.com</a>
	              </address>
	            </div>
	            <div class="span4">
	              <h3>Example abbreviations</h3>
	              <p>Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover. This gives users extra indication something will be shown on hover.</p>
	              <p>Add the <code>initialism</code> class to an abbreviation to increase typographic harmony by giving it a slightly smaller text size.</p>
	              <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
	              <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
	            </div>
	          </div>
	
	
	          <!-- Blockquotes -->
	          <h2>Blockquotes</h2>
	          <table class="table table-bordered table-striped">
	            <thead>
	              <tr>
	                <th>Element</th>
	                <th>Usage</th>
	                <th>Optional</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td>
	                  <code>&lt;blockquote&gt;</code>
	                </td>
	                <td>
	                  Block-level element for quoting content from another source
	                </td>
	                <td>
	                  <p>Add <code>cite</code> attribute for source URL</p>
	                  Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated options
	                </td>
	              </tr>
	              <tr>
	                <td>
	                  <code>&lt;small&gt;</code>
	                </td>
	                <td>
	                  Optional element for adding a user-facing citation, typically an author with title of work
	                </td>
	                <td>
	                  Place the <code>&lt;cite&gt;</code> around the title or name of source
	                </td>
	              </tr>
	            </tbody>
	          </table>
	          <div class="row-fluid">
	            <div class="span4">
	              <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
	              <p>Include an optional <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it for styling purposes.</p>
	            </div>
	            <div class="span8">
	        <pre class="prettyprint linenums">&lt;blockquote&gt;
	  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.&lt;/p&gt;
	  &lt;small&gt;Someone famous&lt;/small&gt;
	&lt;/blockquote&gt;
	        </pre>
	            </div>
	          </div><!--/row-->
	
	          <h3>Example blockquotes</h3>
	          <div class="row-fluid">
	            <div class="span6">
	              <p>Default blockquotes are styled as such:</p>
	              <blockquote>
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
	                <small>Someone famous in <cite title="">Body of work</cite></small>
	              </blockquote>
	            </div>
	            <div class="span6">
	              <p>To float your blockquote to the right, add <code>class="pull-right"</code>:</p>
	              <blockquote class="pull-right">
	                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
	                <small>Someone famous in <cite title="">Body of work</cite></small>
	              </blockquote>
	            </div>
	          </div>
	
	
	          <!-- Lists -->
	          <h2>Lists</h2>
	          <div class="row-fluid">
	            <div class="span4">
	              <h3>Unordered</h3>
	              <p><code>&lt;ul&gt;</code></p>
	              <ul>
	                <li>Lorem ipsum dolor sit amet</li>
	                <li>Consectetur adipiscing elit</li>
	                <li>Integer molestie lorem at massa</li>
	                <li>Facilisis in pretium nisl aliquet</li>
	                <li>Nulla volutpat aliquam velit
	                  <ul>
	                    <li>Phasellus iaculis neque</li>
	                    <li>Purus sodales ultricies</li>
	                    <li>Vestibulum laoreet porttitor sem</li>
	                    <li>Ac tristique libero volutpat at</li>
	                  </ul>
	                </li>
	                <li>Faucibus porta lacus fringilla vel</li>
	                <li>Aenean sit amet erat nunc</li>
	                <li>Eget porttitor lorem</li>
	              </ul>
	            </div>
	            <div class="span4">
	              <h3>Unstyled</h3>
	              <p><code>&lt;ul class="unstyled"&gt;</code></p>
	              <ul class="unstyled">
	                <li>Lorem ipsum dolor sit amet</li>
	                <li>Consectetur adipiscing elit</li>
	                <li>Integer molestie lorem at massa</li>
	                <li>Facilisis in pretium nisl aliquet</li>
	                <li>Nulla volutpat aliquam velit
	                  <ul>
	                    <li>Phasellus iaculis neque</li>
	                    <li>Purus sodales ultricies</li>
	                    <li>Vestibulum laoreet porttitor sem</li>
	                    <li>Ac tristique libero volutpat at</li>
	                  </ul>
	                </li>
	                <li>Faucibus porta lacus fringilla vel</li>
	                <li>Aenean sit amet erat nunc</li>
	                <li>Eget porttitor lorem</li>
	              </ul>
	            </div>
	            <div class="span4">
	              <h3>Ordered</h3>
	              <p><code>&lt;ol&gt;</code></p>
	              <ol>
	                <li>Lorem ipsum dolor sit amet</li>
	                <li>Consectetur adipiscing elit</li>
	                <li>Integer molestie lorem at massa</li>
	                <li>Facilisis in pretium nisl aliquet</li>
	                <li>Nulla volutpat aliquam velit</li>
	                <li>Faucibus porta lacus fringilla vel</li>
	                <li>Aenean sit amet erat nunc</li>
	                <li>Eget porttitor lorem</li>
	              </ol>
	            </div>
	          </div><!-- /row -->
	          <br>
	          <div class="row-fluid">
	            <div class="span4">
	              <h3>Description</h3>
	              <p><code>&lt;dl&gt;</code></p>
	              <dl>
	                <dt>Description lists</dt>
	                <dd>A description list is perfect for defining terms.</dd>
	                <dt>Euismod</dt>
	                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
	                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
	                <dt>Malesuada porta</dt>
	                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
	              </dl>
	            </div>
	            <div class="span8">
	              <h3>Horizontal description</h3>
	              <p><code>&lt;dl class="dl-horizontal"&gt;</code></p>
	              <dl class="dl-horizontal">
	                <dt>Description lists</dt>
	                <dd>A description list is perfect for defining terms.</dd>
	                <dt>Euismod</dt>
	                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
	                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
	                <dt>Malesuada porta</dt>
	                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
	                <dt>Felis euismod semper eget lacinia</dt>
	                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
	              </dl>
	              <hr>
	              <p>
	                <span class="label label-info">Heads up!</span>
	                Horizontal description lists will truncate terms that are too long to fit in the left column fix <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.
	              </p>
	            </div>
	          </div><!-- /row -->
	        </section>
	
	        <!-- Buttons
	        ================================================== -->
	        <section id="buttons">
	          <div class="page-header">
	            <h1>Buttons</h1>
	          </div>
	
	          <h2>Default buttons</h2>
	          <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
	          <table class="table table-bordered table-striped">
	            <thead>
	              <tr>
	                <th>Button</th>
	                <th>class=""</th>
	                <th>Description</th>
	              </tr>
	            </thead>
	            <tbody>
	              <tr>
	                <td><button type="button" class="btn">Default</button></td>
	                <td><code>btn</code></td>
	                <td>Standard gray button with gradient</td>
	              </tr>
	              <tr>
	                <td>
	                  <button type="button" class="btn btn-primary">
	                    <i class="icon-th-large"></i>
	                    Primary
	                  </button>
	                </td>
	                <td><code>btn btn-primary</code></td>
	                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
	              </tr>
	              <tr>
	                <td><button type="button" class="btn btn-info">Info</button></td>
	                <td><code>btn btn-info</code></td>
	                <td>Used as an alternative to the default styles</td>
	              </tr>
	              <tr>
	                <td><button type="button" class="btn btn-success">Success</button></td>
	                <td><code>btn btn-success</code></td>
	                <td>Indicates a successful or positive action</td>
	              </tr>
	              <tr>
	                <td><button type="button" class="btn btn-warning">Warning</button></td>
	                <td><code>btn btn-warning</code></td>
	                <td>Indicates caution should be taken with this action</td>
	              </tr>
	              <tr>
	                <td><button type="button" class="btn btn-danger">Danger</button></td>
	                <td><code>btn btn-danger</code></td>
	                <td>Indicates a dangerous or potentially negative action</td>
	              </tr>
	              <tr>
	                <td>
	                  <button type="button" class="btn btn-inverse">
	                    <i class="icon-th-large"></i>
	                    <i class="icon-icomoon-grid-view"></i>                    
	                    Inverse
	                  </button>
	                </td>
	                <td><code>btn btn-inverse</code></td>
	                <td>Alternate dark gray button, not tied to a semantic action or use</td>
	              </tr>
	              <tr>
	                <td><button type="button" class="btn btn-link">Link</button></td>
	                <td><code>btn btn-link</code></td>
	                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
	              </tr>
	            </tbody>
	          </table>
	
	          <h4>Cross browser compatibility</h4>
	          <p>IE9 doesn't crop background gradients on rounded corners, so we remove it. Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow that we cannot fix.</p>
	
	
	          <h2>Button sizes</h2>
	          <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
	          <div class="bs-docs-example">
	            <p>
	              <button type="button" class="btn btn-large btn-primary">Large button</button>
	              <button type="button" class="btn btn-large">Large button</button>
	            </p>
	            <p>
	              <button type="button" class="btn btn-primary">Default button</button>
	              <button type="button" class="btn">Default button</button>
	            </p>
	            <p>
	              <button type="button" class="btn btn-small btn-primary">Small button</button>
	              <button type="button" class="btn btn-small">Small button</button>
	            </p>
	            <p>
	              <button type="button" class="btn btn-mini btn-primary">Mini button</button>
	              <button type="button" class="btn btn-mini">Mini button</button>
	            </p>
	          </div>
	<pre class="prettyprint linenums">
	&lt;p&gt;
	  &lt;button class="btn btn-large btn-primary" type="button"&gt;Large button&lt;/button&gt;
	  &lt;button class="btn btn-large" type="button"&gt;Large button&lt;/button&gt;
	&lt;/p&gt;
	&lt;p&gt;
	  &lt;button class="btn btn-primary" type="button"&gt;Default button&lt;/button&gt;
	  &lt;button class="btn" type="button"&gt;Default button&lt;/button&gt;
	&lt;/p&gt;
	&lt;p&gt;
	  &lt;button class="btn btn-small btn-primary" type="button"&gt;Small button&lt;/button&gt;
	  &lt;button class="btn btn-small" type="button"&gt;Small button&lt;/button&gt;
	&lt;/p&gt;
	&lt;p&gt;
	  &lt;button class="btn btn-mini btn-primary" type="button"&gt;Mini button&lt;/button&gt;
	  &lt;button class="btn btn-mini" type="button"&gt;Mini button&lt;/button&gt;
	&lt;/p&gt;
	</pre>
	          <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
	          <div class="bs-docs-example">
	            <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
	              <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
	              <button type="button" class="btn btn-large btn-block">Block level button</button>
	            </div>
	          </div>
	<pre class="prettyprint linenums">
	&lt;button class="btn btn-large btn-block btn-primary" type="button"&gt;Block level button&lt;/button&gt;
	&lt;button class="btn btn-large btn-block" type="button"&gt;Block level button&lt;/button&gt;
	</pre>
	
	
	          <h2>Disabled state</h2>
	          <p>Make buttons look unclickable by fading them back 50%.</p>
	
	          <h3>Anchor element</h3>
	          <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
	          <p class="bs-docs-example">
	            <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
	            <a href="#" class="btn btn-large disabled">Link</a>
	          </p>
	<pre class="prettyprint linenums">
	&lt;a href="#" class="btn btn-large btn-primary disabled"&gt;Primary link&lt;/a&gt;
	&lt;a href="#" class="btn btn-large disabled"&gt;Link&lt;/a&gt;
	</pre>
	          <p>
	            <span class="label label-info">Heads up!</span>
	            We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links here.
	          </p>
	
	          <h3>Button element</h3>
	          <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
	          <p class="bs-docs-example">
	            <button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
	            <button type="button" class="btn btn-large" disabled>Button</button>
	          </p>
	<pre class="prettyprint linenums">
	&lt;button type="button" class="btn btn-large btn-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-large" disabled&gt;Button&lt;/button&gt;
	</pre>
	
	
	          <h2>One class, multiple tags</h2>
	          <p>Use the <code>.btn</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
	          <form class="bs-docs-example">
	            <a class="btn" href="">Link</a>
	            <button class="btn" type="submit">Button</button>
	            <input class="btn" type="button" value="Input">
	            <input class="btn" type="submit" value="Submit">
	          </form>
	<pre class="prettyprint linenums">
	&lt;a class="btn" href=""&gt;Link&lt;/a&gt;
	&lt;button class="btn" type="submit"&gt;Button&lt;/button&gt;
	&lt;input class="btn" type="button" value="Input"&gt;
	&lt;input class="btn" type="submit" value="Submit"&gt;
	</pre>
	          <p>As a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type="submit"&gt;</code> for your button.</p>
	
	        </section>
	
	        <!-- Nav, Tabs, & Pills
	        ================================================== -->
	        <section id="navs">
	          <div class="page-header">
	            <h1>Nav: tabs, pills, and lists</h1>
	          </div>
	
	          <h2>Lightweight defaults <small>Same markup, different classes</small></h2>
	          <p>All nav components here&mdash;tabs, pills, and lists&mdash;<strong>share the same base markup and styles</strong> through the <code>.nav</code> class.</p>
	
	          <h3>Basic tabs</h3>
	          <p>Take a regular <code>&lt;ul&gt;</code> of links and add <code>.nav-tabs</code>:</p>
	          <div class="bs-docs-example">
	            <ul class="nav nav-tabs">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Profile</a></li>
	              <li><a href="#">Messages</a></li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-tabs"&gt;
	  &lt;li class="active"&gt;
	    &lt;a href="#"&gt;Home&lt;/a&gt;
	  &lt;/li&gt;
	  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
	  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
	</pre>
	
	          <h3>Basic pills</h3>
	          <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
	          <div class="bs-docs-example">
	            <ul class="nav nav-pills">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Profile</a></li>
	              <li><a href="#">Messages</a></li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-pills"&gt;
	  &lt;li class="active"&gt;
	    &lt;a href="#"&gt;Home&lt;/a&gt;
	  &lt;/li&gt;
	  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
	  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
	</pre>
	
	          <h3>Disabled state</h3>
	          <p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>. Links will remain clickable, however, unless you remove the <code>href</code> attribute. Alternatively, you could implement custom JavaScript to prevent those clicks.</p>
	          <div class="bs-docs-example">
	            <ul class="nav nav-pills">
	              <li><a href="#">Clickable link</a></li>
	              <li><a href="#">Clickable link</a></li>
	              <li class="disabled"><a href="#">Disabled link</a></li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-pills"&gt;
	  ...
	  &lt;li class="disabled"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
	  ...
	&lt;/ul&gt;
	</pre>
	
	          <h3>Component alignment</h3>
	          <p>To align nav links, use the <code>.pull-left</code> or <code>.pull-right</code> utility classes. Both classes will add a CSS float in the specified direction.</p>
	
	
	          <hr class="bs-docs-separator">
	
	
	          <h2>Stackable</h2>
	          <p>As tabs and pills are horizontal by default, just add a second class, <code>.nav-stacked</code>, to make them appear vertically stacked.</p>
	
	          <h3>Stacked tabs</h3>
	          <div class="bs-docs-example">
	            <ul class="nav nav-tabs nav-stacked">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Profile</a></li>
	              <li><a href="#">Messages</a></li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-tabs nav-stacked"&gt;
	  ...
	&lt;/ul&gt;
	</pre>
	
	          <h3>Stacked pills</h3>
	          <div class="bs-docs-example">
	            <ul class="nav nav-pills nav-stacked">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Profile</a></li>
	              <li><a href="#">Messages</a></li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-pills nav-stacked"&gt;
	  ...
	&lt;/ul&gt;
	</pre>
	
	
	          <hr class="bs-docs-separator">
	
	
	          <h2>Dropdowns</h2>
	          <p>Add dropdown menus with a little extra HTML and the <a href="./javascript.html#dropdowns">dropdowns JavaScript plugin</a>.</p>
	
	          <h3>Tabs with dropdowns</h3>
	          <div class="bs-docs-example">
	            <ul class="nav nav-tabs">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Help</a></li>
	              <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                  <li><a href="#">Action</a></li>
	                  <li><a href="#">Another action</a></li>
	                  <li><a href="#">Something else here</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Separated link</a></li>
	                </ul>
	              </li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-tabs"&gt;
	  &lt;li class="dropdown"&gt;
	    &lt;a class="dropdown-toggle"
	       data-toggle="dropdown"
	       href="#"&gt;
	        Dropdown
	        &lt;b class="caret"&gt;&lt;/b&gt;
	      &lt;/a&gt;
	    &lt;ul class="dropdown-menu"&gt;
	      &lt;!-- links --&gt;
	    &lt;/ul&gt;
	  &lt;/li&gt;
	&lt;/ul&gt;
	</pre>
	
	          <h3>Pills with dropdowns</h3>
	          <div class="bs-docs-example">
	            <ul class="nav nav-pills">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#">Help</a></li>
	              <li class="dropdown">
	                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                  <li><a href="#">Action</a></li>
	                  <li><a href="#">Another action</a></li>
	                  <li><a href="#">Something else here</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Separated link</a></li>
	                </ul>
	              </li>
	            </ul>
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-pills"&gt;
	  &lt;li class="dropdown"&gt;
	    &lt;a class="dropdown-toggle"
	       data-toggle="dropdown"
	       href="#"&gt;
	        Dropdown
	        &lt;b class="caret"&gt;&lt;/b&gt;
	      &lt;/a&gt;
	    &lt;ul class="dropdown-menu"&gt;
	      &lt;!-- links --&gt;
	    &lt;/ul&gt;
	  &lt;/li&gt;
	&lt;/ul&gt;
	</pre>
	
	
	          <hr class="bs-docs-separator">
	
	
	          <h2>Nav lists</h2>
	          <p>A simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the Finder in OS X.</p>
	
	          <h3>Example nav list</h3>
	          <p>Take a list of links and add <code>class="nav nav-list"</code>:</p>
	          <div class="bs-docs-example">
	            <div class="well" style="max-width: 340px; padding: 8px 0;">
	              <ul class="nav nav-list">
	                <li class="nav-header">List header</li>
	                <li class="active"><a href="#">Home</a></li>
	                <li><a href="#">Library</a></li>
	                <li><a href="#">Applications</a></li>
	                <li class="nav-header">Another list header</li>
	                <li><a href="#">Profile</a></li>
	                <li><a href="#">Settings</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Help</a></li>
	              </ul>
	            </div> <!-- /well -->
	          </div>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-list"&gt;
	  &lt;li class="nav-header"&gt;List header&lt;/li&gt;
	  &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
	  &lt;li&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
	  ...
	&lt;/ul&gt;
	</pre>
	          <p>
	            <span class="label label-info">Note</span>
	            For nesting within a nav list, include <code>class="nav nav-list"</code> on any nested <code>&lt;ul&gt;</code>.
	          </p>
	
	          <h3>Horizontal dividers</h3>
	          <p>Add a horizontal divider by creating an empty list item with the class <code>.divider</code>, like so:</p>
	<pre class="prettyprint linenums">
	&lt;ul class="nav nav-list"&gt;
	  ...
	  &lt;li class="divider"&gt;&lt;/li&gt;
	  ...
	&lt;/ul&gt;
	</pre>
	
	
	          <hr class="bs-docs-separator">
	
	
	          <h2>Tabbable nav</h2>
	          <p>Bring your tabs to life with a simple plugin to toggle between content via tabs. Bootstrap integrates tabbable tabs in four styles: top (default), right, bottom, and left.</p>
	
	          <h3>Tabbable example</h3>
	          <p>To make tabs tabbable, create a <code>.tab-pane</code> with unique ID for every tab and wrap them in <code>.tab-content</code>.</p>
	          <div class="bs-docs-example">
	            <div class="tabbable" style="margin-bottom: 18px;">
	              <ul class="nav nav-tabs">
	                <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
	                <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
	                <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
	              </ul>
	              <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
	                <div class="tab-pane active" id="tab1">
	                  <p>I'm in Section 1.</p>
	                </div>
	                <div class="tab-pane" id="tab2">
	                  <p>Howdy, I'm in Section 2.</p>
	                </div>
	                <div class="tab-pane" id="tab3">
	                  <p>What up girl, this is Section 3.</p>
	                </div>
	              </div>
	            </div> <!-- /tabbable -->
	          </div>
	<pre class="prettyprint linenums">
	&lt;div class="tabbable"&gt; &lt;!-- Only required for left/right tabs --&gt;
	  &lt;ul class="nav nav-tabs"&gt;
	    &lt;li class="active"&gt;&lt;a href="#tab1" data-toggle="tab"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;a href="#tab2" data-toggle="tab"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
	  &lt;/ul&gt;
	  &lt;div class="tab-content"&gt;
	    &lt;div class="tab-pane active" id="tab1"&gt;
	      &lt;p&gt;I'm in Section 1.&lt;/p&gt;
	    &lt;/div&gt;
	    &lt;div class="tab-pane" id="tab2"&gt;
	      &lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/div&gt;
	</pre>
	
	          <h4>Fade in tabs</h4>
	          <p>To make tabs fade in, add <code>.fade</code> to each <code>.tab-pane</code>.</p>
	
	          <h4>Requires jQuery plugin</h4>
	          <p>All tabbable tabs are powered by our lightweight jQuery plugin. Read more about how to bring tabbable tabs to life <a href="./javascript.html#tabs">on the JavaScript docs page</a>.</p>
	
	          <h3>Tabbable in any direction</h3>
	
	          <h4>Tabs on the bottom</h4>
	          <p>Flip the order of the HTML and add a class to put tabs on the bottom.</p>
	          <div class="bs-docs-example">
	            <div class="tabbable tabs-below">
	              <div class="tab-content">
	                <div class="tab-pane active" id="A">
	                  <p>I'm in Section A.</p>
	                </div>
	                <div class="tab-pane" id="B">
	                  <p>Howdy, I'm in Section B.</p>
	                </div>
	                <div class="tab-pane" id="C">
	                  <p>What up girl, this is Section C.</p>
	                </div>
	              </div>
	              <ul class="nav nav-tabs">
	                <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
	                <li><a href="#B" data-toggle="tab">Section 2</a></li>
	                <li><a href="#C" data-toggle="tab">Section 3</a></li>
	              </ul>
	            </div> <!-- /tabbable -->
	          </div>
	<pre class="prettyprint linenums">
	&lt;div class="tabbable tabs-below"&gt;
	  &lt;div class="tab-content"&gt;
	    ...
	  &lt;/div&gt;
	  &lt;ul class="nav nav-tabs"&gt;
	    ...
	  &lt;/ul&gt;
	&lt;/div&gt;
	</pre>
	
	          <h4>Tabs on the left</h4>
	          <p>Swap the class to put tabs on the left.</p>
	          <div class="bs-docs-example">
	            <div class="tabbable tabs-left">
	              <ul class="nav nav-tabs">
	                <li class="active"><a href="#lA" data-toggle="tab">Section 1</a></li>
	                <li><a href="#lB" data-toggle="tab">Section 2</a></li>
	                <li><a href="#lC" data-toggle="tab">Section 3</a></li>
	              </ul>
	              <div class="tab-content">
	                <div class="tab-pane active" id="lA">
	                  <p>I'm in Section A.</p>
	                </div>
	                <div class="tab-pane" id="lB">
	                  <p>Howdy, I'm in Section B.</p>
	                </div>
	                <div class="tab-pane" id="lC">
	                  <p>What up girl, this is Section C.</p>
	                </div>
	              </div>
	            </div> <!-- /tabbable -->
	          </div>
	<pre class="prettyprint linenums">
	&lt;div class="tabbable tabs-left"&gt;
	  &lt;ul class="nav nav-tabs"&gt;
	    ...
	  &lt;/ul&gt;
	  &lt;div class="tab-content"&gt;
	    ...
	  &lt;/div&gt;
	&lt;/div&gt;
	</pre>
	
	          <h4>Tabs on the right</h4>
	          <p>Swap the class to put tabs on the right.</p>
	          <div class="bs-docs-example">
	            <div class="tabbable tabs-right">
	              <ul class="nav nav-tabs">
	                <li class="active"><a href="#rA" data-toggle="tab">Section 1</a></li>
	                <li><a href="#rB" data-toggle="tab">Section 2</a></li>
	                <li><a href="#rC" data-toggle="tab">Section 3</a></li>
	              </ul>
	              <div class="tab-content">
	                <div class="tab-pane active" id="rA">
	                  <p>I'm in Section A.</p>
	                </div>
	                <div class="tab-pane" id="rB">
	                  <p>Howdy, I'm in Section B.</p>
	                </div>
	                <div class="tab-pane" id="rC">
	                  <p>What up girl, this is Section C.</p>
	                </div>
	              </div>
	            </div> <!-- /tabbable -->
	          </div>
	<pre class="prettyprint linenums">
	&lt;div class="tabbable tabs-right"&gt;
	  &lt;ul class="nav nav-tabs"&gt;
	    ...
	  &lt;/ul&gt;
	  &lt;div class="tab-content"&gt;
	    ...
	  &lt;/div&gt;
	&lt;/div&gt;
	</pre>
	
	        </section>
	
	        <!-- /Panel Page Sample Content -->
	
	      
	      </div>
	
	    </div>
	    <!-- /#content: The Main Content Section -->
	
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
	  <!-- /jQuery -->
	
	  <!-- Bootstrap Components -->
	  <script src="media/bootstrap/js/bootstrap.min.js"></script>
	
	
	  <!-- Theme Scripts -->
	  <script src="media/js/madmin.js"></script>
	  <script src="media/js/application.js"></script>
	
	  <!-- Flot Plotting -->
	  <script src="media/js/libs/flot/excanvas.min.js"></script>
	  <script src="media/js/libs/flot/jquery.flot.js"></script>
	  <script src="media/js/libs/flot/jquery.flot.resize.min.js"></script>
	  <script src="media/js/libs/flot/jquery.flot.pie.min.js"></script>
	
	  <!-- Google Code Prettyfy - source-code highlighter -->
	  <script src="media/js/libs/google-code-prettify/prettify.js"></script>
	
	  <!-- jQuery Table Sorter Plugin -->
	  <script src="media/js/libs/jquery.tablesorter/jquery.tablesorter.min.js"></script>
	
	  <!-- jQuery Page Slide Plugin -->
	  <script src="media/js/libs/jquery.pageslide/jquery.pageslide.min.js"></script>
	
	  <!-- Demo Charts -->
	  <script src="media/js/demo-area-chart.js"></script>
	  <script src="media/js/demo-dynamic-chart.js"></script>
	  <script src="media/js/demo-pie-chart.js"></script>
	
	
	<!-- /Javascript -->
	
	</body>
</html>