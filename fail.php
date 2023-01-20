<?php
session_start();
session_destroy();
include 'navbar.php';
echo "<center><br><br>The Name or Email has already been registered";
echo '<br><br><a href="register.php">Register Again</a><center>';
echo '<br><br>';
include 'footer.php';
?>
