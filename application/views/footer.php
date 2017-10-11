
        
        <div class="footer_bottom">
            <div class="wrap">
            	<div class="container">
                	<div class="row">
                		<div class="span5">
                        	<div class="foot_logo"><a href="index.html"><img src="<?php echo base_url("assets/web/"); ?>img/foot_logo.png" alt="" /></a></div>    
                        	<div class="copyright">&copy; 2020 Jessica White. Professional Fashion Photography. All Rights Reserved.</div>                        
                        </div>
                        <div class="span7">
                        	<div class="foot_right_block">
                            	<div class="fright">
                                	<form action="#" method="post">
                                        <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />                                        
                                    </form>
                                </div>
                                <div class="follow_us">
                                	<ul>
                                        <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                        <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                        <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                        <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                        <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            
                            	<div class="clear"></div>
                            	<div class="foot_menu">
                            		<ul>
                                        <li><a href="index.html" class="current">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="scaffolding.html">features</a></li>
                                        <li><a href="portfolio_2columns.html">Portfolio</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                    </ul>
                            	</div>
                            </div>                            
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <!--//footer-->    

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/camera.js"></script>
    <script src="<?php echo base_url("assets/web/"); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url("assets/web/"); ?>js/superfish.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/web/"); ?>js/myscript.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			//Slider
			$('#camera_wrap_1').camera();
			
			//Featured works & latest posts
			$('#mycarousel, #mycarousel2, #newscarousel').jcarousel();													
		});		
	</script>
</body>
</html>

