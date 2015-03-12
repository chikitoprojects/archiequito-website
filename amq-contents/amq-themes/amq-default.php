<?php
	include("amq-includes/classes/page.php"); 
	$page_name = "";
	$page_title = "";
	if(isset($_GET['page'])){
		$page_name = $_GET['page'];
		$page_title = " - " . $_GET['page'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo CONTENTPATH.'amq-themes/images/favicon.ico'?>">
<title>Archie Quito - Web Developer<?php echo $page_title; ?></title>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1.7.1");</script>
<script type="text/javascript" src="<?php echo CONTENTPATH.'amq-themes/js/jquery.watermark.js' ?>"></script>
<script type="text/javascript" src="<?php echo CONTENTPATH.'amq-themes/js/modernizr.custom.53451.js' ?>"></script>
<script type="text/javascript" src="<?php echo CONTENTPATH.'amq-themes/js/jquery.gallery.js'?>"></script>
<script type="text/javascript">
$(document).ready(function () {
		$(function (){
			$("#txt_name").watermark("Name...", {useNative: false});
		});
		$(function (){
			$("#txt_message").watermark("Your message here...", {useNative: false});		
		});
});
</script>
<script type="text/javascript">
	$(function() {
		$('#dg-container').gallery();
	});

var qs = window.location.href;
var server_name = '<?php echo SERVER_NAME ?>';
//var server_name = 'http://'+top.location.host + '/';
var current_page = qs.replace(server_name, '');
$(document).ready(function(){

	$('.main-menu ul li').each(function(){
		var classname = $(this).attr('class');
		if(current_page == classname){
			$('.home').attr('class','home');
			$(this).attr('class','active');
		}
	});
});

</script>

<LINK REL=StyleSheet HREF="<?php echo CONTENTPATH.'amq-themes/css/style.css' ?>" TYPE="text/css" MEDIA=screen>
<LINK REL=StyleSheet HREF="<?php echo CONTENTPATH.'amq-themes/css/slider.css' ?>" TYPE="text/css" MEDIA=screen>


</head>
<body>

<div id="main-wrapper">
	<!--Header top-->
	<div id="header-top">
		 <div class="main-menu">
        	<ul>
            	<li class="home active"><a href="<?php echo SERVER_NAME; ?>"><span>Home</span></a></li>
                <li class="about"><a href="about"><span>About</span></a></li>
                <li class="portfolio"><a href="portfolio"><span>Portfolio</span></a></li>
                <li class="contact"><a href="contact"><span>Contact</span></a></li>
            </ul>        
        </div>
    	<div class="follow-me">
        	<h4>Follow me on </h4>
        	<a href="http://www.facebook.com/archie.quito" target="_blank"><div class="fb-icon"></div></a><a href="https://twitter.com/#!/chikito2227" target="_blank"><div class="twitter-icon"></div></a>
        </div>
    </div>
    <!--End header top-->
    
    <!--Header bottom-->
    <div id="header-bottom">
    	<a href="<?php echo SERVER_NAME; ?>"><img src="<?php echo CONTENTPATH.'amq-themes/images/logo.png' ?>" border="0" /></a>
    </div>
    <!--End Header bottom-->
    
    <!--Main banner-->
    <?php if ($page_name == '') : ?>
    <div id="main-banner">
    	<!--SLIDESHOW HERE-->
        <section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<a href="http://norrah.hemsida.eu/" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/thumbs/norra_halland.jpg'?>" width="375" alt="http://norrah.hemsida.eu/">
						<div>Norra Halland</div>
					</a>
					<a href="http://road2paris.com/" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/thumbs/road2paris.jpg'?>" width="375" alt="http://road2paris.com/">
						<div>Road to Paris</div>
					</a>
					<a href="http://www.infocastnetwork.com/" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/thumbs/infocast.jpg'?>" width="375" alt="http://www.infocastnetwork.com/">
						<div>Infocast Network</div>
					</a>
					<a href="http://www.nw77.co.uk/" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/thumbs/nw77.jpg'?>" width="375" alt="http://www.nw77.co.uk/">
						<div>NW77</div>
					</a>
					
					
                	<a href="http://www.floridahurricanewindows.com" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/professional-window.jpg'?>" width="375" alt="http://www.floridahurricanewindows.com">
						<div>Professional Window</div>
					</a>
					
					<a href="http://www.turningpoint.ph" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/turning-point.jpg'?>" width="375" alt="http://www.turningpoint.ph">
						<div>Turning Point</div>
					</a>
                    <a href="http://www.doctorsinchrist.org" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/doctors-in-christ.jpg'?>" width="375" alt="http://www.doctorsinchrist.org">
						<div>Doctors in Christ</div>
					</a>
                    <a href="http://testmembers.iftonline.com/MembersDashboard.aspx" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/ift-online.jpg'?>" width="375" alt="http://testmembers.iftonline.com/MembersDashboard.aspx">
						<div>IFT Online - International Funds Transfer </div>
					</a>
                    <a href="http://www.blueprintreader.com" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/next-generation.jpg'?>" width="375" alt="http://www.blueprintreader.com/">
						<div>Next Generation</div>
					</a>
                    <a href="http://www.residencesatthefallsrental.net" target="_blank">
						<img src="<?php echo CONTENTPATH.'amq-themes/images/slider/the-falls.jpg'?>" width="375" alt="http://www.residencesatthefallsrental.net/">
						<div>The Falls</div>
					</a>
				</div>
				<nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>				</nav>
			</section>
    </div>
    <?php endif; ?>
    <!--End Main banner-->
    
    <!--Main Body-->
    <div id="main-body">
    		<?php
			 	if ($page_name == '') : 
			 		current_page($page_name); 
				else:
					echo '<div class="single-page">';
					current_page($page_name); 
					echo '</div>';
            	endif; 
			?>
    </div>
    <!--End Main Body-->
    
    <!--Footer-->
    <div id="footer">
    	<div class="footer-left">
    		<ul>
            	<li><a href="<?php echo SERVER_NAME; ?>"><span>Home</span></a></li>
                <li><a href="about"><span>About</span></a></li>
                <li><a href="portfolio"><span>Portfolio</span></a></li>
                <li><a href="contact"><span>Contact</span></a></li>

            </ul>    
            <div class="footer-follow-me">
            	<span>Follow me on </span><br />
                <a href="http://www.facebook.com/archie.quito" target="_blank"><div class="fb-icon"></div></a><a href="https://twitter.com/#!/chikito2227" target="_blank"><div class="twitter-icon"></div></a>
            </div>
            <p>&copy; 2012 Archie Quito <br />Web Developer</p>
    	</div>
        <div class="footer-right">
        	<?php widget('contact-form'); ?>
        </div>
        
    </div>
    <!--End Footer-->
</div>
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30762388-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>

