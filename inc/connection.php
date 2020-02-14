<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/pim/inc/app-config.php");
try {
    $conn = new PDO("mysql:host=".Host.";dbname=".DB."", User,Password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>