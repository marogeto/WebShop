<?php
$subscribe = "";
if(isset($_POST["EMAIL"]) && isset($_POST['subscribe'])){
        // Create connection
        $conn = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
        // Check connection
        if ($conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
        }
	$sql = 'INSERT INTO ws_subscribe (mail, verifizierung) VALUES ("'.$_POST['EMAIL'].'", 0)';
        if ($conn->query($sql) === TRUE) {
		$subscribe = "New record created successfully";
        } else {
                $sql = 'DELETE FROM ws_subscribe WHERE mail = "'.$_POST['EMAIL'].'"';
                if ($conn->query($sql) === TRUE) {
         	       $subscribe = "Record deleted successfully";
                }else{
                       echo "Error: " . $sql . "<br>" . $conn->error;
                }
        }
        $conn->close();
}

?>
