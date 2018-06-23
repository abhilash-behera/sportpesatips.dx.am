<?php session_start(); 
	require("include/db.php");
	$games = $mysqli->query("SELECT * FROM games ORDER BY date desc,time desc limit 30 ");
        while($row = $games->fetch_array(MYSQL_ASSOC)) {
            $games_array[] = $row;
            
        }
        header('Content-Type: application/json');
        $json=new \stdClass();
        $json->data=$games_array;
        echo json_encode($json);
?>