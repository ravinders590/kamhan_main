<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php include_once('inc/header.php'); ?>

<div id="slider">
	<img src="images/machine.png" />
</div>

<div id="container">
	<?php include_once('inc/sidebar.php'); ?>
    <div id="content">
    	<h2>Products > PVC Series</h2>
        <!--span>LD-687AM - COMPUTER-CONTROL AUTO-GLUE TOE LASTING MACHINE</span><br /><br /-->
<div class="contentDiv" style="padding-top:20px;"></div>
	<div id="AllproductDivs" style="height:500px; overflow:auto; margin-top:10px;">
    
		<div class="productDiv">
        	<a href="pvcSeriesDip2Color.php"><img src="images/products/footwear_pvcseries/2.jpg" /></a>
            <a href="pvcSeriesDip2Color.php"><h2>PVC Dip 2 Color Machine</h2></a>
            <br />
			
            <a href="pvcSeriesDip2Color.php" class="productDivdetails">Details</a>
        </div>
         <div class="productDiv">
        	<a href="pvcSeriesDipSingleColor.php"><img src="images/products/footwear_pvcseries/22.jpg" /></a>
            <a href="pvcSeriesDipSingleColor.php"><h2>PVC Dip Single Color Machine</h2></a>
            
            <a href="pvcSeriesDipSingleColor.php" class="productDivdetails">Details</a>
        </div> 
        <div class="productDiv">
        	<a href="pvc-airblowing-machine.php"><img src="images/products/footwear_pvcseries/23.jpg" /></a>
            <a href="pvc-airblowing-machine.php"><h2>PVC Air Blowing Machine</h2></a>
            <br />
            <a href="pvc-airblowing-machine.php" class="productDivdetails">Details</a>
        </div>
        
        <div class="productDiv">
        	<a href="pvc3colormachine.php"><img src="images/products/pvc3color/24.jpg" /></a>
            <a href="pvc3colormachine.php"><h2>3 Color PVC Air Blowing Machine</h2></a>
            <br />
            <a href="pvc3colormachine.php" class="productDivdetails">Details</a>
        </div> 
         <div class="productDiv">
            <a href="pvc-injection-machine-without-injection-hole.php"><img src="images/products/pvc3color/9a.jpg" /></a>
            <a href="pvc-injection-machine-without-injection-hole.php"><h2>Pvc Injection Machine Without Injection Hole</h2></a>
            <br />
            <a href="pvc-injection-machine-without-injection-hole.php" class="productDivdetails">Details</a>
        </div> 
    	
    </div>
    </div>
</div>
<div class="clear"></div>
<?php include_once('inc/footer.php'); ?>
</body>
</html>
