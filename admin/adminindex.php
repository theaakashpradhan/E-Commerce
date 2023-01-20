 <html>
 <head>
  <title>Kings Space</title>
  
    <link rel="stylesheet" href="qwerty.css">
 <style>
 body
  { 
    background-color:#ECF0F1;
  }
  </style>
  </head>
  <body>
  <?php
   include 'top.php';
   $conn = mysqli_connect("localhost","root","","kings");
   if (!$conn)
   {
    die("Connection failed: " . mysqli_connect_error());
    }  
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:../login.php');
      die();
    }  
    //$sql = SELECT SUM(price) FROM history;
   // $result=mysqli_query($conn,$sql);
     // if(mysqli_num_rows($result)>0)
      //{ while($row=mysqli_fetch_assoc($result))
       //{ 
         // echo"".$row['price']."";
          
    
        //}
      //}
             
   ?>

  
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">
              <?php
                  $sql="SELECT COUNT(price) FROM history";
                  $result=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0)
                 { while($row=mysqli_fetch_assoc($result))
                   { 
                    echo"".$row['COUNT(price)']."";
              
        
                  }
                }
            ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Report from begining</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">Rs
            <?php
                  $sql="SELECT SUM(price) FROM history";
                  $result=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0)
                 { while($row=mysqli_fetch_assoc($result))
                   { 
                    echo"".$row['SUM(price)']."";
              
        
                  }
                }
            ?>
              
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Report from begining</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div><br><br>
</div>
     
       <h1><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome Admin</p></h1>
      </body>
  </html>