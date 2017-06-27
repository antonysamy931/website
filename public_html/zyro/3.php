<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.50" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1497730511" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1497730511" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance38" class="wb_element wb-menu"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Products/" target="_self" title="Products">Products</a></li><li class="active"><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance39" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Software</h4></div><div id="wb_element_instance40" class="wb_element wb_element_picture"><img alt="gallery/logo" src="gallery_gen//dc5c264f449232610a1fd0e327489e90_50x60.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance42" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacts</h1></div><div id="wb_element_instance43" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="a9c490e8"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th>Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Submit</button></td></tr></table></form><script type="text/javascript">
			<?php global $wb_form_id; if (isset($wb_form_id) & $wb_form_id == "a9c490e8") { ?>
				var formValues = <?php echo json_encode($_POST); ?>;
				var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
				wb_form_validateForm("a9c490e8", formValues, formErrors);
				<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
					setTimeout(function() {
						alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
					}, 1);
					<?php $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance44" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">+1 212 736 3100</p>
<p class="wb-stl-normal">Empire State Building</p>
<p class="wb-stl-normal">350 5th Ave</p>
<p class="wb-stl-normal">New York</p>
<p class="wb-stl-normal">NY 10118</p>
<p class="wb-stl-normal">USA</p></div><div id="wb_element_instance45" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">This text should be replaced with information about you and your business This text should be replaced with information about you and your business This text should be replaced with information about you and your...</p></div><div id="wb_element_instance46" class="wb_element wb-map"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=&amp;sensor=false&amp;libraries=places&amp;region=US&amp;language=en_US"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance46");
						var ll = new google.maps.LatLng(40.7484404,-73.98565539999998);
						var map = new google.maps.Map(div, {
							zoom: 14,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance47" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance47");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance47").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 132px;">
	
<div id="wb_element_instance41" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://technical-ant007.000webhostapp.com">technical-ant007.000webhostapp.com</a></p></div><div id="wb_element_instance48" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(70);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
