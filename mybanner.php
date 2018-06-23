<div class="col-sm-4 card" id="banner" style="margin: auto; position:fixed;top:0;width: 100%; z-index:1000;" >
	<center>
	<?php 
	require("include/db.php");
		$adimg = $mysqli->query("SELECT * FROM images");		
		while($imgdetails = $adimg->fetch_array()){
			echo '<a href="'.$imgdetails['imglink'].'" ><img class="img img-responsive" style="width:350px;height:50px;" src="img/'.$imgdetails['imgname'].'.'.$imgdetails['extension'].'" ></a> <br />';
					
		}
	?>
	 
	</center>
</div>