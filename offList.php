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
      <button name="logout" style="margin-left: 1424px;"><img src="logout.png" style="width:10px"><a href = "logout.php">Log out</a></button>
      <div class="container" style="height:980px;"> 
      <div class="finaldiv">
      <span class="head1"><img src="police_logo.png" width="16.2%"></span>
      <span class="head_txt">Criminal Management System</span>
      <span class="head2"><img src="police_logo.png" width="38%"></span>
      <br>
      <div class="navbar">
         <ul style="margin-left:20px">
            <li><a href="home.php"><b>Criminal Information</b></a></li>
            <li><a href="search.php" ><b>Search Records</b></a></li>
            <li><a href="offList.php" class="active"><b>List of Officers</b></a></li>
            <li><a href="analysis.php"><b>Analytics</b></a></li>
         </ul>
         <br>
         <br>
         <div>
            <table border="5" style="position:absolute; left:150px;top:200px;" style="position:absolute;top:140px;background-image: url('police_logo_1.png'); background-repeat:no-repeat;margin-top: 50px; background-size: 90%; width: 50%;height:469px">
            <img src="police_logo_1.png" style="position:absolute;top:140px;margin-top: 110px; background-size: 90%;margin-left:200px; height:469px">
            <tr>
               <th>Officer Name</th>
               <th>Officer ID</th>
               <th>ID</th>
               <th>Contact</th>
               <th>Gender</th>
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
           <td>'.$row['offName'].'</td>
           <td>'. $row['offID'].'</td>
           <td>'. $row['ID'].'</td>
           <td>'.$row['contact'].'</td>
           <td>'. $row['gender'].'</td>
           <td>'. $row['weapon'].'</td>
           <td>'.$row['role'].'</td>
   </tr></div>';
       }   
   }
   else{
       echo"error";
   }
   ?>