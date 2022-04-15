<!DOCTYPE html>
<html lang="en" class="no-js"><head>
        <title>HOME</title>
		<meta charset="UTF-8" />
        <meta name="description" content="Greencare Interior Plants | Personalized Plant Maintenance & Design" />
<meta name="keywords" content="interior plant design, blooming baskets, plant services, green care, office plant, interior plants, houston interior designers, design, greencare, houston, interior, maintenance, plants, texas" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/sbimenu.css" />
        <link rel="stylesheet" type="text/css" href="css/inai-stylesheet.css" />
        <!-- Add jQuery library --> 
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <style type="text/css">
			.fancybox-nav span {
				visibility:visible;
		}
		</style>
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="js/modernizr-latest.js"></script>
        <script type="text/javascript" src="js/modernizr-latest.js"></script>
        
        <script type="text/javascript">
                $(document).ready(function() {
                    /*
                     *  Simple image gallery. Uses default settings
                     */
                    $('.fancybox').fancybox();
                    /*
                     *  Different effects
                     */
        
                });
				</script>
    </head>
    <body>
    	 <div class="contact_tab" id="contact_tab">
        	<img src="images/menu_backgrounds/contact_tab/contact_tab-2.png";>
        </div>
    	<div class="logo" id="logo_fadein">
			<a href="about_us.html"><img src="images/logos/GC-Logox200.png"></a>
    	</div>
        <div class="container_cover" id="container_cover" >
			<img src="images/menu_backgrounds/Home/home-labeled.jpg"  alt="houston interior plant service"/>
        </div>       			
		<div class="container">
            <div class="upper_div">
            </div>
            <div class="lower_div" id="lower_div">
                        <?php include 'includes/lower_div.php'; ?>

            </div>
            <div class="frame_background" id="fade_background">
            </div>
            <div class="frame_content" id="fade_content" style="font-size:20px; padding-left: 10px; padding-top: 10px; padding-right: 10px; color: #330000;">
                <h1 style="font-size: 25px; line-height: 27px; padding-left: 20px;">
                <div class="green_text">Greencare Interior Plants</div> is an interior plant design & service company located in Houston, TX.
                </h1>
                <p style="font-size: 20px; padding-left: 130px;">
                Our goal is to provide our customers with:
 
                <ul style="list-style-type:disc; padding-left: 160px;">
                <li>Fresh, up to date and creative design</li>
                <li>Detail oriented horticultural maintenance</li>
                <li>Continuous personal attention</li>      
                </ul>
                </p>
                <p style="line-height: 23px; padding-left: 20px;">
                We are dedicated to our work and committed to our customer’s total<br>satisfaction.
                </p>

                            <img src="images/Logos/single_pot_cut.png" style="position:absolute; bottom: 0px; left: 571px; z-index: 0;" />
                <hr>						                           
                <?php include 'WOW Slider/iframe_index.php'; ?>

            </div>
            
			
			<div class="content">
            		<div id="sbi_container" class="sbi_container">
                        <div class="sbi_panel" data-bg="images/menu_backgrounds/home/home_blurred-labeled.jpg">
                            <a href="#" class="sbi_label_active">home</a>
                            
                        </div>
                        <div class="sbi_panel" data-bg="images/menu_backgrounds/services/services_blurred-labeled.jpg">
                            <a href="services.php" class="sbi_label">services</a>
                            
                        </div>
                        <div class="sbi_panel" data-bg="images/menu_backgrounds/projects/projects_blurred-labeled.jpg">
                            <a href="projects.php" class="sbi_label">project galleries</a>
                            
                        </div>
                        <div class="sbi_panel" data-bg="images/menu_backgrounds/our_plants/our_plants_blurred-labeled.jpg">
                            <a href="our_plants.php" class="sbi_label">our plants</a>
                            
                        </div>
                        <div class="sbi_panel" data-bg="images/menu_backgrounds/about_us/about_us_blurred-labeled.jpg">
                            <a href="about_us.php" class="sbi_label">about us</a>
                            
                        </div>
                        
						
			
					</div>
			
			</div>
            <div id="inline1" class="inline_contact">
			<?php include 'includes/contact_us.php'; ?>
            </div>
            </div>
            
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.bgImageMenu.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#sbi_container').bgImageMenu({
					defaultBg	: 'images/menu_backgrounds/home/home_blurred-labeled.jpg',
					border		: 0,
					width: 1000,
                        height: 550,
					type		: {
						mode		: 'fade',
						speed		: 1,
						easing		: 'jswing'
					}
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox-thumbs").fancybox({
					prevEffect	: 'none',
					nextEffect	: 'none',
					openEffect  : 'elastic',
					closeEffect : 'elastic',
					helpers	: {
						
						thumbs	: {
							width	: 75,
							height	: 75
								   }
							      }
								  });
				$('#fade_background').fadeOut(200).delay(3100).fadeIn('.0000005');
				$('#fade_content').hide().delay(2200).fadeIn('.0000005');
				$('#container_cover').delay(3100).fadeOut('.0000005');
				$('#contact_tab').hide().delay(3300).fadeIn('.0000005');
				});

		</script>
				
</body>
</html>