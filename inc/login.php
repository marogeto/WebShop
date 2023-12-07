<?php
if(!isset($_SESSION['login']) && $_POST['login'] == 1) {
        // Create connection
        $conn = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
        $sql = 'SELECT passwd,nname,vname,kid  FROM ws_kunde WHERE email="'.$_POST['email'].'"';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
                $row = $result->fetch_assoc();
                if(password_verify($_POST['password'], $row["passwd"])){
                        $_SESSION['login'] = '1';
                        $_SESSION['kid'] = $row['kid'];
                        $_SESSION['nname'] = $row['nname'];
                        $_SESSION['vname'] = $row['vname'];
                        $_SESSION['email'] = $_POST['email'];
                        #echo '<pre>';
                        #print_r ($_SESSION);
                        #echo '</pre>';
                        $r = 'Sie wurden erfolgreich authentifiziert als '.$row['vname'].' '.$row['nname'];
                } else {
                        $r = 'Authetifizierung fehlgeschlagen';
                }
        }
        $conn->close();
}
?>

