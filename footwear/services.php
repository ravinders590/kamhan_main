<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="css/jquery.pwstabs-1.2.1.css">
</head>

<body>
<?php include_once('inc/header.php'); ?>

<div id="slider">
	<img src="images/services.png" />
</div>

<div id="container">
	<?php include_once('inc/sidebar.php'); ?>
    <!-- -->
		<div id="content">
    	<h2>Home > Services</h2>
        <span></span>
        
        <p>
        	<h3 style="font-size:16px; color:#214594">&nbsp;&nbsp;Technical support:</h3><br />
            <style type="text/css">
			.maroon_circles{}
			.maroon_circles li{ list-style:circle;}
			</style>
            <ul style="margin-left:20px;" class="maroon_circles">
            	<li>Free consultation services to help users make the project feasibility analysis.</li>
                <li>Series of relevant information for your reference.</li>
                <li>According to customer’s actual situation, providing equipment design style as well as equipment installation drawings and the production of the required information.</li>
                <li>Production of various grades of raw materials, technical performance, requirements, manufacturers supply relevant information and reference prices.</li>
                <li>Machinery used in the production of common troubleshooting points.</li>
                <li>Provide operational and technical personnel.</li>
            </ul>
       
        </p>
        </div>
</div>
<div class="clear"></div>
<?php include_once('inc/footer.php'); ?>
</body>
</html>