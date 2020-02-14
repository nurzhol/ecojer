<?php
include ($_SERVER["DOCUMENT_ROOT"]."/pim/inc/connection.php");
session_start();

try
{
    if(isset($_POST['login']))
    {
        $user = $_POST['username'];
	    $pass = hash("sha512",$_POST['password']);
        $stmt = $conn->prepare("SELECT user_name, user_role, user_location FROM users where user_password = :upass and user_name = :uname LIMIT 1");
        $stmt->bindparam(':upass', $pass);
        $stmt->bindparam(':uname', $user);
        $stmt->execute();
        list($uname, $urole, $uloc) = $stmt->fetch(PDO::FETCH_NUM);
        $_SESSION['uname'] = $uname;
        $_SESSION['urole'] = $urole;
        $_SESSION['uloc'] = $uloc;
        header('Location: ../dashboard.php');
    }
 
}
 
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

 