<html>
<head>
  <link rel="stylesheet" type="text/css" href="grid.css">
</head>
<?php

$conn=mysqli_connect("localhost","root","","kings");
 $sql="SELECT * FROM clothes where code!='$code' and brand='$brand2' limit 6 ";
 $result=mysqli_query($conn,$sql);
 ?>
<h1 align="center">You might like:</h2>
<h2 align="center">Similar Brand</h3>
<section class="card" >
 <?php
  if(mysqli_num_rows($result)>0)
  {
      while($row=mysqli_fetch_assoc($result))
     { 
        $target_dir="admin/uploads/";
        $target_file=$target_dir.$row['image'];
        $send=$row['code'];
        echo '<div class="card--content">';
        echo "<a href='info.php?id=$send'><img src=$target_file width=230 height=250 ></a>";
        //echo '<center><button onclick="window.location.href="about.php"">quick look</button></center>';
        echo '</div>';
    }
}?>
</section>
</html>