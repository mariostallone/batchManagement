<?php session_start(); ?>
<!DOCTYPE html>


<head>
<meta charset="utf-8" />

<title>Contact - Free HTML5 Template</title>
<meta name="description" content="Free html5 website.">
<meta name="keywords" content="free html5 templates">
<meta name="author" content="Website designed by www.html-templates.co.uk">

<link rel="stylesheet" href="style.css" />


<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Pirulen_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1'); // Works without a selector engine
			Cufon.replace('#sub1'); // Requires a selector engine for IE 6-7, see above
		</script>

</head>

<body>


<br />
<br />

<div id="page">

  <div id="logo">
  
  <div id="logoleft">
  <h1>html5</h1>
  </div>
  
  <div id="logoright">
   <div id="searchBoxOne">
		<form action="?" method="get">
        	<input type="text" class="search" />
            <input type="submit" class="submit" value="Submit" />
       	</form> 
    </div>

  </div>
  
  
      </div>
      <!-- menu start -->
      <ul id="nav">
	<li class="current"><a href="index.html">Home</a></li>
    
	<li><a href="page.html">About Us</a></li>
    
	 <li><a href="page.html#">Services</a></li>
     
    <li><a href="page.html">Reviews</a></li>
    
     <li><a href="media.html">Media</a></li>
     
    
	<li><a href="page.html">Drop Down</a>
    <ul>
    <li><a href="page.html">Menu Item</a></li>
			<li><a href="page.html">Menu Item</a></li>
			<li><a href="page.html">Menu Item</a>
				</ul>
    </li>
    
  <li><a href="page.html">Multi Drop Down</a>
		<ul>
			<li><a href="page.html">Menu Item</a>
				<ul>
					<li><a href="#page.html">Sub-Level Item</a></li>
					<li><a href="page.html">Sub-Level Item</a>
						<ul>
							<li><a href="page.html">Sub-Level Item</a></li>
							<li><a href="page.html">Sub-Level Item</a></li>
							<li><a href="page.html">Sub-Level Item</a></li>
						</ul>
					</li>
					
					<li><a href="page.html">Sub-Level Item</a></li>
				</ul>
			</li>
			<li><a href="page.html">Menu Item</a></li>
			<li><a href="page.html">Menu Item</a></li>
			<li><a href="page.html">Menu Item</a>
				<ul>
					<li><a href="page.html">Sub-Level Item</a></li>
					<li><a href="page.html">Sub-Level Item</a></li>
					<li><a href="page.html">Sub-Level Item</a></li>
				</ul>
			</li>
		</ul>
	</li>
    
	<li><a href="contact.php">Contact</a></li>
</ul>
<br>
<br>
       <!-- menu end -->

  <div id="content">
<h2>Contact Us</h2>
  <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. </p>
  
    <p>I have included a simple php contact form which works perfectly and has been tested prior to launching this free html5 template, To replace with your email address navigate to <b>contactform/contact-config.php</b> and edit line 39!<br> Do not edit anything else unless you know what you are doing. Please also leave the php contact form credits intact.</p>


<div id="textarea">
			<?php include "contactform/contact.php"; ?>
</div>
    
    <div id="sidebar">
    <h2>About</h2>
  <p><strong>
html5 template</strong> can be downloaded free and edited in your favorite html editor.</p>
<p>Template has been designed using valid <a href="http://validator.w3.org/check?uri=referer" target="_blank">html5</a>. This template is also <a href="http://cufon.shoqolate.com/generate/" target="_blank">cufon</a> enabled for more infomation please refer to the templates notes text document.</p>
<p> You can download this template free  for your personal and commercial web sites providing you leave the designed by <a href="http://www.html5-templates.co.uk" target="_blank">html5 templates</a> link in the footer.</p>
<img src="images/blue_html5_colouredbig.png"  alt="html5 blue" width="219" height="218"></div>






  <div style="clear: both;">&nbsp;</div>
  <img src="images/bg_banner_grey.gif" width="880" height="5" alt="logo_banner" />
<div id="footer">

    <div id="footerleft">

 HTML5 Template © 2011 | Design by <a href="http://www.html5-templates.co.uk" target="_blank">html5 templates</a>
 </div>
 
     <div id="footerright">
     <a href="#"><img src="images/facebook.png" alt="facebook" width="32" height="32"></a>
   <a href="#">   <img src="images/twitter.png" alt="twitter" width="32" height="32"></a>
  <a href="#">    <img src="images/linkedin.png" alt="linkedin" width="32" height="32"></a>
   <a href="#">   <img src="images/youtube.png" alt="youtube" width="32" height="32"></a>
  <a href="#">    <img src="images/rss.png" alt="rss" width="32" height="32"></a>
</div>


</div>

</div>
</div>

<br />
<br />



    
</body>
</html>
