

 
  <?php

                  session_start();
                  $servername="localhost";
                  $username="root";
                  $pass="";
                  $db="criminalinfo";
                  $result="ABC";
                  $conn=mysqli_connect($servername,$username,$pass,$db);
                      $data=$_SESSION['data'];
                      $q1="SELECT * FROM info WHERE name='$data'";
                      $result=mysqli_query($conn,$q1);
                      if($result)
                      {
                               
                  if (mysqli_num_rows($result)<=0) {
                  
                  die('');
                  
                  }
                  echo '<center><table border="5" style="position:relative;top: 65px;diaplay:none">
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
                  $head='<table border="5" style="position:relative;left:-150px;top: 65px;diaplay:none" id="table">
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
                          
                         
                  
                      }
                      
                  ?>
                  <script type="text/javascript">window.print();</script>
               </table>
           </center>

