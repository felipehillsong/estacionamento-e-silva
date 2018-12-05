<?php
session_start();
unset($_SESSION['start']);
header("Location: login.php");
?>