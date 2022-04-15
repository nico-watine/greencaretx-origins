<!DOCTYPE html>
<html lang="en">
<head>
        <title>ABOUT US</title>
		<meta charset="UTF-8" />
        <meta name="description" content="Sliding Background Image Menu with jQuery" />
        <meta name="keywords" content="jquery, background image, image, menu, navigation, panels" />
		<meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/sbimenu.css" />
                <link rel="stylesheet" type="text/css" href="css/inai-stylesheet.css" />

		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=News+Cycle&v1' rel='stylesheet' type='text/css' />
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
        		<script type="text/javascript">
                $(document).ready(function() {
                    /*
                     *  Simple image gallery. Uses default settings
                     */
                    $('.fancybox').fancybox({
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
								  }
					);
                    /*
                     *  Different effects
                     */
        
                });
				
			
                </script>
<script type="text/javascript">
			$(document).ready(function() {
				
								  
				// Activate fancyBox
			$(".fancybox-open")
			.attr('rel', 'gallery')
			.fancybox({
				padding : 0,
				closeEffect : 'elastic',
				closeSpeed  : 350,
				
				
					 });
			// Launch fancyBox on first element
			$(".fancybox-open").eq(0).trigger('click');
			   setTimeout( function() {$.fancybox.close(); },3200); // 3000 = 3 secs

				});
			
			
		</script>
    </head>
<body>

<div class="container_cover" id="container_cover">
            <img src="images/menu_backgrounds/about_us/about_us-labeled.jpg" />
         </div>
         <div class="contact_tab" id="contact_tab">
        	<img src="images/menu_backgrounds/contact_tab/contact_tab-2.png";>
        </div>
    	<div class="logo">
			<a href="about_us.html"><img src="images/logos/GC-Logox200.png"></a>
        </div>
<div class="container">
<div class="upper_div">
            </div>
            <div class="lower_div" id="lower_div">
            <?php include 'includes/lower_div.php'; ?>
            </div>
        <div class="frame_content" id="fade_content">
        <p style="font-size: 20px;">About Us</p>
                <a class="fancybox-open" href="images/menu_backgrounds/about_us/about_us.jpg"><img src="images/menu_backgrounds/about_us/about_us.jpg" width="250" height="137" alt=""/></a>


        <br>
        
    </div>
			<div class="frame_background" id="fade_background">
            </div>		
            <div class="frame">
            </div>	
			<div class="content" >
            		<div id="sbi_container" class="sbi_container">

                        <div class="sbi_panel" data-bg="images/menu_backgrounds/home/home_blurred-labeled.jpg">
                            <a href="home.php" class="sbi_label">home</a>
                            
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
                            <a href="#" class="sbi_label_active">about us</a>
                            
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
					defaultBg	: 'images/menu_backgrounds/about_us/about_us_blurred-labeled.jpg',
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
				
				  
				$('#fade_background').fadeOut(200).delay(3100).fadeIn('.0000005');
				$('#fade_content').hide().delay(2200).fadeIn('.0000005');
				$('#container_cover').delay(3100).fadeOut('.0000005');
				$('#contact_tab').hide().delay(3300).fadeIn('.0000005');
				$('#fancybox-open').delay(3300).fadeIn('.0000005');
				});

		</script>
		
</body>
</html>