<?php

include('config.inc.php');
include('header.php');
?>

<h1>
<?php  
echo $Title1 ; 
if ($ulevel == admin) {
header( 'Location: ./admin.php' ) ;
}
?>
</h1>



<?php
include('footer.php');
?>

