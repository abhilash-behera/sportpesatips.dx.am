<?php session_start(); 
	
	if(date("H") == '23' || date("H") == '22' || date("H") == '21' ){
		$mysay = date("d") + 1;
		$query = "SELECT * FROM games WHERE date = '".date("Y")."-".date("m")."-".$mysay."' ORDER BY date desc,time desc limit 30 ";
	
	}else{
		$query = "SELECT * FROM games WHERE date = CURDATE() ORDER BY date desc,time desc limit 30 ";
	
	}
	require("include/db.php");
	$games = $mysqli->query($query);
        while($row = $games->fetch_array(MYSQL_ASSOC)) {
            $games_array[] = $row;
        }
        header('Content-Type: application/json');
        $json=new \stdClass();
        $json->data=$games_array;
        echo json_encode($json);
?>