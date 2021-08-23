<html>
<head>
    <title>Contact Us</title>
<link rel="stylesheet" href="../csss/contactus.css" type="text/css">
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
                <li><a href="../login.php">Admin Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method='post'>
          <table class="table">
              <h2 class="search">Contact Us</h2>
              <tr>
                <th class='tblheading'>Your Name</th>
              </tr>
              <tr>
              <td><input type='text' class='tbldata' name='name' placeholder='Full Name' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Email Id</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='email' placeholder='Email Id' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Contact No</th>
              </tr>
              <tr>
                <td class='tbldata'><input type='text' class='tbldata' name='cont' placeholder='Contact No' Required/></td>
              </tr>
              <tr>
                <th class='tblheading'>Type Massage Here</th>
              </tr>
              <tr>
                <td ><textarea class='tbldata' name="massage"></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='Send' class='submit'/></td>
              </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $username=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['cont'];
    $massage=$_POST['massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Massage send to Admin');

     </script>
   <?php
    }
}

?>