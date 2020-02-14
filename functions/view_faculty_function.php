<?php
include ($_SERVER["DOCUMENT_ROOT"]."/pim/inc/connection.php");

function defaultView() {
    try
    {
        $conn = new PDO("mysql:host=".Host.";dbname=".DB."", User,Password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT f_code, f_sorder, f_name, f_lname, f_gender From Faculty");
        $stmt->execute();

        echo "<thead>
                <tr>
                    <th>F-Code</th>
                    <th>Sen-Order</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Start date</th>
                    <th>Gender</th>
                </tr>
            </thead>";
        echo "<tfoot>
            <tr>
                <th>F-Code</th>
                <th>Sen-Order</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Start date</th>
                <th>Gender</th>
            </tr>
        </tfoot>"; 
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo "<td>" . $row['f_code']."</td>";
            echo "<td>" . $row['f_sorder']. "</td>";
            echo "<td>" . $row['f_name']. "</td>";
            echo "<td>" . $row['f_lname']."</td>";
            echo "<td>" . $row['f_gender']. "</td>";
            echo "<tr/>";
        }
        
    }
     
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// try
// {
//     if(isset($_POST['login']))
//     {
//         $user = $_POST['username'];
// 	    $pass = hash("sha512",$_POST['password']);
//         $stmt = $conn->prepare("SELECT user_name, user_role, user_location FROM users where user_password = :upass and user_name = :uname LIMIT 1");
//         $stmt->bindparam(':upass', $pass);
//         $stmt->bindparam(':uname', $user);
//         $stmt->execute();
//         list($uname, $urole, $uloc) = $stmt->fetch(PDO::FETCH_NUM);
//         $_SESSION['uname'] = $uname;
//         $_SESSION['urole'] = $urole;
//         $_SESSION['uloc'] = $uloc;
//         header('Location: ../dashboard.php');
//     }
 
// }
 
// catch(PDOException $e) {
//     echo "Error: " . $e->getMessage();
// }

 