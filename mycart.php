<?php
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
		if(isset($_POST['da']))
	{
	$rj=$_POST['da'];
	$displayImages='<h2>Your purches list</h2><table width="500px"style="margin-left:60px;" cellspacing="0" cellpadding="5">
				<tr bgcolor="#CCCCCC">
                        	<th width="50" align="left">Image </th>
							<th width="" align="left">PROD_ID </th> 
                        	<th width="" align="left">Name </th> 
                       	  	<th width="" align="center">Quantity </th>  
                        	<th width="" align="right">Price </th>
                             <th width="" align="right">Total </th>							
                        	<th width=""> </th></tr>';

		$sqlSelProd = mysql_query("select * from tblpurches where s_id='$rj' order by p_time desc limit 5") or die(mysql_error());
	if(mysql_num_rows($sqlSelProd) >= 1){
		while($getProdInfo = mysql_fetch_array($sqlSelProd)){
			$prodID = $getProdInfo["prod_id"];
			$time= $getProdInfo["p_time"];
			$sqlpno=mysql_query("select prod_no from tblproduct where prod_no='$prodID' limit 1") or die(mysql_error());
			$sp=mysql_fetch_array($sqlpno);
			$prodNo = $getProdInfo["prod_id"];
			$prodName = $getProdInfo["prod_name"];
			$prodPrice = $getProdInfo["prod_price"];
			$prodtot = $getProdInfo['prod_total'];
				$prodQuan = $getProdInfo["prod_quan"];
			
			$displayImages .= '<tr><td><img src="images/product/'.$prodNo.'.jpg" alt="Product '.$prodNo.'" width="90" height="60" /></td>
			                        <td><center>'.$prodID.'</center></td><td><center>'.$prodName.'</center></td>
									<td><center>'.$prodQuan.'</center></td><td><center>'.$prodPrice.'</center></td><td><center>'.$prodtot.'Rs</center></td>
									<td><center><a href="remove.php?cid='.base64_encode($prodNo).'&ac='.base64_encode($rj).'&tm='.base64_encode($time).'"><img src="images/Remove_x.gif" alt="remove" /></a> </center></td></tr>';
			
			
		}
		$displayImages.='</table>';
	}
	else{ 
	$no='<br><br><center><h3><font color="light green">YOU DON\'T HAVE ANY PURCHES</font></h3></center>';
	echo $no;
	}
	echo $displayImages;
	}
?>
