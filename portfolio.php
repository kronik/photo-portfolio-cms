<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Portfolio' clonable='1'>
	<cms:editable 
		 name='content' 
		 label='Content'
		 desc='Enter description of portfolio item here'
		 type='richtext' />

	<cms:editable 
		 name='website' 
		 label='Website'
		 desc='Enter site\'s URL here'
		 type='text'>
		 www.siteurlgoeshere.com
	</cms:editable>
	
	<cms:editable name='group_img1' label='First Image' desc='First Image' type='group' />
	<cms:editable
		name='image_1'
		label='Image 1'
		desc='Upload first image of portfolio here'
		crop='1'
		width='600'
		height='300'
		group='group_img1'
		type='image'
	/>
	<cms:editable
	  name='thumb'
	  label='Image Thumbnail'
	  desc='Thumbnail of first image'
	  width='223'
	  height='112'
	  show_preview='1'
	  assoc_field='image_1'
	  group='group_img1'
	  type='thumbnail' 
	/>
	<cms:editable 
		 name='image_1_title' 
		 label='Image Title'
		 desc='Enter image\'s title here'
		 group='group_img1'
		 type='text'/>
	
	<cms:editable name='group_img2' label='Second Image' desc='Second Image' type='group' />
 	<cms:editable
		name='image_2'
		label='Image 2'
		desc='Upload second image of portfolio here'
		width='600'
		height='300'
		crop='1'
		group='group_img2'
		type='image'
	/>
	<cms:editable 
		 name='image_2_title' 
		 label='Image Title'
		 desc='Enter image\'s title here'
		 group='group_img2'
		 type='text'/>
	
	<cms:editable name='group_img3' label='Third Image' desc='Third Image' type='group' />
	<cms:editable
		name='image_3'
		label='Image 3'
		desc='Upload third image of portfolio here'
		width='600'
		height='300'
		crop='1'
		group='group_img3'
		type='image'
	/>
	<cms:editable 
		 name='image_3_title' 
		 label='Image Title'
		 desc='Enter image\'s title here'
		 group='group_img3'
		 type='text'/>
	
		<cms:folder name='cat_1' title='First Category' />
		<cms:folder name='cat_2' title='Second Category' />
		<cms:folder name='cat_3' title='Third Category' />
</cms:template>

<cms:if k_is_page >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><cms:get_custom_field 'site_name' masterpage='globals.php' /> | 
	Portfolio >> <cms:show k_page_title /></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<cms:show k_site_link />css/reset.css" />
	<link rel="stylesheet" href="<cms:show k_site_link />css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="<cms:show k_site_link />js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="<cms:show k_site_link />js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<cms:show k_site_link />js/jquery.roundabout-shapes-1.1.js"></script>
	<script type="text/javascript">			
		$(document).ready(function() { //Start up our Project Preview Carosuel
			$('ul#folio_scroller').roundabout({
				easing: 'easeOutInCirc',
				shape: 'waterWheel',
				duration: 600
			});
		});
	</script>  
	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>

<body>

	<div id="wrapper" class="container_12 clearfix">

		<cms:embed 'header.html' />
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
			
		<!-- Catch Line and Link -->
			<h2 class="grid_12 caption clearfix">Our <span>portfolio</span>, home to our latest, and greatest work.</h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Column 1 / Project Information -->
		<div class="grid_4">
		<a class="meta" href="http://<cms:show website />"><cms:show website /></a>
		<h4 class="title"><cms:show k_page_title /></h4>
		<div class="hr dotted clearfix">&nbsp;</div>
			<cms:show content />
			<p class="clearfix">
				<a href="<cms:link masterpage='portfolio.php' />" class="button float">&lt;&lt; Back to Portfolio</a>
				<a href="http://<cms:show website />" class="button float right">Visit Site</a>
			</p>
		</div>
		
		<!-- Column 2 / Image Carosuel -->
		<div id="folio_scroller_container" class="grid_8 cleafix">
			<ul id="folio_scroller"> 
					<li><span><cms:show image_1_title /></span><a href="#"><img alt="" src="<cms:show image_1 />" /></a></li> 
					<li><span><cms:show image_2_title /></span><a href="#"><img alt="" src="<cms:show image_2 />" /></a></li> 
					<li><span><cms:show image_3_title /></span><a href="#"><img alt="" src="<cms:show image_3 />" /></a></li> 
			</ul> 
		</div>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Client pickup line -->
		<h2 class="grid_12 caption">Like this project? We can do something similar for you. <a href="contact.html"><span>Get in touch...</span></a></h2>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->

</body>
</html>
<cms:else />
	<cms:embed 'portfolio_list.html' />
</cms:if>
<?php COUCH::invoke(); ?>