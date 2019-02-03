<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "don_bosco";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

mysqli_select_db($conn,"student");

if(isset($_POST['submit']))
{
    $register_no = $_POST['register_no'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $fathername = $_POST['fathername'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $mothername = $_POST['mothername'];
    $motheroccupation = $_POST['motheroccupation'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $emailid = $_POST['emailid'];
    $yoj = $_POST['yoj'];
    $course = $_POST['course'];

    $sql = "insert into student(register_no,firstname,lastname,gender,dob,fathername,fatheroccupation,mothername,motheroccupation,address,phoneno,emailid,yoj,course)
    values('$register_no','$firstname','$lastname','$gender','$dob','$fathername','$fatheroccupation','$mothername','$motheroccupation','$address','$phoneno','$emailid','$yoj','$course')";

    $dbsend = mysqli_query($conn,$sql);

    if(!$dbsend)
    {
        die('could not enter data: '.mysqli_error($conn) );
    }
    echo "Entered data successfully\n";
}

mysqli_close($conn);
?>





