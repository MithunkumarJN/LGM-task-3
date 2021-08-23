<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="image/logo.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">Home</a></li>
                <li><a href="admin/aboutus.php">About Us</a></li>
                <li><a href="admin/contactus.php">Contact Us</a></li>
                <li><a href="login.php">Admin Login</a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <h2 class="search">Search Your Result</h2>
            <tr>
                <th class="name1">Rollno</th>
                <td class="name2"><input type="text" name="rollno" required/></td>
            </tr>
            <tr>
                <th class="standered1">Your Standered</th>
                <td class="standered2"><input type="text" name="std" required/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="submit" class="submit"/></td>
            </tr>
          </table>
       </form>
      </div>
    </header>
    
</body>
</html>
