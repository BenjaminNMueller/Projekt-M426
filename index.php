<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body style = "background-color:grey;">
<?php
	$servername = "localhost";
	$user = "quotout";
	$pw = "qu0t_";
    $db = "phpmyadmin";

	$con = new mysqli($servername, $user, $pw, $db);

	if($con->connect_error) {
	   die("-1".$con->connect_error);
	}
    $zufallszahl = rand(1,10);
    $sql = "SELECT * FROM citation WHERE ID = ". $zufallszahl;
    $res = $con->query($sql);
        
    if($res->num_rows > 0) {
        while($i = $res->fetch_assoc()){
            echo  '<h1>'.$i ["quote"].'</h1>';
            echo  '<h3>'.$i ["author"].'</h3>';
        }
    }
    else{
        echo "-1" . $con->error;
    }
    
    $con->close();
?>
    </body>
</html>