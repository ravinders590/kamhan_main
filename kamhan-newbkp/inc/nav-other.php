<?php include('dbconnection.php');
?>
<nav>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                  </div>
                  <div class="side-bar">
                    <header>
               
                    <div class="close-btn">               
                      <i class="fas fa-times"></i>
                    </div>
                    <h1>Features Category</h1>
                       </header>
                    <div class="menu">
					<?php 
					$catId='';
						$sqlMainCat = "SELECT name FROM main_category where id = '1'";
						$resultMainCat = mysqli_query($connection, $sqlMainCat);
						if (!$resultMainCat) {
							die("Query failed: " . mysqli_error($connection));
						}
						$fetchMainCat = mysqli_fetch_array($resultMainCat);
						?>
                          <div class="items">
                        <a class="sub-btn"><i class="fas fa-desktop"></i><?php echo $fetchMainCat['name'];?><i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
						<?php 
						$sql = "SELECT name,cat_id,id FROM sub_category WHERE cat_id='1'";
						$result = mysqli_query($connection, $sql);
						if (!$result) {
							die("Query failed: " . mysqli_error($connection));
						}
						while ($row = mysqli_fetch_array($result)) {											
						?>
                          <a href="products.php?catId=<?php echo $row['cat_id']?>&subcatId=<?php echo $row['id'];?>" class="sub-items"><?php echo $row['name'];?></a>	
						<?php
							}
						  ?> 						  
                        </div>
                      </div>						  
						  <?php
						$sqlMainCat1 = "SELECT name FROM main_category where id NOT IN (1)";
						$resultMainCat1 = mysqli_query($connection, $sqlMainCat1);
						if (!$resultMainCat1) {
							die("Query failed: " . mysqli_error($connection));
						}
						while ($fetchMainCat1 = mysqli_fetch_array($resultMainCat1)) {
						?>
						<div class="items"><a href="products.php?prodId=<?php echo $fetchMainCat1['id'];?>"><i class="fas fa-desktop"></i><?php echo $fetchMainCat1['name'];?></a></div>						  
                       <?php							
							}
						  ?> 
                      <!--div class="items"><a href="#"><i class="fas fa-desktop"></i>Rubber Dip Shoes/Boots Making</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Stuck On Line/ Lasting Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PU Machines</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PVC Series</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PVC Rain Boot / Safety Boot Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>TPR Machines</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Rubber Sole Press Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>EVA Sheet Foaming Press</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Conveyors</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Rubber Vulcanised Shoes Production Line</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PVC Strap</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>First Foaming Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Auto EVA Hot Cold Foaming Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Slipper Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Laser Marking Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Sewing Machine for Moccasins</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Lining Ironing Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Eyeleting Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Cementing Folding Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Trimming Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Insole Moulding Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Speed Pairing Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Thread Burner</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Grinding/ Roughing Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Gluing Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Sole Marking Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>UV Curing Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>High Frequency Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Knitting Machines</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Footwear Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Safety Shoes Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Safety Shoes Moulds For Rotary Machine</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>EVA Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PU Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>TPR Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PVC Strap Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>PVC Air Blowing Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Sheet Moulds</a></div>
                      <div class="items"><a href="#"><i class="fas fa-desktop"></i>Rubber Moulds</a></div-->                      
        
                      <div class="items"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
                    </div>
                  </div>
               </nav>