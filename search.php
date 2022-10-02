<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Criminal Management System - Home</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' type='text/css' media='screen' href='style_1.css'>
      <script src='main.js'></script>
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
                  <li><a href="search.php" class="active"><b>Search Records</b></a></li>
                  <li><a href="offList.php"><b>List of Officers</b></a></li>
                  <li><a href="analysis.php"><b>Analytics</b></a></li>
               </ul>
            </div>
            <div class="searchGroup" >
               <form method="post">
                  <input type="text" class="searchBar" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Criminal's By Name" name="search">
                  <button class="searchBtn"><img src="search.png" width="50%"></button>
                  <img src="police_logo_1.png" style="position:absolute;top:140px;margin-top: -90px; background-size: 90%;margin-left: -50px; height:469px">
               </form>
               <?php
                  session_start();
                  $servername="localhost";
                  $username="root";
                  $pass="";
                  $db="criminalinfo";
                  $result="ABC";
                  $conn=mysqli_connect($servername,$username,$pass,$db);
                  if($_SERVER['REQUEST_METHOD']=='POST')
                  {
                      $data=$_POST['search'];
                      $_SESSION['data']=$data;
                      $q1="SELECT * FROM info WHERE name='$data'";
                      $result=mysqli_query($conn,$q1);
                      if($result)
                      {
                               
                  if (mysqli_num_rows($result)<=0) {
                  echo "<script>alert('Record Not Found')</script>";
                  die('');
                  
                  }
                  echo '<table border="5" style="position:relative;left:-180px;top: 65px;diaplay:none">
                      <thead>
                  <tr>
                      <th>Criminal Image</th>
                      <th>Criminal ID</th>
                      <th>Criminal Name</th>
                      <th>Assigned Officer</th>
                      <th>Crime Type</th>
                      <th>Section</th>
                      <th>Criminals DOB</th>
                      <th>Arrest Date</th>
                      <th>Date of Crime</th>
                      <th>Gender</th>
                      <th>Address</th>
                  </tr>
                  </thead>';
                  
                          while ($row = mysqli_fetch_array($result)) {
                           $info='
                  <tr>
                      <td><img src="'.$row['img'].'" width="100"></td>
                      <td>'.$row['id'].'</td>
                      <td>'.$row['name'].'</td>
                       <td>'.$row['offname'].'</td>
                       <td>'.$row['crime'].'</td>
                       <td>'.$row['more'].'</td>
                        <td>'.$row['dob'].'</td>
                         <td>'.$row['arrDate'].'</td>
                          <td>'.$row['crimeDate'].'</td>
                           <td>'.$row['sex'].'</td>
                             <td>'.$row['address'].'</td>
                  </tr>
                  
                  
                  ';
                              echo $info;
                          }
                                                
                  echo '<center><a href="printable.php" target="_blank" style="position: absolute;top: 500px;left: 400px;"><button name="print" class="submitBtn">Print</button></a></center>';
                         
                  
                      }
                      else{
                          echo "<script>alert('Record Not Found')</script>";
                      }
                  
                          
                      }
                     
                           
                     
                      

                  
                  
                      
                      

                      
                  ?>
               </table>

            </div>
         </div>
      </div>
      </div>

   </body>
</html>