<?php
session_start();
if(!isset($_SESSION['email']) && isset($_SESSION['name'])){
	header('Location:../../../../login.php');
}
?>