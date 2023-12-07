<?php
session_start();

include_once("inc/config.php");
include_once("inc/login.php");
include_once("inc/head/index.html");
include_once("inc/svg/index.html");
include_once("inc/suche_popup/index.html");
include_once("inc/header/index.html");

# Eigentlichen Content laden:
#
if(isset($_GET['id'])){
        include_once('html/'.$_GET['id']);
}else{
        include_once("html/start/index.html");
}

include_once("inc/footer/index.html");
include_once("inc/footer-bottom/index.html");

?>
