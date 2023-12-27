<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
    	<?php include_once('inc/header.php'); ?>  
        <div style="width:1100px; background:#999999; margin:0 auto; height:200px; display:block">
        	<img src="images/our_videos.jpg" />
        </div>
        <div id="main_container" style="height:540px;">
        	<div id="left_content" style="background:url(images/camera.png) no-repeat right center">
            <h2 style="font-family: New Century Schoolbook, serif; font-size:20px;">Our Videos</h2>
            <p>
            <table class="video_table">
            	<tr>
                	<td style="width:240px;"><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                    <td><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                </tr>
                <tr>
                	<td><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                    <td><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                </tr>
                <tr>
                	<td><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                    <td><a href="" style=" font-family: New Century Schoolbook, serif; font-size:14px">Video Heading</a><br />
                    <a href=""><img src="images/video.png" /></a></td>
                </tr>
            </table>
            </p>
            </div>
			<?php include_once('inc/sidebar.php'); ?>
        </div>
        <div class="clear"></div>
        <?php include_once('inc/footer.php'); ?>
</body>
</html>
