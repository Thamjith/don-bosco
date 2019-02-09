<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>add student</title>
</head>
<body id="addstudentbody">
    <div id="nav">
        <div id="back-btn">
            <a href="./admin.html">&#8249;</a>
        </div>
    </div>
    <div id="form-table">
        <form action="" method="post" id="addstudent">
            <p>
                <label for="">Register No:</label>
                <input type="text" name="register_no" id="" required>
            </p>
            <br>
            <p>
                <label for="">First Name :</label>
                <input type="text" name="firstname" id="" required>
            </p>
            <br>
            <p>
                <label for="">Last Name :</label>
                <input type="text" name="lastname" id="" required>
            </p>
            <br>
            <p>
                <label for="">Gender</label>
                Male :
                <input type="radio" name="gender" value="male">
                Female :
                <input type="radio" name="gender" value="female">
            </p>
            <br>
            <p>
                <label for="">Date Of Birth</label>
                <input type="date" name="dob" id="" required>
            </p>
            <br>
            <p>
                <label for="">Father's Name :</label>
                <input type="text" name="fathername" id="" required>
            </p>
            <br>
            <p>
                <label for="">Father's Occupation :</label>
                <input type="text" name="fatheroccupation" id="" required>
            </p>
            <br>
            <p>
                <label for="">Mother's Name :</label>
                <input type="text" name="mothername" id="" required>
            </p>
            <br>
            <p>
                <label for="">Mother's Occupation :</label>
                <input type="text" name="motheroccupation" id="" required>
            </p>
            <br>
            <p>
                <label for="">Address :</label>
                <textarea name="address" id="" cols="25" rows="5"></textarea>
            </p>
            <br>
            <p>
                <label for="">Phone No :</label>
                <input type="text" name="phoneno" id="" required>
            </p>
            <br>
            <p>
                <label for="">E-Mail ID</label>
                <input type="email" name="emailid" id="" placeholder="example@gmail.com" required>
            </p>
            <br>
            <p>
                <label for="">Year Of Join</label>
                <input type="date" name="yoj" id="" required>
            </p>
            <br>
            <p>
                <label for="">Course</label>
                <select name="course" id="">
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="BCOM">B.COM</option>
                    <option value="BA">BA ENGLISH</option>
                    <option value="MCOM">MCOM</option>
                </select>
            </p>
            <br>
            <p>
                <button type="submit" form="addstudent" name="submit">submit</button>
            </p>
        </form> 
    </div>

    <?php
        include('dbconnection.php');
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
            echo '<script langauge="javascript"> alert("Entered data successfully") </script>';
        }
        mysqli_close($conn);
        exit();
?>
</body>
</html>