<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    	<h2>Products > THREAD BURNER </h2>
        <!--span>LD-687AM - COMPUTER-CONTROL AUTO-GLUE TOE LASTING MACHINE</span><br /><br /-->
<div class="contentDiv" style="padding-top:20px;"></div>
	<div id="AllproductDivs" style="height:500px; overflow:auto; margin-top:10px;">
    
		<div class="productDiv">
        	<a href="threadburner1.php"><img src="images/products/threadburner/1.jpg" /></a>
            <a href="threadburner1.php"><h2>LZ-A Thread Blower Machine </h2></a>
            <br />
			<br />
            <a href="threadburner1.php" class="productDivdetails">Details</a>
        </div>
         <div class="productDiv">
        	<a href="threadburner2.php"><img src="images/products/threadburner/2.jpg" /></a>
            <a href="threadburner2.php"><h2>LZ-No-scald Thread Blower Machine</h2></a>
            <br />
            <a href="threadburner2.php" class="productDivdetails">Details</a>
        </div> 
        <div class="productDiv">
        	<a href="threadburner3.php"><img src="images/products/threadburner/3.jpg" /></a>
            <a href="threadburner3.php"><h2>LZ-Thread Blower Machine (With Net Cover)</h2></a>
            <br />
            <a href="threadburner3.php" class="productDivdetails">Details</a>
        </div> 
          <div class="productDiv">
        	<a href="threadburner4.php"><img src="images/products/threadburner/4.jpg" /></a>
            <a href="threadburner4.php"><h2>LZ-Digital Display Thread Blower Machine</h2></a>
            <br />
            <a href="threadburner4.php" class="productDivdetails">Details</a>
        </div>
    	
    </div>
    </div>
</div>
<div class="clear"></div>
<?php include_once('inc/footer.php'); ?>
</body>
</html>
