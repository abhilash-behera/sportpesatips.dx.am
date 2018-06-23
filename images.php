<?php 

   
	$imageid= date('YmdHis');
	$imglink=$_POST['imglink'];
	$imgname= "banner1";
	$picextension =$_FILES['image']['name'];
	$extension = strtolower(substr($picextension, strpos($picextension , '.') + 1));
	$size = $_FILES['image']['size'];
	$type = $_FILES['image']['type'];
	$uploadtime=date("h:i:s a");
	$uploaddate=date("d/m/Y");
	
	move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$imgname.'.'.$extension);
			
    
		require("include/db.php");
		
		//table for images
		 $mysqli->query("
		CREATE TABLE IF NOT EXISTS `images` (
		  `imgid` bigint NOT NULL,
		  `imglink` varchar(500) NOT NULL,
		  `imgname` varchar(100) NOT NULL,
		  `extension` varchar(100) NOT NULL,
		  `size` varchar(100) NOT NULL,
		  `type` varchar(100) NOT NULL,
		  `uploadtime` varchar(100) NOT NULL,
		  `uploaddate` varchar(100) NOT NULL,  
		  `views` varchar(100) NOT NULL,
		  `likes` varchar(100) NOT NULL,
		  PRIMARY KEY (`imgid`)
		)
		")or die($mysqli->error . __LINE__);
		
		$mysqli->query("TRUNCATE TABLE `images`")or die($mysqli->error . __LINE__);
		
		$mysqli->query("INSERT INTO `images` ( `imgid`, `imglink`, `imgname`, `extension`, `size`, `type`, `uploadtime`, `uploaddate`, `views`, `likes`)
		VALUES ('$imageid','$imglink','$imgname','$extension','$size','$type','$uploadtime','$uploaddate',1,1)")or die($mysqli->error . __LINE__);	
			
			



?>