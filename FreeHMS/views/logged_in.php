<!-- if you need user information, just put them into the $_SESSION variable and output them here -->

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php">FreePBX PMS</a>
<a href="start.php?logout">Logout</a>
<?php header( 'Location: ./index.php' ) ;?>
