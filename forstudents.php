<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">



</head>
<body>

<div>
<ul>
  <li><a href="#about">About</a></li>
  <li><a href="#login">login</a></li>
</ul>
</div>




<div class="containermain">


<img src="images/unique1.jpg" class="topimg">
     <div class="di1" >
       </br>
    <h1 class="h11">EDGE</h1>
      Our edge menu offers satisfying, gluten-free dinners for making low-carb lifestyles less complicated. Get started now.
                                                                                                          </br>
                                                                                                           </br>
    <h2 >Check out all our menus</h2>
                                                                                                           </br>
                                                                                                           </br>
    </div>



<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>



<table  class="table1">
<tr>

    </tr>
    <tr>
<td class="divright">



<div  style="max-width:500px">

   
   <img class="mySlides" src="images/unique3.jpg" style="width:100%" >
   <img class="mySlides" src="images/unique4.jpg" style="width:100%">
   <img class="mySlides" src="images/unique5.jpg" style="width:100%" >
   <img class="mySlides" src="images/unique6.jpg" style="width:100%" >
     
       


  
</div>


</td>
<td>
<?php
$sql = "SELECT * FROM `foods`";
$result = mysqli_query($con, $sql);
?>

<table >

 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
      
      <tr class="trclass1" id="zoom" >
      <td class="menutd1" > 
      <img src="uploads/<?php echo $row['fimage']; ?>"  class="img1">
      </td >
      <td class="td22">
      <?php
      echo $row["fname"]; ?>
      </td>
       <td class="td23" >  
      <?php
      echo $row["fdescription"]. "</td>"; ?>
      <td class="td24"> 
      <?php
      echo  $row["favailability"]; ?>
      </td> 
      <td class="td25">
      <?php
      echo  $row["price"]. "lkr</td>";
      }
      echo "<tr ></br>";
    
      
  }

else
 {
  echo "0 results";
}
mysqli_close($con);
?>

    </tr>

    </table>


</div>

<div>
  <!--footer-->
</div>









<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}

</script>

 
<!-- bootstrap -->
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>









</body>
</html>