<!DOCTYPE html>
<html lang="en">
<head>
        <title>Interior Plant Service &amp; Maintenance Programs</title>
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
                    $('.fancybox').fancybox();
                    /*
                     *  Different effects
                     */
        
                });
                </script>

    </head>
    <body>
    <div class="container_cover" id="container_cover">
            <img src="images/menu_backgrounds/Services/services-labeled.jpg" />
         </div>
    	<div class="logo">
			<a href="about_us.html"><img src="images/logos/GC-Logox200.png"></a>
        </div>
        <div class="contact_tab" id="contact_tab">
        	<img src="images/menu_backgrounds/contact_tab/contact_tab-2.png";>
        </div>
<div class="container">
<div class="upper_div">
            </div>
            <div class="lower_div" id="lower_div">
                        <?php include 'includes/lower_div.php'; ?>

            </div>
        <div class="frame_content" id="fade_content">
        <h1 style="margin-top: -10px; font-size: 30px; color: #330000; padding-top: 7px; text-shadow: 1px 1px #99cc33; font-weight: bold;">Our Interior Plant Service & Maintenance Programs</h1>
        <br>
        <div class="green_text">3 OPTIONS</div>
        <br>
        <hr>
        <ul style="color: #330000; line-height: 23px;">
        <li>1. <strong>You already own the plants</strong>
        <br>
        We can take over their guaranteed maintenance.</li>
        <li>2. <strong>Purchase with guaranteed maintenance</strong>
        <br>
        We sell you the plants and their decorative <br>containers and we provide the weekly guaranteed maintenance.
        </li>
        <li>3. <strong>Lease with guaranteed maintenance</strong><br>
        We lease you the plants and their decorative containers and we provide the weekly guaranteed maintenance.</li>
        </ul>
        <br>
        <span style="color: #330000;">
        <strong>What are the differences between purchase or lease?</strong><br>
        By leasing you avoid the initial expense of the purchase. Keep in mind that when you lease, your monthly fee might be up to 50% higher than if you purchased the plants and had us provide the regular guaranteed maintenance.<br>
        With both options, the service remains the same.</span>
        </p>
                            <a class="fancybox-thumbs" rel="gallery1" href="images/services/services_b.jpg"><img src="images/services/services_s_magnifier.jpg" style="position: relative; left: 410px; top: -400px; border: 3px solid #330000;"></a>

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
                            <a href="#" class="sbi_label_active">services</a>       
                            
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
			<div id="inline1" class="inline_contact">
			<?php include 'includes/contact_us.php'; ?>
            </div>
			</div>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.bgImageMenu.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#sbi_container').bgImageMenu({
					defaultBg	: 'images/menu_backgrounds/services/services_blurred-labeled.jpg',
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