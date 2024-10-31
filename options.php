<?php
$location = $options_page; // Form Action URI
?>
<script type="text/javascript">

 function validate() {
  var url = ['logo-url1','logo-url2','logo-url3','logo-url4','logo-url5','logo-url6','logo-url7','logo-url8','logo-url9','logo-url10','logo-img1','logo-img2','logo-img3','logo-img4','logo-img5','logo-img6','logo-img7','logo-img8','logo-img9','logo-img10'];
   for(var i=0; i<url.length; i++){
   var url2 = document.getElementById(url[i]).value;
   var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
   if (!(pattern.test(url2))) {
     alert("Url is not valid!");
     return false;
   }
   }
    }
</script>
<div class="wrap">
	<h2>Responsive Logo Slideshow</h2>
	<p>Use these fields below to specify your Links and Logos for the Slideshow. Always use correct urls and path for Images and Links. For e.g. http://opensourcetechnologies.com/. </p>
	
    <div style="margin-left:0px;">
    <form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
		<fieldset name="general_options" class="options">
        
        1. Logo:<br />
	  <div style="margin:0;padding:0;">
        URL: <input name="logo-url1" id="logo-url1" size="25" value="<?php echo esc_url(get_option('logo-url1'));?>"></input> Image: <input name="logo-img1" id="logo-img1" size="25" value="<?php echo  esc_url(get_option('logo-img1')); ?>"></input>    
        </div><br />
        2. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url2" id="logo-url2" size="25" value="<?php echo  esc_url(get_option('logo-url2')); ?>"></input> Image: <input name="logo-img2" id="logo-img2" size="25" value="<?php echo  esc_url(get_option('logo-img2')); ?>"></input>    
        </div><br />

        3. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url3" id="logo-url3" size="25" value="<?php echo  esc_url(get_option('logo-url3')); ?>"></input> Image: <input name="logo-img3" id="logo-img3" size="25" value="<?php echo  esc_url(get_option('logo-img3')); ?>"></input>    
        </div><br />

        4. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url4" id="logo-url4" size="25" value="<?php echo  esc_url(get_option('logo-url4')); ?>"></input> Image: <input name="logo-img4" id="logo-img4" size="25" value="<?php echo  esc_url(get_option('logo-img4')); ?>"></input>    
        </div><br />

        5. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url5" id="logo-url5" size="25" value="<?php echo  esc_url(get_option('logo-url5')); ?>"></input> Image: <input name="logo-img5" id="logo-img5" size="25" value="<?php echo  esc_url(get_option('logo-img5')); ?>"></input>    
        </div><br />

        6. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url6" id="logo-url6" size="25" value="<?php echo  esc_url(get_option('logo-url6')); ?>"></input> Image: <input name="logo-img6" id="logo-img6" size="25" value="<?php echo  esc_url(get_option('logo-img6')); ?>"></input>    
        </div><br />
        
        7. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url7" id="logo-url7" size="25" value="<?php echo  esc_url(get_option('logo-url7')); ?>"></input> Image: <input name="logo-img7" id="logo-img7" size="25" value="<?php echo  esc_url(get_option('logo-img7')); ?>"></input>    
        </div><br />

		8. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url8" id="logo-url8" size="25" value="<?php echo  esc_url(get_option('logo-url8')); ?>"></input> Image: <input name="logo-img8" id="logo-img8" size="25" value="<?php echo  esc_url(get_option('logo-img8')); ?>"></input>    
        </div><br />

		9. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url9" id="logo-url9" size="25" value="<?php echo  esc_url(get_option('logo-url9')); ?>"></input> Image: <input name="logo-img9" id="logo-img9" size="25" value="<?php echo  esc_url(get_option('logo-img9')); ?>"></input>    
        </div><br />

		10. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url10" id="logo-url10" size="25" value="<?php echo  esc_url(get_option('logo-url10')); ?>"></input> Image: <input name="logo-img10" id="logo-img10" size="25" value="<?php echo  esc_url(get_option('logo-img10')); ?>"></input>    
        </div><br />
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="logo-url1, logo-img1, logo-url2, logo-img2, logo-url3, logo-img3, logo-url4, logo-img4, logo-url5, logo-img5, logo-url6, logo-img6, logo-url7, logo-img7 , logo-url8, logo-img8, logo-url9, logo-img9, logo-url10, logo-img10" />

		</fieldset>
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" onclick="return validate(); " /></p>
	</form>      
</div>
