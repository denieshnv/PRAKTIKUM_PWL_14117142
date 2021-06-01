
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <figure class="text-center">
        <h1 class="display-6">Selamat Datang</h1>
    </figure>
    
    <div class="container">
        <?php
            include ('facebook_login.php');
            echo '<h3><b>Nama: </b>'.$_SESSION['user_name'].'</h3>';
            echo '<h3><b>Email: </b>'.$_SESSION['user_email_address'].'</h3>';
            echo '<h3><a href="logout.php">Logout</h3></div>';
        ?>
    </div>
  </body>
</html>