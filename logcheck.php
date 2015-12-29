<?php
if(!empty($_GET['sd']))
{
$prodid=base64_decode($_GET['p']);
header('location: shoppingcart.php?prodid='.$prodid);
}
else{
header('location: login.php');
}
if(isset($_GET['rj']))
{

header('location: index.php?prodid='.$prodid);
}
  ?>