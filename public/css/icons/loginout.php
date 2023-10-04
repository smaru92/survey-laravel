<?php
session_start();
$res=session_destroy();
if($res){
	header('Location: ./login.php');
}
else{
	header('Location: ../index.php');
}


?>