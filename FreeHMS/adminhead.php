<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FreePBX Hotel Call Billing System</title>
<link rel="stylesheet" type="text/css" href="css/Hotel.css"/>
</head>
<body>

<div id="HeadLine">
Admin.
</div>
<div id="MenuTop">
<a href="admin.php"><img src="img/Menutop_Home.png" alt="<?php echo $MenuTop1 ?>" title="<?php echo $MenuTop1 ?>"></a>
<a href="rates.php"><img src="img/Menutop_Tariffe.png" alt="<?php echo $MenuTop3 ?>" title="<?php echo $MenuTop3 ?>"></a>
<a href="rooms.php"><img src="img/Menutop_Camere.png" alt="<?php echo $MenuTop2 ?>" title="<?php echo $MenuTop2 ?>"></a>
<a href="checkin.php"><img src="img/Menutop_CheckIn.png" alt="<?php echo $MenuTop4 ?>"title="<?php echo $MenuTop4 ?>"></a>
<a href="checkout.php"><img src="img/Menutop_CheckOut.png" alt="<?php echo $MenuTop5 ?>" title="<?php echo $MenuTop5 ?>"></a>
<a href="bills.php"><img src="img/Menutop_EC.png" alt="<?php echo $MenuTop6 ?>" title="<?php echo $MenuTop6 ?>"></a>
<a href="wakeup.php"><img src="img/Menutop_Sveglie.png" alt="<?php echo $MenuTop7 ?>" title="<?php echo $MenuTop7 ?>"></a>
<a href="logout.php"><img src="img/Menutop_CheckLog.png" alt="<?php echo $MenuTop9 ?>" title="<?php echo $MenuTop9 ?>"></a>
</div>
<div id="Content">
<?php
require_once("classes/Login.php");

$login = new Login();


if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
   include("views/pmslogged_in.php");
$ulevel = $_SESSION['department'];
if ($ulevel != admin) {
header( 'Location: ./index.php' ) ;
}

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
//    include("views/not_logged_in.php");
header( 'Location: ./start.php' ) ;
}
?>
