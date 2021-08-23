<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>All Student Detail</title>
<link rel="stylesheet" href="../csss/allstudentdata.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/logo.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li class="logout"><a href="admindash.php">Admin Dashboard</a></li>
                
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form>
         <table>
          <tr>
           <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Class </th> 
           <th class="contact_h1">Roll No</th>
           <th class="contact_h1">Father Name</th>
           <th class="massage_h1">Mother Name </th>
           <th class="contact_h1">Village</th>
           <th class="name_h1">Mobile No</th>
         </tr>
        
<?php
include('../dbcon.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_class'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_father'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_mother'].'<br>'; ?></th>
            <th class="contact_h"> <?php  echo $row['u_village'].'<br>'; ?></th> 
            <th class="massage_h"><?php  echo $row['u_mobile'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
              </table>
        </form>
      </div>
    </header>
</body>
</html>