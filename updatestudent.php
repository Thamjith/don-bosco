<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body id="updatestudent">
    <div id="back-btn">
        <a href="./admin.html">&#8249;</a>
    </div>
    <div id="updateregister">
        <form action="" method="post">
            <label for="">Enter the Register No:</label>
            <input type="text" name="register_no">
            <button type="submit" name="submit">submit</button>
        </form>
    </div>

    <?php
        include('dbconnection.php');
        if(isset($_POST['submit']))
        {
            $regno = $_POST['register_no'];
            $sql = "select * from student where register_no = '$regno'";
            $result = mysqli_query($con,$sql);
            if(!$result)
            {
                die('could not fetch data: '.mysqli_error($conn) );
            }
            $array = mysqli_fetch_array($result);
        }
    ?>

    <div id="form-table">      
        <form action="" method="post" id="">
                <p>
                    <label for="">First Name :</label>
                    <input type="text" name="firstname" value="<?php echo $array['1']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Last Name :</label>
                    <input type="text" name="lastname" value="<?php echo $array['2']?>" id="" required>
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
</body>
</html>