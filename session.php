<?php 
session_start();
$_SESSION["nom"]=$_POST["nom"];
$_SESSION["prenom"]=$_POST["prenom"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["message"]=$_POST["message"];
$_SESSION["file"]=$_FILES["file"];

	