<?php
$vname = ''; $nname = ''; $strasse = ''; $hausnr = ''; $plz = ''; $ort = ''; $error = 0; $h = 1;
$email = ''; $password1 = ''; $password2=''; $phone='';

if($_POST['kundenkonto'] === "1" && isset($_POST['kundenkonto'])){
        $h = 0;
	
	$suchmuster_string = '/^[a-zA-ZÖÜöäü]{3,}$/';
        $suchmuster_zahlen = '/^[0-9]{4,5}$/';
        $suchmuster_nr = '/^[0-9]{1,5}$/';
        $suchmuster_mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/';
	#$suchmuster_passwort = '/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?\*\'\}])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?\*\'\}\{\]\[]{4,20}$/';
	$suchmuster_passwort = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{4,}$/'; 
	$suchmuster_phone = '/^[0-9\+\-]{5,}$/';


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
        if($_POST['password1'] == $_POST['password2']){
                $password = $_POST['password1'];
        }
        else{
                $error += 128;
	} 
        if(preg_match($suchmuster_phone, $_POST['phone'])){
                $phone = $_POST['phone'];
        }
        else{
                $error += 256;
	} 
}


function kundenKontoAnlegen(){
        // Create connection
        $conn = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
        // Check connection
        if ($conn->connect_error) {
        	die("Connection failed: " . $conn->connect_error);
	}

	$pass = password_hash($_POST['password1'], PASSWORD_DEFAULT);

	$sql = 'INSERT INTO ws_kunde (kid,vname,nname,strasse,hausnr,plz,ort,email,passwd,tel,geb) '.
		'VALUES (NULL, "'.$_POST['vname'].'","'.$_POST['nname'].'","'.$_POST['strasse'].'","'.
		$_POST['hausnr'].'","'.$_POST['plz'].'","'.$_POST['ort'].'","'.$_POST['email'].'","'.
		$pass.'","'.$_POST['phone'].'","'.$_POST['geburtsdatum'].'" )';

	if ($conn->query($sql) === TRUE) {
		$kundenkonto = "Kundenkonto wurde erfolgreich angelegt";
        } else {
		$kundenkonto = "Kundenkonto konnte nicht angelegt werden, da die Mail-Adresse schon vergeben ist.";
        }
        $conn->close();
	return $kundenkonto;
}

?>
