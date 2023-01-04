

<?php

include 'header.php';
  ?>

</body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      
tr,td,th{
  color: black;
}
table{
  padding: 40px 5px;
}

th{
  text-transform: capitalize;
}
a{
  
}
td img{
  height: 100px;
}


    </style>
  </head>
  <body>



<table class="table table-striped py-5">
  <thead>
    <tr>
      <th scope="col">notice title</th>
      <th scope="col">notice publish date</th>
      <th scope="col">download notice from here</th>
      <th scope="col">read notice</th>
    </tr>
  </thead>
  <tbody>
  <?php 

include 'connection.php';
$cid= $_GET['cid'];

$select = "SELECT * FROM noticeBox LEFT JOIN notice ON noticebox.nbcategory = notice.nid WHERE noticeBox.nbcategory = '$cid'";


$query = mysqli_query($conn,$select);
while($fetch= mysqli_fetch_array($query))
{
?>
<tbody>
  <tr>
    
    <td><?php echo $fetch['nbtitle']; ?></td>
    <td><?php  echo $fetch['dates']; ?></td>
     <td><a href="<?php echo 'admin/'.$fetch['nbimage'] ?>" download>click here to download</a></td>
    <td><a href="single.php?sid=<?php echo $fetch['nbid']; ?>"><img src="<?php echo 'admin/'.$fetch['nbimage']; ?>"></a></td>
   

  </tr>
</tbody>
<?php
}
 ?>

    </tbody>
</table>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
include 'footer.php';

?>



