<?php 

session_start();
unset($_SESSION['face_access_token']);
		header("Location: login.php");
