<script>
function blurfun(id)
{
var a=document.getElementById(id);
a.style.blur="2px";
}
</script>

<?php
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
		if(isset($_POST['da']))
	{
	$rj=$_POST['da'];
	$displayImages='<h2>Your orders</h2><table width="500px"style="margin-left:60px;" cellspacing="0" cellpadding="5">
				<tr bgcolor="#CCCCCC">
                        	<th width="50" align="left">Image </th>
							<th width="" align="left">Book_id</th> 
                        	<th width="" align="left">Name </th> 
                       	  	<th width="" align="center">Quantity </th>  
                        	<th width="" align="right">Price </th> 
                        	<th width="" align="left">If Book purchased </th></tr>';

		$sqlSelProd = mysql_query("select * from  usrprod where s_id='$rj' order by date_added desc limit 5") or die(mysql_error());
	
	if(mysql_num_rows($sqlSelProd) >= 1){
		while($getProdInfo = mysql_fetch_array($sqlSelProd)){
			$prodNo = $getProdInfo["prod_no"];
			//$prodID = $getProdInfo["prod_id"];
			$prodName = $getProdInfo["prod_name"];
			$prodPrice = $getProdInfo["prod_price"];
			$time= $getProdInfo["date_added"];

			
				$prodQuan = $getProdInfo["prod_quan"];
			
			$displayImages .= '<tr ><td><img src="images/product/'.$prodNo.'.jpg" alt="Product '.$prodNo.'" width="90" height="60" /></td>
			                        <td><center>'.$prodNo.'</center></td><td><center>'.$prodName.'</center></td>
									<td><center>'.$prodQuan.'</center></td><td><center>'.$prodPrice.'&nbsp;Rs</center></td>
									<td><center><a href="purchased.php?cid='.base64_encode($prodNo).'&ac='.base64_encode($rj).'&tm='.base64_encode($time).'"><button onclick=blurfun("r'.$prodNo.'")>Click here!</button></a>
									</tr>';
			
			
		}
		$displayImages.='</table>';
	}
	else{ 
	$no='<br><br><center><h3><font color="light green">YOU DON\'T HAVE ANY ORDERS</font></h3></center>';
	echo $no;
	}
	echo $displayImages;
	}
?>
