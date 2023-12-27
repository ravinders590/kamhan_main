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
        	<img src="images/feedback.jpg" />
        </div>
        <div id="main_container">
        	<div id="left_content" style="background:url(images/feedback.png) no-repeat right center;">
            <h2 style="font-family: 'Ubuntu Condensed', sans-serif;">Feedback</h2>
            <p>
            <h1 style="font-family: 'Ubuntu Condensed', sans-serif; font-size:15px">Write a feedback</h1>
            <table>
            	<tr>
                	<td style="width:230px;"><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Name</font></td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                	<td><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Phone</font></td>
                    <td><input type="text" name="phone" /></td>
                </tr>
                <tr>
                	<td><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Email</font></td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                	<td><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Select Rating</font></td>
                    <td>
                    	<select name="rating">
                        	<option value="None">&nbsp;Please Select&nbsp;&nbsp;&nbsp;</option>
                        	<option value="Excellent">&nbsp;Excellent</option>
                        	<option value="Very Good">&nbsp;Very Good</option>
                            <option value="Good">&nbsp;Good</option>
                            <option value="Average">&nbsp;Average</option>
                            <option value="Poor">&nbsp;Poor</option>
                            <option value="Very Poor">&nbsp;Very Poor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Did you buy any product from us?</font></td>
                    <td><input type="radio" value="No" name="answer" /> No&nbsp;&nbsp;<input type="radio" value="Yes" name="answer" /> Yes</td>
                </tr>
                <tr>
                	<td><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">If yes, Please provide the name</font></td>
                    <td><input type="text" name="product_name" /></td>
                </tr>
                <tr>
                	<td valign="top"><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Description</font></td>
                    <td><textarea name="description"></textarea></td>
                </tr>
                <tr>
                	<td valign="top"><font style="font-family: 'Ubuntu Condensed', sans-serif; font-size:14px">Message</font></td>
                    <td><textarea name="message"></textarea></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="reset" name="reset" value="Clear" class="button" />&nbsp;&nbsp;<input type="submit" name="send_feedback" value="Send" class="button" /></td>
                </tr>
                <tr>
                	<td></td>
                    <td></td>
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
