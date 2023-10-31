<?php
$kundenkonto = "";
if(isset($_POST['kundenkonto']) && $_POST['kundenkonto'] == 1){
    # Test auf übergebe"ne Parameter
    $error = 0;
    $zeichenkette = "A-Za-z ";
    $zeichenkette_strasse = "A-Za-z.0-9";
    $nummern = "0-9";

    if(preg_match($_POST['vname'], $zeichenkette)){
        $_SESSION['vname'] = $_POST['vname'];
    }
    else {
        $error = 1;
    }
    if(preg_match($_POST['nname'], $zeichenkette)){
        $_SESSION['nname'] = $_POST['nname'];
    }
    else {
        $error += 2;
    }
    if(preg_match($_POST['strasse'], $zeichenkette_strasse)){
        $_SESSION['strasse'] = $_POST['strasse'];
    }
    else {
        $error += 4;
    }
    if(preg_match($_POST['plz'], $nummern)){
        $_SESSION['plz'] = $_POST['plz'];
    }
    else {
        $error += 8;
    }
    if(preg_match($_POST['ort'], $zeichenkette)){
        $_SESSION['ort'] = $_POST['ort'];
    }
    else {
        $error += 16;
    }


/*	$servername = "localhost";
        $username = "roesslerma";
        $password = "passwort";
        $dbname = "roesslerma";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
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
 */

}

?>
