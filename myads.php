<?php session_start();?>
<?php 
if (!isset($_SESSION['pesatips'])) {
    header('Location: login.php');
    die();
}

?>
<html>
<head>
<title>HOME </title>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="ur motto is: life changer, nation changer and world changer." />
	
<?php include("include/bootstrap/bootstraplinks.php");?>

	<script src="js/myads.js"></script>	      
	
</head>
<body Style="background:red; padding:8px;"> 
<div class="container"  style="  border:solid white 2px; border-radius:10px;  background:rgba(255,255,255,0.7); padding:8px;">

<?php include('mainheader.php');?>
   
   <!-- ############################################################################################################### -->
	<!--My Profile-->	
	
		<div class="col-sm-4"><center>
		<form id="images" method="post" action="" enctype="multipart/form-data" >
				 <center>upload image <br />
				    <img id="previewing" src="img/imgplaceholder.jpg" width="230" class="img img-responsive img-thumbnail"><br />
				 </center><br/>
				 <span class="pull-right"><b>Note:</b> Recommended image size is <font color="red">350 x 50 </font> pixels </span><br />
				 <br />
				 
			<input type="file" class="form-control" name="image" id="image" accept="image/*"  required /><br/>
			
			
			Image link:	 
			<input class="form-control" type="text" name="imglink" required="required"  placeholder="Image Link"><br />	 
			<br/>		
			<input type="submit" name="submit" class="btn btn-success" value="UPLOAD">		
		</form>
		</center>
		</div>
	<!--end of My Profile-->
	
	<!-- ############################################################################################################### -->
	
	
	<!-- ############################################################################################################### -->
	<!--My display image-->	
	
		<div class="col-sm-offset-2 col-sm-5"><center>
		<h2> AD Preview </h2>
		<?php 
		require("include/db.php");
		$adimg = $mysqli->query("SELECT * FROM images");
		$count=0;
		while($imgdetails = $adimg->fetch_array()){
			echo '<a href="'.$imgdetails['imglink'].'"  ><img class="img img-responsive" style="width:350px;height:50px;" src="img/'.$imgdetails['imgname'].'.'.$imgdetails['extension'].'" ></a> <br />';
			echo '<b>LINK:</b><br />'.$imgdetails['imglink'].'<br />';
			
			echo '<button class="btn btn-danger btn-sm " onclick="del(1)" > <span class="glyphicon glyphicon-trash"></span> DELETE </button>';
			$count++;
		}
		
		if($count == 0){
			echo "<h3> No AD available </h3>";
		}
		
		
			
		?>
		
		
		
		
		</center>
		</div>
	<!--end of My Profile-->
	
	<!-- ############################################################################################################### -->
	

</div>

</body>
</html>