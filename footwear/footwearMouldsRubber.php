<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="css/jquery.pwstabs-1.2.1.css">
</head>

<body>
<?php include_once('inc/header.php'); ?>

<div id="slider">
	<img src="images/slide.png" />
</div>

<div id="container">
	<?php include_once('inc/sidebar.php'); ?>
    <!-- -->
	<div id="content">
    	<h2>Products > RUBBER FOOTWEAR MOULDS </h2>
        <!--- Images Gallery Starts -->
		<div class="productImg1" style="width:770px!important;">
        	<div id="specialc" style="float:left; width:170px!important;">
			<a href="images/products/footwear_moulds/rubber/1.jpg" class="flipLightBox">
				<img src="images/products/footwear_moulds/rubber/1.jpg" alt="Kamhan Industrial Ltd." style="width:170px!important; border:1px solid #214594; float:left; margin-left:268px; height:200px; border-radius:10px;"  />
			</a>
            </div>
			
		</div>
        <!--- Image Gallery Ends --->
       
		<!--- Tab Set Starts --->
        <div class="tabset1">
         <div data-pws-tab="tab4" data-pws-tab-name="Videos">
            <p class="special_manage" style="margin-left:80px;">
            <iframe width="560" height="315"  src="https://www.youtube.com/embed/wt1LF0_GBZw" frameborder="0" allowfullscreen></iframe>
            </p>
         </div>
         
      </div>
        <!--- Tab Set Ends --->
    </div>
</div>
<div class="clear"></div>
<?php include_once('inc/footer.php'); ?>
</body>
</html>