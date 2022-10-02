<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Criminal Management System - Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style_1.css'>
</head>
<body>
    <button name="logout" style="margin-left: 1424px;"><img src="../logout.png" style="width:10px"><a href = "logout.php">Log out</a></button>
    <div class="container">
        <div class="finaldiv">
        <span class="head1"><img src="police_logo.png" width="16.2%"></span>
        <span class="head_txt">Criminal Management System</span>
        <span class="head2"><img src="police_logo.png" width="38%"></span>
    
    <br>
    <div class="navbar">
        <ul style="margin-left:130px">
            <li><a href="addOfficer.php"><b>Add Officer</b></a></li>
            <li><a href="searchOff.php" ><b>Search Records</b></a></li>
            <li><a href="weapon.php" class="active"><b></b></a></li>
        </ul>
        <br>
        <br>
        <table border="5" style="position:absolute; left:150px;top:200px;">
        <tr>
            <th>Officer ID</th>
            <th>Officer Name</th>
            <th>Weapon</th>
            <th>Role</th>
        </tr>
        
    </div>
    </div>
    </body>
    </html>
    <?php 
        $servername = "localhost";
        $username= "root";
        $password= "";
        $db = "criminalinfo";
        $conn = mysqli_connect($servername,$username,$password,$db);
        $q1 = "SELECT * FROM `officer`";
        $result = mysqli_query($conn,$q1);
        if($result){
            while($row=mysqli_fetch_array($result)){
                echo'
                
        <tr>
                
                <td>'. $row['offID'].'</td>
                <td>'.$row['offName'].'</td>
                <td>'. $row['weapon'].'</td>
                <td>'.$row['role'].'</td>
        </tr>';
            }   
        }
        else{
            echo"error";
        }
     ?>
