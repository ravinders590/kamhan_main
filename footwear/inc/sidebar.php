	<div id="sidebar">
    	<h2>Featured Categories</h2>
        <ul>
          <div id="mycssmenu">
			<ul>
            <li class="has-sub" style="background-color:#214594; color:#ffffff;"><a href="footwearMachinery.php"><span style="font-weight:bold; color:#ffffff;">Footwear Machinery</span></a>
              <li><a href="rubber-dip-shoesboots-making-machine.php">Rubber Dip Shoes/Boots Making <blink><sup><font style="font-size:10px; color:#ec0019">NEW</font></sup></blink></a></li>
            <li><a href="stuckonlineAll.php">Stuck On Line/ Lasting Machine</a></li>   
            <li><a href="pu-machines.php">PU Machines</a></li>
            <li><a href="allpvcseries.php">PVC Series</a></li>
            <li><a href="pvc-rain-boot.php">PVC Rain Boot / Safety Boot Machine <blink><sup><font style="font-size:10px; color:#ec0019">NEW</font></sup></blink></a></li>
            
            <li><a href="allTprInjection.php">TPR Machines</a></li>
            <li><a href="solepress.php">Rubber Sole Press Machine</a></li>
            <li><a href="foamingpress.php">EVA Sheet Foaming Press</a></li>
            <li><a href="conveyorsStuckOnline.php">Conveyors</a></li> 
            <li><a href="vulcanisedshoes.php">Rubber Vulcanised Shoes Production Line</a></li>
            <li><a href="pvcstrapcolorAll.php">PVC Strap</a></li>
            <li><a href="firstfoaming.php">First Foaming Machine</a></li>
            <li><a href="hotcold.php">Auto EVA Hot & Cold Foaming Machine</a></li>
            <li><a href="allslipper.php">Slipper Machine</a></li>
            <li><a href="laser.php">Laser Marking Machine</a></li>
                                   
			<li><a href="sewing.php">Sewing Machine for Moccasins</a></li>
			<li><a href="lining.php">Lining Ironing Machine</a></li>
            <li><a href="eyeleting.php">Eyeleting Machine</a></li>
            <li><a href="cementing.php">Cementing & Folding Machine</a></li>
            <li><a href="trimming.php">Trimming Machine</a></li>
            <li><a href="insole.php">Insole Moulding Machine</a></li>
            <li><a href="speedpairing.php">Speed Pairing Machine</a></li>
            <li><a href="allthreadburner.php">Thread Burner</a></li>
            <li><a href="allgrinding.php">Grinding/ Roughing Machine</a></li>
            <li><a href="allgluing.php">Gluing Machine</a></li>
            <li><a href="alllineation.php">Sole Marking Machine</a></li>
			<li><a href="uvCuringmachine.php">UV Curing Machine</a></li>
			<li><a href="allHigh-frequency-machine.php">High Frequency Machine</a></li>
      <li><a href="knitting-machines.php">Knitting Machines</a></li>
      
      

			</li>
	        </ul>
			<ul>
            <li class="has-sub" style="background-color:#214594; color:#ffffff;"><a href="footwearMoulds.php"><span style="font-weight:bold; color:#ffffff;">Footwear Moulds</span></a>
            <li><a href="footwearMouldsSafetyshoes.php">Safety Shoes Moulds</a></li> 
            <li><a href="footwearMouldsSafetyshoes2.php">Safety Shoes Moulds For Rotary Machine</a></li>
            <li><a href="footwearMouldsEva.php">EVA Moulds</a></li>
			<li><a href="footwearMouldsPu.php">PU Moulds</a></li>
			<li><a href="footwearMouldstrp.php">TPR Moulds</a></li>
			<li><a href="footwearMouldsPvcStrap.php">PVC Strap Moulds</a></li>
            <li><a href="footwearMouldsairblowing.php">PVC Air Blowing Moulds</a></li>
            <li><a href="sheetmoulds.php">Sheet Moulds</a></li>
			<li><a href="footwearMouldsRubber.php">Rubber Moulds</a></li>
      </ul>
		    </li>
	</div>
        </ul>
<!--- --->
<script language="javascript" src="js/jquery-1_002.js"></script>
<script language="javascript" src="js/require.js"></script>
<script language="javascript" src="js/jquery-1.js"></script>    
<script src="script.js"></script>
<style type="text/css">
/* Base Styles */
#mycssmenu, #mycssmenu ul, #mycssmenu li, #mycssmenu a {
  list-style: none;
  position: relative;
}
#mycssmenu a {
}
#mycssmenu {
  width: 298px;
}
#mycssmenu > ul > li {
  cursor: pointer;
}
#mycssmenu > ul > li:last-child {
}
#mycssmenu > ul > li > a {
  display: block;
  color:#214594;
}
#mycssmenu > ul > li:hover {}
#mycssmenu > ul > li > a:hover {
  text-decoration: none;
  background:none !Important;
}
#mycssmenu > ul > li.active {
  border-bottom: none;
}
#mycssmenu > ul > li.active > a {
 color:#353535;
}
#mycssmenu > ul > li.active > a:hover {
 color:#ffffff;
}
#mycssmenu > ul > li.has-sub > a:after {
  content: "";
  position: absolute;
  top: 6px;
  right: 10px;
  border: 5px solid transparent;
  border-left: 5px solid #ffffff;
}
#mycssmenu > ul > li.has-sub.active > a:after {
  right: 14px;
  top: 7px;
  border: 5px solid transparent;
  border-top: 5px solid #4e5800;
}
/* Sub menu */
#mycssmenu ul ul {
  padding: 0;
  display: none;
}
#mycssmenu ul ul a {
  display: block;
  color: #214594;
  font-size: 15px;
}
#mycssmenu ul ul a:hover {}
#mycssmenu ul ul li {
}
#mycssmenu ul ul li.odd a {

}
#mycssmenu ul ul li:last-child {
  border: none;
}
.menu { position:relative; display:block;}
.fixedMenu { /* position:fixed; */ top:0px; z-index:999; }
</style>


<script>
// Calling the function
setFixMenu('.menu','fixedMenu');
function setFixMenu(element,stickyCssClass) { 
	// get the top offset of the menu element
	var menuTop = $(element).offset().top;
	// trigger the function when the windows scroll
	$(window).scroll(function(){
		// get total scrolling
		var htmlTop = $(window).scrollTop();
		// check if the scrolling is less than top offset of menu
		// then stick the menu on top by adding the stickyCssClass
		// If not then set the menu at it's default position by removing the stickyCssClass
		if (htmlTop > menuTop) {
			// add the class to stick on top
			$(element).addClass(stickyCssClass);
		} else {
			// remove the stick on top class
			$(element).removeClass(stickyCssClass);
		}
	});
} </script>
<!--- --->        
        <br />
        <h2>Quick Enquiry</h2>
        <form action="">
        <table width="100%" class="enquiry">
        	<tr>
            <td>Name <font color="#214594">*</font></td>
            <td><input type="text" name="name" /></td>
            </tr>
        	<tr>
            <td>Contact <font color="#214594">*</font></td>
            <td><input type="text" name="contact" /></td>
            </tr>
        	<tr>
            <td>Email <font color="#214594">*</font></td>
            <td><input type="text" name="email" /></td>
            </tr>
        	<tr>
            <td>Query <font color="#214594">*</font></td>
            <td><textarea name="query"></textarea></td>
            </tr>
        	<tr>
            <td></td>
            <td><input type="submit" name="send" value="Send" class="button" /></td>
            </tr>
        </table>
        </form>
        
    </div>