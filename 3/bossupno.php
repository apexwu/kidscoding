<?php
	 require_once("conMysql.php");

  $id = $_GET["id"];
  $sql = "SELECT * FROM `eatup` WHERE `idup`=$id";
  $result =$conn->query($sql);
$row = @mysqli_fetch_row($result);
  $upid=$row[0];
  $upac=$row[1];
  $uppass=$row[2];
  $uptype=$row[3];
  $upshop=$row[4];
  $upfon=$row[5];
  $upadds=$row[6];
  $uptim=$row[7];
  $upallth=$row[8];
  $shopid=$row[9];
  $foodid=$row[10];
  $updollar=$row[11];
  
$inhis="INSERT INTO `his` (`id`, `ac`, `pass`, `type`, `shop`, `fon`, `adds`, `tim`, `allth`, `shopim`, `foodim`, `dollar`, `ok`, `idhis`) VALUES ('','".$upac."','".$uppass."',$uptype,'".$upshop."','".$upfon."','".$upadds."','".$uptim."','".$upallth."','".$shopid."','".$foodid."',$updollar,'2','')";
 	if($conn->query($inhis)===true){
    
 	}
  $deup="DELETE FROM `eatup` WHERE `idup`=$id";
 	if($conn->query($deup)===true){
 		
 	}
	
	$url = "bossup.php";
	
define('DEBUG', false);

error_reporting(E_ALL);
ini_set('display_errors', DEBUG ? 'On' : 'Off');	
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
    
	
?>