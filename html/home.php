<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
      body {
        background-image: url('img/background.jpg');
      }
      </style>
    <title>internship japan</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/logo.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="home.html">Home</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><button class="login-button" href="/php/public/login.php">Login</button></li>
            <li><button class="join-button" href="/php/public/register.php">Join</button></li>
        </ul>
    </nav>
    <script src="/js/main.js"></script>



    <?php

    $con = new PDO("mysql:host=localhost;dbname=internship_japan",'root','');
    
    if (isset($_POST["submit"])) {
      $str = $_POST["search"];
      $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");
    
      $sth->setFetchMode(PDO:: FETCH_OBJ);
      $sth -> execute();
    
      if($row = $sth->fetch())
      {
        ?>
        <br><br><br>
        <table>
          <tr>
            <th>Name</th>
            <th>Description</th>
          </tr>
          <tr>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->Description;?></td>
          </tr>
    
        </table>
    <?php 
      }
        
        
        else{
          echo "Name Does not exist";
        }
    
    
    }
    
    ?>

</body>
</html>
