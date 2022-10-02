<!DOCTYPE html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Criminal Management System - Home</title>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' type='text/css' media='screen' href='style_1.css'>
      <script type="text/javascript">
         function submitBtn()
         {
             if (document.forms["crimeInfo"]["ID"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if (document.forms["crimeInfo"]["name"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if (document.forms["crimeInfo"]["crime"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["dob"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else{
                 Date d = new Date();
                 var cyr=d.year();
                 if(document.forms["crimeInfo"]["dob"].value.year()<cyr)
                 {
         
                 }
                 else{
                     alert('Invalid Date Please Fill Valid Date');
                 }
             }
             else if(document.forms["crimeInfo"]["more"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["arrDate"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["crimeDate"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["sex"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["address"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else if(document.forms["crimeInfo"]["photo"].value=="")
             {
                 alert('Please fill out all the fields');
             }
             else{
                 alert('Data Stored Successfully!');
             }
         }
         
         
      </script>
   </head>
   <body>
      <button name="logout" style="margin-left: 1424px;"><img src="logout.png" style="width:10px"><a href = "logout.php">Log out</a></button>
      <div class="container" style="height:980px;">
      <div class="finaldiv">
         <span class="head1"><img src="police_logo.png" width="16.2%"></span>
         <span class="head_txt">Criminal Management System</span>
         <span class="head2"><img src="police_logo.png" width="38%"></span>
         <br>
         <div class="navbar" style="background-color:yellow;">
            <ul style="margin-left:20px">
               <li><a href="index.php" class="active"><b>Criminal Information</b></a></li>
               <li><a href="search.php"><b>Search Records</b></a></li>
               <li><a href="offList.php"><b>List of Officers</b></a></li>
               <li><a href="analysis.php"><b>Analytics</b></a></li>
            </ul>
         </div>
         <form id="crimeInfo" method="post" style="position:absolute;top:140px;background-image: url('police_logo_1.png'); background-repeat:no-repeat;margin-top: 50px; background-size: 90%; width: 50%;height:469px" enctype="multipart/form-data">
            <table >
               <tr>
                  <td>Criminals Image</td>
                  <td>&nbsp;&nbsp;&nbsp;<input type="file" name="my_img"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Criminal ID</td>
                  <td><input type="text" required name="ID"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Criminal Name</td>
                  <td><input type="text" required name="name"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Assigned Officer</td>
                  <td><input type="text" required name="offName"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               <tr>
                  <td>Crime Type</td>
                  <td>
                     <select required name="crime">
                        <option>--Select Crime--</option>
                        <option value="Ragging">Ragging</option>
                        <option value="Robbery">Robbery</option>
                        <option value="Kidnapping">Kidnapping</option>
                        <option value="Rape">Rape</option>
                        <option value="Murder">Murder</option>
                        <option value="Fruad">Fruad</option>
                     </select>
                  </td>


               </tr>
               <td> 
                  <br>
               </td>
               <tr>
                  <td>
                     Section
                  </td>
                  <td>
                     <input name="more" required></input>
                  </td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Criminals DOB</td>
                  <td><input type="date" required name="dob"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Arrest Date</td>
                  <td><input type="date" required name="arrDate"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Date of Crime</td>
                  <td><input type="date" required name="crimeDate"></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Gender</td>
                  <td><input type="radio" name="sex" value="M" required>Male
                     <input type="radio" name="sex" value="F">Female
                     <input type="radio" name="sex" value="O">Others
                  </td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
               <tr>
                  <td>Address </td>
                  <td>&nbsp;<textarea rows="2" required name="address"></textarea></td>
               </tr>
               <tr>
                  <td> 
                     <br>
                  </td>
               </tr>
            </table>
            <button type="submit" class="submitBtn" onclick="submitBtn()" value="upload" name="submit"><b>Submit</b></button>
         </form>
      </div>
   </body>
</html>
<?php
   $id=$name=$offName=$crime=$dob=$arrDate=$crimeDate=$sex=$address=$pic=$folder=$fname=$more="";
   $servername="localhost";
   $username="root";
   $pass="";
   $db="criminalinfo";
   $conn=mysqli_connect($servername,$username,$pass,$db);
   if(isset($_POST['submit'])){
       $fname=$_FILES['my_img']['name'];
       $tmpname=$_FILES['my_img']['tmp_name'];
       $folder="images/".$fname;
       move_uploaded_file($tmpname, $folder);
       $id=$_POST['ID'];
       $name=$_POST['name'];
       $offName=$_POST['offName'];
       $crime=$_POST['crime'];
       $dob=$_POST['dob'];
       $arrDate=$_POST['arrDate'];
       $crimeDate=$_POST['crimeDate'];
       $sex=$_POST['sex'];
       $address=$_POST['address'];
       $more=$_POST['more'];
    
   
   }
   else{
       
   }
       
       $q1="INSERT INTO `info`(`id`, `name`, `offname`, `crime`, `dob`, `arrDate`, `crimeDate`, `sex`, `address`,`img`,`more`) VALUES ('$id','$name','$offName','$crime','$dob','$arrDate','$crimeDate','$sex','$address','$folder','$more')";
       
   if(mysqli_query($conn,$q1))
   {
      echo "done";
       echo "<script>alert('$more');</script>";
   }
   else{
      mysqli_error($conn);
   }
   
   
   
   ?>