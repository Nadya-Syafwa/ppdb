<html>
    <title>
        login
</title>
<link rel="stylesheet" href="style.css">
<body>
    <center>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    
    ?>

    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Sign In </h2>

        <!-- Login Form -->
        <form action="cek_login.php" method="post">
          <input type="text" name="username" id="username" class="fadeIn second" name="username" placeholder="username">
          <input type="password" name="password" id="password" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        </div>

      </div>
    </div>
</body>
    </html>