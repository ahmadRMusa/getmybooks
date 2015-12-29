
<?php
include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");

$rt= mysql_query("select * from users where s_id =(select s_id from tblproduct where prod_no='17')"); 
		 if(mysql_num_rows($rt) == 1)
		 {
		 while($row=mysql_fetch_array($rt))
		 {
		 $to=$row['email'];
		 $name=$row['name'];
		 $phone=$row['phone'];
		 }
		 print $to;
		 print $name;
		 print $phone;
}
?>