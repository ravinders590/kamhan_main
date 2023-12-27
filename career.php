<?php include_once('inc/conf.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
<!--
function validate()
{
   if( document.myForm.fname.value == "" )
   {
     alert( "Please enter your first name!" );
     document.myForm.fname.focus() ;
     return false;
   }
   if( document.myForm.lname.value == "" )
   {
     alert( "Please enter your last name!" );
     document.myForm.lname.focus() ;
     return false;
   }   
   if( document.myForm.date.value == "" )
   {
     alert( "Please enter date of birth!" );
     document.myForm.date.focus() ;
     return false;
   }
   if( document.myForm.mobile.value == "" ||
           isNaN( document.myForm.mobile.value ) ||
           document.myForm.mobile.value.length != 10 )
   {
     alert( "Your Mobile number should contain 10 digits atleast." );
     document.myForm.mobile.focus() ;
     return false;
   }
   if( document.myForm.email.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.email.focus() ;
     return false;
   }
   if( document.myForm.qualification.value == "" )
   {
     alert( "Please provide your qualification!" );
     return false;
   }
   if( document.myForm.experience.value == "" )
   {
     alert( "Please enter experience!" );
     return false;
   }
   if( document.myForm.pin_code.value == "" )
   {
     alert( "Please provide your PIN Code!" );
     document.myForm.pin_code.focus() ;
     return false;
   }
   return( true );
}
//-->
</script>	
</head>

<body>
    	<?php include_once('inc/header.php'); ?>  
        <div style="width:1100px; background:#999999; margin:0 auto; height:200px; display:block">
        <img src="images/career.jpg" />
        	
        </div>
        <div id="main_container">
        	<div id="left_content" style="background:url(images/career.png) no-repeat right bottom">
            <h2 style="font-family:New Century Schoolbook, serif;">Career</h2>
            <p>
            <h1 style="font-family:New Century Schoolbook, serif; font-size:14px;">Upload your resume.</h1>
            <form name="myForm" method="post" action="" onsubmit="return(validate());">
            <table style="height:360px;">
            	<tr>
                	<td style="width:180px;"><font style="font-family:New Century Schoolbook, serif; font-size:14px">First Name </font><font style="color:#950000">*</font></td>
                    <td><input type="text" name="fname" class="career_text" /></td>
                </tr>
                <tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Last Name </font><font style="color:#950000">*</font></td>
                    <td><input type="text" name="lname" class="career_text" /></td>
                </tr>
                <tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Date of Birth </font><font style="color:#950000">*</font></td>
                    <td><input type="text" name="date" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Mobile </font><font style="color:#950000">*</font></td>
                    <td><input type="text" name="mobile" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Email </font><font style="color:#950000">*</font></td>
                    <td><input type="text" name="email" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Qualification</font></td>
                    <td><input type="text" name="qualification" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Current Job Title</font></td>
                    <td><input type="text" name="jobtitle" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Total Experience</font></td>
                    <td><input type="text" name="experience" class="career_text" /></td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Present Company</font></td>
                    <td><input type="text" name="present_company" class="career_text" /></td>
                </tr>
                <tr>
                	<td colspan="2">
                    <font style="font-family:New Century Schoolbook, serif; font-size:14px">*(if not working currently, please write NA)</font>
                    </td>
                </tr>
            	<tr>
                	<td><font style="font-family:New Century Schoolbook, serif; font-size:14px">Attach Resume</font></td>
                    <td><input type="file" name="resume" /></td>
                </tr>
            	<tr>
                	<td></td>
                    <td><input type="reset" name="clear" value="Clear" class="button" />&nbsp; <input type="submit" name="submit_resume" value="Send" class="button" /></td>
                </tr>
            </table>
            </form>
            </p>
            </div>
			<?php include_once('inc/sidebar.php'); ?>
        </div>
        <div class="clear"></div>
        <?php include_once('inc/footer.php'); ?>
</body>
</html>
