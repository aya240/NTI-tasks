<?php
require 'connection.php';

$query = 'select * from blog';
$op = mysqli_query( $con , $query);

if( !( $op)){
  die (  'error' . mysql_error($con));
}
 ?>


 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Task6</title>
  </head>
  <body>

    <?php
      if(isset($_SESSION['message'])){
        echo  $_SESSION['message'] ;
        unset($_SESSION['message']);
      }

   ?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">title</th>
          <th scope="col">content</th>
          <th scope="col">date</th>
          <th scope="col">image</th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody>
          <?php
          while( $data = mysqli_fetch_assoc($op)){

          ?>
          <tr>
          <th scope="row"><?php echo $data['id']; ?></th>
          <td><?php echo $data['title']; ?></td>
          <td><?php echo $data['content']; ?></td>
          <td><?php echo $data['date']; ?></td>
          <td><?php echo $data['img']; ?></td>
          <td>
             <a href='insert.php?id=<?php echo $data['id'];?>' type="button" class="btn btn-outline-primary">Edit</a>
             <a  href='delete.php?id=<?php echo $data['id'];?>' type="button" class="btn btn-outline-danger">Delete</a>
          </td>
        </tr>

        <?php } ?>


      </tbody>
    </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
