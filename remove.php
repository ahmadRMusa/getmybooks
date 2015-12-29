<?php
include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	if(isset($_GET['cid'])&&isset($_GET['ac'])&&isset($_GET['tm']))
{
$ac=base64_decode($_GET['ac']);
$tm=base64_decode($_GET['tm']);
$cid=base64_decode($_GET['cid']);
?>
<script>window.alert(' your book id deleted from your list');</script>
<?php
mysql_query("delete from tblpurches where s_id='$ac' and prod_id='$cid' and p_time='$tm'")or die(mysql_error());
header('location:user.php');
}


?>