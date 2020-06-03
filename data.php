<?php
    header('Content-Type: application/json; charset=utf-8');
	$servername = "localhost";
	$user = "quotout";
	$pw = "qu0t_";
    $db = "citation";
    $hits = 0;

	$con = new mysqli($servername, $user, $pw, $db);

	if($con->connect_error) {
	   die("-1".$con->connect_error);
	}
    $zufallszahl = rand(1,10);
    $sql = "SELECT * FROM citation WHERE ID = ". $zufallszahl;
    $res = $con->query($sql);
        
    if($res->num_rows > 0) {
        while($i = $res->fetch_assoc()){
            $output = json_encode($i);
            $hits = $i["hits"];
            $hits = $hits +1;
            $sql = "UPDATE citation SET hits = ".$hits ." WHERE ID= ".$zufallszahl;
            $con->query($sql);
        }
    }
    else{
        $a = "-1";
        print json_encode($a);
    }

    echo $output;
    
    $con->close();
?>