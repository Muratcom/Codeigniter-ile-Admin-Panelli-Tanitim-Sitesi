<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>murat yazılım | prof olan biziz </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url("assets/web/"); ?>css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" id="camera-css"  href="<?php echo base_url("assets/web/"); ?>css/camera.css" type="text/css" media="all">
<link href="<?php echo base_url("assets/web/"); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url("assets/web/"); ?>css/theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/web/"); ?>css/skins/tango/skin.css" />
<link href="<?php echo base_url("assets/web/"); ?>css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    
</head>
<body>
	<!--header-->
    <div class="header">
    	<div class="wrap">
        	<div class="navbar navbar_ clearfix">
            	<div class="container">
                    <div class="row">
                        <div class="span4">
                        	<div class="logo"><a href="index.html"><img src="<?php echo base_url("assets/web/"); ?>img/logo.png" alt="" /></a></div>                        
                        </div>
                        <div class="span8">
                        	<div class="follow_us">
                                <ul>
                                    <li><a href="#" class="facebook">Facebook</a></li>
                                    <li><a href="#" class="vimeo">Vimeo</a></li>
                                    <li><a href="#" class="tumbrl">Tumbrl</a></li>
                                    <li><a href="#" class="twitter">Twitter</a></li>
                                    <li><a href="#" class="delicious">Delicious</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <nav id="main_menu">
                                <div class="menu_wrap">
                                    <ul class="nav sf-menu">
                                    <?php

                                     foreach ($menucek as $menu) {?>
                                    	
                                    	 <li ><a href="<?php echo base_url("$menu->menu_link"); ?>"><?php echo $menu->menu_ad; ?></a></li>
                                 <?php   } ?>  
                                     
                                      
                                      
                                    </ul>
                                </div>
                             </nav>                              
                        </div>
                    </div>                
                </div>
             </div>
        </div>    
    </div>
    <!--//header-->    