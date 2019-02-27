<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>add/update mark</title>
</head>
<body id="add-mark">

    <div id="nav">
        <div id="back-btn">
            <a href="./admin.php">&#8249;</a>
        </div>
    </div>
    <div id="nav-reg">
        <form action="mark.php" method="post">
            <label for="">Enter the Register No:</label>
            <input type="text" name="registerno">
            <button type="submit" name="submit">submit</button>
        </form>
    </div>

    <?php
        include('dbconnection.php');
        //session_start();
        mysqli_select_db($conn,"student");
        if(isset($_POST['submit']))
        {
            $registerno = $_POST['registerno'];
            $sql = mysqli_query($conn,"select * from student where register_no = '$registerno'");
            //$_SESSION['userid'] = $registerno;
            if(!$sql)
            {
                die('error: <br>'.mysqli_error($conn) );
            }
            while($array = mysqli_fetch_array($sql))
            {?>
                <script>
                    alert('<?php echo $array[1]." ".$array[1] ;?>')
                </script>
            <?php
            }
        }
    ?>

    <div id="sem-nav">
      <a href="#sem1">First</a>
      <a href="#sem2">Second</a>
      <a href="#sem3">Third</a>
      <a href="#sem4">Fourth</a>
      <a href="#sem5">Fifth</a>
      <a href="#sem6">Sixth</a>
    </div>



    <div class="form-table">
        <div>
            <form action="" method="post" id="sem1">
                <p>
                    <label for="">register no</label>
                    <input type="text" name="registerno">
                </p>
                <p>
                    <label for="">Listening and Speaking skills</label>
                    <input type="text" name="englishsem1">
                </p>
                <p>
                    <label for="">Mathematics I</label>
                    <input type="text" name="mathssem1">
                </p>
                <p>
                    <label for="">Introduction to IT</label>
                    <input type="text" name="it">
                </p>
                <p>
                    <label for="">Degital Electronics</label>
                    <input type="text" name="de">
                </p>
                <p>
                    <label for="">Introduction to programming</label>
                    <input type="text" name="c">
                </p>
                <p>
                    <label for="">Programming Lab – I</label>
                    <input type="text" name="clab">
                </p>
                <p>
                    <label for="">PC Software Lab</label>
                    <input type="text" name="pclab">
                </p>
                <p>
                    <button type="submit" name="sem1" form="sem1">save</button>
                </p>
            </form>
            <?php
                if(isset($_POST['sem1']))
                {
                    $registerno = $_POST['registerno'];
                    $englishsem1 = $_POST['englishsem1'];
                    $mathssem1 = $_POST['mathssem1'];
                    $it = $_POST['it'];
                    $de = $_POST['de'];
                    $c = $_POST['c'];
                    $clab = $_POST['clab'];
                    $pclab = $_POST['pclab'];
    
                    mysqli_select_db($conn,"studentmarklist");
                    $sql = "insert into studentmarklist(englishsem1,mathssem1,it,de,c,clab,pclab)
                    values('$englishsem1','$mathssem1','$it','$de','$c','$clab','$pclab')
                    where register_no = $registerno";
    
                    $dbsend = mysqli_query($conn,$sql);
    
                    if(!$dbsend)
                    {
                        die('could not enter data: <br>'.mysqli_error($conn) );
                    }
                    echo '<script langauge="javascript"> alert("Entered data successfully") </script>';
                }
            ?>
        </div>
        <!--<div id="sem2">
            <form action="post">
                <p>
                    <label for="">Writing and Presentation Skills</label>
                    <input type="text" name="english-sem2">
                </p>
                <p>
                    <label for="">Mathematics II</label>
                    <input type="text" name="maths-sem2">
                </p>
                <p>
                    <label for="">Environmental Studies</label>
                    <input type="text" name="evs">
                </p>
                <p>
                    <label for="">Object Oriented Programming</label>
                    <input type="text" name="cpp">
                </p>
                <p>
                    <label for="">Data Structures</label>
                    <input type="text" name="ds">
                </p>
                <p>
                    <label for="">Programming Lab – II</label>
                    <input type="text" name="cpplab">
                </p>
                <p>
                    <label for="">Data Structure Lab</label>
                    <input type="text" name="ds-lab">
                </p>
                <p>
                    <button type="submit" form="sem1">save</button>
                </p>
            </form>
        </div>
        
        <div id="sem3">
            <form action="post">
                <p>
                    <label for="">Computer Oriented Numerical Methods</label>
                    <input type="text" name="maths-3">
                </p>
                <p>
                    <label for="">Computer Networks</label>
                    <input type="text" name="network">
                </p>
                <p>
                    <label for="">Operating Systems</label>
                    <input type="text" name="os">
                </p>
                <p>
                    <label for="">Computer Organization & Architecture</label>
                    <input type="text" name="coa">
                </p>
                <p>
                    <label for="">Programming in JAVA</label>
                    <input type="text" name="java">
                </p>
                <p>
                    <label for="">Programming Lab – IV</label>
                    <input type="text" name="java-lab">
                </p>
                <p>
                    <label for="">Numerical Methods Lab</label>
                    <input type="text" name="maths-lab">
                </p>
                <p>
                    <button type="submit">save</button>
                </p>
            </form>
        </div>
        
        <div id="sem4">
            <form action="post">
                <p>
                    <label for="">Introduction to Information Security</label>
                    <input type="text" name="isecurity">
                </p>
                <p>
                    <label for="">Visual Tools</label>
                    <input type="text" name="vb">
                </p>
                <p>
                    <label for="">Database Management Systems</label>
                    <input type="text" name="dbms">
                </p>
                <p>
                    <label for="">Design and Analysis of Algorithms</label>
                    <input type="text" name="daa">
                </p>
                <p>
                    <label for="">System Software</label>
                    <input type="text" name="ss">
                </p>
                <p>
                    <label for="">Visual Tools Lab</label>
                    <input type="text" name="vb-lab">
                </p>
                <p>
                    <label for="">Databases Lab</label>
                    <input type="text" name="dbms-lab">
                </p>
                <p>
                    <button type="submit">save</button>
                </p>
            </form>
        </div>
        
        <div id="sem5">
            <form action="post">
                <p>
                    <label for="">Free and Open Source Softwares (FOSS)</label>
                    <input type="text" name="foss">
                </p>
                <p>
                    <label for="">Computer Graphics</label>
                    <input type="text" name="cg">
                </p>
                <p>
                    <label for="">Internet Programming</label>
                    <input type="text" name="ip">
                </p>
                <p>
                    <label for="">English/Business Informatics</label>
                    <input type="text" name="english-sem5">
                </p>
                <p>
                    <label for="">System Analysis & Design</label>
                    <input type="text" name="sad">
                </p>
                <p>
                    <label for="">Internet Programming Lab</label>
                    <input type="text" name="ip-lab">
                </p>
                <p>
                    <label for="">Computer Graphics Lab</label>
                    <input type="text" name="cg-lab">
                </p>
                <p>
                    <button type="submit">save</button>
                </p>
            </form>
        </div>
        
        <div id="sem6">
            <form action="post">
                <p>
                    <label for="">Business Informatics</label>
                    <input type="text" name="bi">
                </p>
                <p>
                    <label for="">Object Oriented Analysis and Design</label>
                    <input type="text" name="ooad">
                </p>
                <p>
                    <label for="">Data Mining & Data Warehousing</label>
                    <input type="text" name="mining">
                </p>
                <p>
                    <label for="">Software Testing</label>
                    <input type="text" name="st">
                </p>
                <p>
                    <label for="">Free and Open Source Software (FOSS) Lab</label>
                    <input type="text" name="foss-lab">
                </p>
                <p>
                    <label for="">Major Project & VIVA</label>
                    <input type="text" name="project">
                </p>
                <p>
                    <button type="submit">save</button>
                </p>
            </form>
        </div>
    </div>-->

    

</body>
</html>