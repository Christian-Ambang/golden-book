<?php

try
{
	$pdo = new PDO('mysql:host=;dbname=', '', '');
	$pdo->exec('SET NAMES utf8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}
