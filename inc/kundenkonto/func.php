<?php
<<<<<<< HEAD
$vname = ''; $nname = ''; $strasse = ''; $hausnr = ''; $plz = ''; $ort = ''; $error = 0; $h = 1;
$email = '';
if($_POST['kundenkonto'] === "1" && isset($_POST['kundenkonto'])){
        $h = 0;
	
	$suchmuster_string = '/^[a-zA-ZÖÜöäü]{3,}$/';
        $suchmuster_zahlen = '/^[0-9]{4,5}$/';
        $suchmuster_nr = '/^[0-9]{1,5}$/';
        $suchmuster_mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/';

        if(preg_match($suchmuster_string, $_POST['vname'])){
                $vname = $_POST['vname'];
        }
        else{
                $error += 1;
        }
        if(preg_match($suchmuster_string, $_POST['nname'])){
                $nname = $_POST['nname'];
        }
        else{
                $error += 2;
        }
        if(preg_match($suchmuster_string, $_POST['strasse'])){
                $strasse = $_POST['strasse'];
        }
        else{
                $error += 4;
        }

        if(preg_match($suchmuster_nr, $_POST['hausnr'])){
                $hausnr = $_POST['hausnr'];
        }
        else{
                $error += 8;
	} 
        if(preg_match($suchmuster_zahlen, $_POST['plz'])){
                $plz = $_POST['plz'];
        }
        else{
                $error += 16;
	} 
        if(preg_match($suchmuster_string, $_POST['ort'])){
                $ort = $_POST['ort'];
        }
        else{
                $error += 32;
	} 
        if(preg_match($suchmuster_mail, $_POST['email'])){
                $email = $_POST['email'];
        }
        else{
                $error += 64;
	} 
/*
        if(preg_match($suchmuster_zahlen, $_POST['plz'])){
                $plz = $_POST['plz'];
        }
        else{
                $error += 2;
        }

        if(preg_match($suchmuster_string, $_POST['ort'])){
                $ort = $_POST['ort'];
        }
        else{
                $error += 4;
	} */
}

/*




if(isset($_POST["email"]) && isset($_POST['kundenkonto'])){
=======
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


>>>>>>> a826fa39d734352798208e466ba3d1e981b75743
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
<<<<<<< HEAD
 
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
=======
 */
>>>>>>> a826fa39d734352798208e466ba3d1e981b75743

}
 */
?>
