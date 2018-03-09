<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="en">
	
<!-- Mirrored from webagate.com/demos/alia/renew-multipurpose-responsive-website-template/offers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2017 13:14:10 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>espace adminstratif</title>
		<!-- All Stylesheets -->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="js/style.css"/>

<link rel="stylesheet" href="bootstrap.min.css"/>


<link rel="stylesheet" href="css/stylesheet.css"/>


<link rel="stylesheet" href="css/equal-height-columns.css"/>
	<link href="js/magnific-popup/magnific-popup.css"/>

<link rel="stylesheet" href="revolution/css/settings.css"/>
<link rel="stylesheet" href="revolution/css/layers.css"/>
<link rel="stylesheet" href="revolution/css/navigation.css"/>
<link rel="stylesheet" href="revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css"/>


<link rel="stylesheet" href="js/owl-carousel/owl.carousel.css"/>
<link rel="stylesheet" href="js/owl-carousel/owl.theme.default.min.css"/>

<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css"/>
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"/>

	</head>
	<body>
		<!-- NAVIGATION STARTS
			========================================================================= -->   
		<nav id="navigation">
			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
						<!--  Logo Starts -->
						<a class="navbar-brand" href="index.html">
						<img src="../../../Users/haykel/Desktop/maintenancesoc/images/logos/logo.png" width="128" height="40" alt=""></a>
						<!-- Logo Ends -->                        
					</div>
					<div class="collapse navbar-collapse">
						<div class="nav navbar-nav navbar-right hidden-xs">
							<div class="searchlink" id="searchlink">
								<div class="searchform">
									<form id="search">
										<input type="text" class="s" id="s" placeholder="keywords...">
										<button type="submit" class="sbtn"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
						</div>
						<ul class="nav navbar-nav navbar-left pull-right">
							<li class="dropdown">
														</li>
						<li class="current"><a href="consulte.php" class="external">CONSULTER EQUIPEMENTS</a></li>
							<li><a href="constache.php" class="external">CONSULTER LES TACHES</a></li>
							<li><a href="rapport.php" class="external">ENVOI RAPPORT</a></li>
													</ul>
					</div>
					<!--/.nav-collapse--> 
				</div>
			</div>
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- SERVICES PAGE CONTENTS STARTS
			========================================================================= -->
		<div class="services-2">
			<!-- ABOUT US BANNER STARTS -->
			<div class="inner-banner parallax-3">
				<div class="header">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<h1><span>suppression tache terminee</span></h1>
								<ol class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li class="active"><a href="administration.html">espace adminstratif</a></li>
									<li class="active">suppression tache terminee</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ABOUT US BANNER ENDS -->		
			<!-- ABOUT US INTRO STARTS -->
			<div class="container contents">
				<div class="row">
					<!-- Left Column Starts -->
					
					<!-- Left Column Ends -->
					<!-- Right Column Starts -->
					<div class="col-lg-9 col-md-9 col-sm-9">
						<div class="row">
							<!-- Block Starts -->
							<div class="col-lg-12">
								<div class="block">
									   
     
        <table class="table table-striped table-bordered">
         <thead>
            <tr>
               <th>contenu_tache</th>
               <th>dest_tache </th>
               <th>date_limitee</th> 
		     <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
			//nous incluons "database.php", 
			//crÃ©er une connexion PDO Ã  la base de donnÃ©es
              include 'database.php';
              $pdo = Database::connect();
			  //"SELECT" pour rÃ©cupÃ©rer des donnÃ©es. 
			  //ORDER BY permet de trier les lignes dans un rÃ©sultat dâ€™une requÃªte SQL. Il est possible de trier les donnÃ©es sur une ou plusieurs colonnes, par ordre ascendant ou descendant.
              $sql = 'SELECT * FROM tache ORDER BY  id_tache ';
              foreach ($pdo->query($sql) as $row) {
                echo '<tr>';
                echo '<td>'. $row['contenu_tache'] . '</td>';
                echo '<td>'. $row['dest_tache'] . '</td>';
                echo '<td>'. $row['date_limitee'] . '</td>';  				
			echo '<td colspan="3"> <a class="btn btn-primary" href="consult.php?id_tache =' . $row['id_tache'] . '">Consulter</a>&nbsp&nbsp';// un bouton d'edition                                           
                 echo '<a class="btn btn-success" href="update.php?id_tache =' . $row['id_tache'] . '">Modifier</a> &nbsp&nbsp';// un boutton pour le bouton d'update
                 echo '<a class="btn btn-danger" href="delete.php?id_tache =' . $row['id_tache'] . ' ">Delete</a>';// un autre td pour le bouton de suppression
                 echo '</td>';
		    echo '</tr>';
      }
            Database::disconnect();
          ?>
         </tbody>
       </table>
							<!-- Block Starts -->							
						</div>
					</div>
					<!-- Right Column Ends -->
				</div>
			</div>
			<!-- ABOUT US INTRO ENDS -->			
		</div>
		<!-- /. SERVICES PAGE CONTENTS ENDS
			========================================================================= -->
		<!-- SOCIAL ICONS STARTS
			========================================================================= -->
		<div class="dark-grey-2 social-icons">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 logo">
						<img src="../../../Users/haykel/Desktop/maintenancesoc/images/logos/logo-footer.png" alt="" ></div>
					<div class="col-lg-9 col-md-9 col-sm-9">
						<ul>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /. SOCIAL ICONS ENDS
			========================================================================= -->
		<!-- FOOTER STARTS
			========================================================================= -->
		<footer class="dark-grey-3">
			<div class="container">
				<div class="row">
					<!-- About Us Starts -->
					<div class="col-lg-3 col-md-3 col-sm-6 about-us">
						<h1>About Us</h1>
						<div class="description">Nunc molestie sapien tempor placerat crasd et lectus. Etiam sit amet turpis. Suspendisse se et erat. Proin a ipsum vitae orci port dom tristiq ue nam. Class aptent taciti sociosque sodales feugiat nulla.</div>
						<div class="button"><a href="#">Purchase</a></div>
					</div>
					<!-- About Us Ends -->
					<!-- Upcoming Sales Starts -->
					<div class="col-lg-3 col-md-3 col-sm-6 upcoming-sales">
						<h1>Upcoming Sales</h1>
						<ul>
							<li class="clearfix">
								<div class="info">
									<h2>
										First Day Sales -20%
									</h2>
									<h3><a href="#">3 days Event. Starting March 29th</a></h3>
								</div>
								<div class="date">20</div>
							</li>
							<li class="clearfix">
								<div class="info">
									<h2>
										First Day Sales -20%
									</h2>
									<h3><a href="#">3 days Event. Starting March 29th</a></h3>
								</div>
								<div class="date">9</div>
							</li>
							<li class="clearfix">
								<div class="info">
									<h2>
										First Day Sales -20%
									</h2>
									<h3><a href="#">3 days Event. Starting March 29th</a></h3>
								</div>
								<div class="date">4</div>
							</li>
						</ul>
					</div>
					<!-- Upcoming Sales Ends -->
					<!-- Fliker Starts -->
					<div class="col-lg-3 col-md-3 col-sm-6 flickr">
						<h1>Fliker Feeds</h1>
						<ul id="basicuse" class="thumbs"></ul>
					</div>
					<!-- Fliker Ends -->
					<!-- Contact Info Starts -->
					<div class="col-lg-3 col-md-3 col-sm-6 contact-info">
						<h1>Contact Info</h1>
						<address>
							<div class="phone">(900) 987 6540</div>
						</address>
						<address>
							<strong>Address:</strong><br>
							United Kingdom (UK)<br>6253 London, Panama Ave<br>VA 73432 Street                        
						</address>
						<address>
							<strong>Email: </strong><br>
							<a href="mailto:#">info@example.com</a>
						</address>
					</div>
					<!-- Contact Info Ends -->
				</div>
			</div>
		</footer>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- COPYRIGHT STARTS
			========================================================================= -->
		<div class="dark-grey-2 copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">Â© Copyrights 2015 <a href="#">Made By Renew</a>  All rights reserved.</div>
				</div>
			</div>
		</div>
		<!-- /. COPYRIGHT ENDS
			========================================================================= -->
		<!-- TO TOP STARTS
			========================================================================= -->
		<a href="#" class="scrollup">Scroll</a>      
		<!-- /. TO TOP ENDS
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../../Users/haykel/Desktop/maintenancesoc/js/bootstrap.min.js"></script>
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  
			The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript">
			var tpj=jQuery;			
			var revapi4;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_46_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_46_1");
				}else{
					revapi4 = tpj("#rev_slider_46_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"zeus",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"metis",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:5,
								tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
							}
						},
						viewPort: {
							enable:true,
							outof:"pause",
							visible_area:"80%"
						},
						responsiveLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[600,600,500,400],
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "0px",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
		<!-- Isotope Gallery --> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/isotope/custom-isotope-mansory.js"></script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/magnific-popup/jquery.magnific-popup.js"></script>
		<!-- Flicker Feeds -->
		<script src="../../../Users/haykel/Desktop/maintenancesoc/js/flickr/jflickrfeed.min.js"></script>
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/owl-carousel/owl.carousel.js"></script>
        <!-- FitVids --> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/fitvids/jquery.fitvids.js"></script>
		<!-- ScrollTo --> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/nav/jquery.scrollTo.js"></script> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/nav/jquery.nav.js"></script>
		<!-- Sticky --> 
		<script type="text/javascript" src="../../../Users/haykel/Desktop/maintenancesoc/js/sticky/jquery.sticky.js"></script>
		<!-- Overlay Resize Menu -->
		<script src="../../../Users/haykel/Desktop/maintenancesoc/js/overlay-resizemenu/js/classie.js"></script>
		<!-- Custom JS -->
		<script src="../../../Users/haykel/Desktop/maintenancesoc/js/custom/custom.js"></script>
	</body>

<!-- Mirrored from webagate.com/demos/alia/renew-multipurpose-responsive-website-template/services-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jul 2017 13:19:27 GMT -->
</html>