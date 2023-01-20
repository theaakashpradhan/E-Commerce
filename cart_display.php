<?php
include 'setting.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kings Space</title>
	<link rel="stylesheet" type="text/css" href="cart_display.css">
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
	<?php
		include 'navbar.php';
		if($_SESSION['no']==0)
		{?>
		<p align="center" style=';font-size:30px; color:white'> <br><br> Your Shopping Cart is Empty</p>";
<?php
		}

		else
		{
	?>
	<br><br>
	<div class="cart_bg" style="background-color: white;">
		<div class="cart_div1">
	
			<div class="c1"> Shopping cart</div>
			<div class="c2">Qty</div>
			<div class="c2">Size</div>
			<div class="c2">Price</div>
			<div class="c2">Total</div>
			<div class="c2">Delete</div>
			
		</div>
		<hr>
		<?php
		 $conn=mysqli_connect("localhost","root","","kings");
		 	$amt=0;
		for($i=1;$i<=$_SESSION['no'];$i++)
		{
			$qty= $_SESSION['cart']['qty'][$i];
			$size=$_SESSION['cart']['size'][$i];
			$code=$_SESSION['cart']['code'][$i];

			$sqll="SELECT * FROM discountproduct where code='$code'";

            $res=mysqli_query($conn,$sqll);
             if(mysqli_num_rows($res)>0)
             {    $row=mysqli_fetch_assoc($res);
                 $target_dir="admin/uploads/";
			     $target_file=$target_dir.$row['image'];

		        echo '<div class="cart_div2">';
			    echo '<div class="c21">';?><img src=<?php echo $target_file;?> width="70px" height="80px;"></div>
			    <?php
			    echo '<div class="c22" >'.$row['name'].'</div>';
			    echo '<div class="c23">'.$qty.'</div>';
			    echo '<div class="c23">'.$size.'</div>';
			    echo '<div class="c23">Rs.'.($row['price']-(($row['discount']/100)*$row['price'])).'(discounted)</div>';
			    $cost=$qty*($row['price']-(($row['discount']/100)*$row['price']));
			    echo '<div class="c23">'.$cost.'</div>';
			    echo '<div class="c23">';
			    echo "<a href='cartremove.php?id=$code'>";
			    echo '<i class="fa fa-trash"></i></a></div>';
             }
             else
             {
			 $sql="SELECT * FROM clothes where code='$code'";
			 $result=mysqli_query($conn,$sql);
			 $row=mysqli_fetch_assoc($result);
			 $target_dir="admin/uploads/";
			 $target_file=$target_dir.$row['image'];

			echo '<div class="cart_div2">';
			echo '<div class="c21">';?><img src=<?php echo $target_file;?> width="70px" height="80px;"></div>
			<?php
			echo '<div class="c22" >'.$row['name'].'</div>';
			echo '<div class="c23">'.$qty.'</div>';
			echo '<div class="c23">'.$size.'</div>';
			echo '<div class="c23">Rs.'.$row['price'].'</div>';
			$cost=$qty*$row['price'];
			echo '<div class="c23">'.$cost.'</div>';
			echo '<div class="c23">';
			echo "<a href='cartremove.php?id=$code'>";
			echo '<i class="fa fa-trash"></i></a></div>';
			 }
			$amt=$amt+$cost;
			echo '</div>';

		}
			?>

	</div>
<br>
	<div class="bot_text">
		Grand Total:<?php echo $amt;?>
	</div>
	<br><br>
	<div class="bot_text2">
		<?php
		 if(empty($_SESSION['user']))
		 {
		 	?> <a href="checkout.php"><button>Manage Payment</button></a><?php
		 }
		 else{
		$txAmt=0;
		$pdc=0;
		$psc=0;
		$tAmt=$amt+$txAmt+$psc+$pdc;
		$pid=mt_rand();
		?>
		payment methods:
	
			<form action="https://uat.esewa.com.np/epay/main" method="POST">
			    <input value="<?php echo $tAmt?>" name="tAmt" type="hidden">
			    <input value="<?php echo $amt?>" name="amt" type="hidden">
			    <input value="<?php echo $txAmt?>" name="txAmt" type="hidden">
			    <input value="<?php echo $psc?>" name="psc" type="hidden">
			    <input value="<?php echo $pdc?>" name="pdc" type="hidden">
			    <input value="EPAYTEST" name="scd" type="hidden">
			    <input value="<?php echo $pid?>" name="pid" type="hidden">
			    <input value="http://localhost/ProV/checkout.php?q=su" type="hidden" name="su">
			    <input value="http://localhost/ProV/cart_display.php?q=fu" type="hidden" name="fu">
			   <button><input value="Pay With E-Sewa" type="Submit"></button> 
		    </form>
		    <a href="checkout.php"><button>Cash On Delivery</button></a>
		
	</div>
	
	<?php

}}

echo "<br><br><br><br>";
if(empty($_SESSION['user']))
 {
 	 
 }
 else{
?>
<div class="hist">

<a href="userhistory1.php">History</a>
</div>
<?php
}
echo "<br><br><br><br>";
include 'footer.php';
?>


</body>
</html>