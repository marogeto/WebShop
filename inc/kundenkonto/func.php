<?php
$contact = "";
if(isset($_POST["email"]) && isset($_POST['contact'])){
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
	$empfaenger = 'roesslerma@elektronikschule.de';
	$betreff = $_POST['subject'];
	$nachricht = 'Nachricht von: '.$_POST['name']."\n".$_POST['message'];
	$header = array(
	    'From' => $_POST['email'],
	    'Reply-To' => $empfaenger,
	    'X-Mailer' => 'PHP/' . phpversion()
	);

	if(mail($empfaenger, $betreff, $nachricht, $header) === TRUE){
		$contact = "Nachricht versendet<br>".$nachricht;
	}
	else{
		$contact = "Nachricht nicht versendet<br>";
	}

}

?>
