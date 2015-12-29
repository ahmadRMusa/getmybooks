<?php
include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	if(isset($_GET['cid'])&&isset($_GET['ac'])&&isset($_GET['tm']))
{
$ac=base64_decode($_GET['ac']);
$tm=base64_decode($_GET['tm']);
$cid=base64_decode($_GET['cid']);
$x='<style>#r"'.$cid.'"{-moz-filter:blur(2px);filter:blur(2px);}</style>';
echo $x;
?>
<script>alert(' your book is purchased click Ok');</script>
<?php
mysql_query("update  tblproduct set sold='yes' where s_id='$ac' and prod_no='$cid' and date_added='$tm'")or die(mysql_error());
mysql_query("delete from  usrprod  where s_id='$ac' and prod_no='$cid' and date_added='$tm'")or die(mysql_error());
header('location:user.php');
}

?>