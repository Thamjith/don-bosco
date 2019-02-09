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
            $sql = "select * from student where register_no = $regno";
            $result = mysqli_query($conn,$sql);
            if(!$result)
            {
                die('could not fetch data: '.mysqli_error($conn) );
            }
            //$array = mysqli_fetch_array($result);
        }
    ?>
    <div id="form-table">      
    <?php
        while($array = mysqli_fetch_array($result))
        {
    ?>
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
                    <input type="text" name="lastname" value="<?php echo $array['3']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Date Of Birth</label>
                    <input type="text" name="dob" value="<?php echo $array['4']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Father's Name :</label>
                    <input type="text" name="fathername" value="<?php echo $array['5']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Father's Occupation :</label>
                    <input type="text" name="fatheroccupation" value="<?php echo $array['6']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Mother's Name :</label>
                    <input type="text" name="mothername" value="<?php echo $array['7']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Mother's Occupation :</label>
                    <input type="text" name="motheroccupation" value="<?php echo $array['8']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Address :</label>
                    <textarea name="address" id="" cols="25" rows="5" value="<?php echo $array['9']?>"></textarea>
                </p>
                <br>
                <p>
                    <label for="">Phone No :</label>
                    <input type="text" name="phoneno" value="<?php echo $array['10']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">E-Mail ID</label>
                    <input type="email" name="emailid" id="" value="<?php echo $array['11']?>" required>
                </p>
                <br>
                <p>
                    <label for="">Year Of Join</label>
                    <input type="test" name="yoj" value="<?php echo $array['12']?>" id="" required>
                </p>
                <br>
                <p>
                    <label for="">Course</label>
                    <input type="test" name="yoj" value="<?php echo $array['13']?>" id="" required>
                </p>
                <br>
            </form>
    <?php
        }
    ?>
    </div>
</body>
</html>