<?php
if(empty($_SESSION['uname'])){header('Location: ./index.php');}
if(empty($_SESSION['urole'])){header('Location: ./index.php');}
if(empty($_SESSION['uloc'])){header('Location: ./index.php');}
?>