<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <div class="card text-center">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">profile details</h5>
        <p class="card-text">
            welcome <?php echo $_SESSION['name'] ?> 
          </p>

          <p class="card-text"> your details is:<br>
            Email:<?php echo $_SESSION['email'] ?> <br>
            Password : <?php echo $_SESSION['password'] ?> <br>
            Address : <?php echo $_SESSION['address'] ?> <br>
           Linkedin : <?php echo $_SESSION['url'] ?> <br>
            Gender : <?php echo $_SESSION['gender'] ?> <br>
              

          </p>
      </div>
 
    </div>
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>