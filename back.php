<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "don_bosco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$salt = 'cs';

$password = md5($salt.$_POST['passwords']);
$result = $conn("SELECT firstname FROM student
                WHERE userid = '".mysql_real_escape_string($_POST['email'])."'
                AND passwords = '$password'");

if (mysql_num_rows($result) < 1) {
    /* Access denied */
    echo "The username or password you entered is incorrect.";
} 
else {
    $_SESSION['id'] = mysql_result($result, 0, 'id');
    #header("Location: ./");
    echo "Hello $_SESSION[id]!";
}





