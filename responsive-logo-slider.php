<?php
$direct_paths =  get_bloginfo('wpurl')."/wp-content/plugins/responsive-logo-slideshow/";
?>
<div id="dhtmlgoodies_slideshow" class="carousel-image-text-horizontal">
	<div id="galleryContainer">
		<div id="arrow_left"><img src="<?php echo $direct_paths; ?>scripts/img/arrow_left.gif" alt="arrow1"></div>
		<div id="arrow_right"><img src="<?php echo $direct_paths; ?>scripts/img/arrow_right.gif" alt="arrow2"></div>
		<div id="theImages">
				<!-- Thumbnails -->
		  <ul class="touchcarousel-container">
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url1');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img1');?>" alt="logo_url1"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url2');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img2');?>" alt="logo_url2"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url3');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img3');?>" alt="logo_url3"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url4');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img4');?>" alt="logo_url4"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url5');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img5');?>" alt="logo_url5"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url6');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img6');?>" alt="logo_url6"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url7');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img7');?>" alt="logo_url7"></a></li>
			<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url8');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img8');?>" alt="logo_url8"></a></li>
		  	<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url9');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img9');?>" alt="logo_url9"></a></li>
		  	<li class="touchcarousel-item"><a href="<?php echo get_option('logo-url10');?>" target="_blank"><img class="imgsize" src="<?php echo get_option('logo-img10');?>" alt="logo_url10"></a></li>
		  </ul>
		  
				<!-- End thumbnails -->
				
				<div id="slideEnd"></div>
		</div>
	</div>
</div>
