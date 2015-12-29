<?php
   include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	include("accesscheck.php");

	$disp="";
	
	if(!empty($_GET['prodid'])){
		$pid = $_GET['prodid'];
		$wasFound = false;
		$i = 0;
		if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1){
			$_SESSION["cart_array"]=array(0=>array("productID"=>$pid,"quantity"=>1));
		}else{
			foreach($_SESSION["cart_array"] as $each_product){
				$i++;
				while(list($key,$value)=each($each_product)){
					if($key=="productID" && $value==$pid){	
						array_splice($_SESSION["cart_array"],$i-1,1,array(array("productID"=>$pid,"quantity"=>$each_product ['quantity']+1)));
						$wasFound=true;
					}
				}		
			}
			if($wasFound==false){
				array_push($_SESSION["cart_array"],array("productID"=>$pid,"quantity"=>1));
			}
		}
		
		header("location:shoppingcart.php");
		exit();
	}
	//-------------------------------------------------------------------------------------------------
	$msg = "";
		if(isset($_POST['btnUpdate']))
		{
	$submit = $_POST['btnUpdate'];
	if($submit == "update"){
		$x = 0;
		$i=0;
		//echo $_POST['txtQuan2'];
		//echo $_POST['txtHoldProdId0'];
		foreach($_SESSION["cart_array"] as $each_product){
			$i++;
			$quantity = $_POST['txtQuan'.$x];
			$prodStock = $_POST['txtHoldQuan'.$x];
			$prodAdjustId = $_POST['txtHoldProdId'.$x++];
			if($quantity<1){ $quantity = 1; }
			if($quantity>$prodStock){ $quantity = $prodStock; }
			while(list($key,$value)=each($each_product)){
				array_splice($_SESSION["cart_array"],$i-1,1,array(array("productID"=>$prodAdjustId,"quantity"=>$quantity)));
			}		
		}
			
			}
			
		}
	//-------------------------------------------------------------------------------------------------	
		if(isset($_POST['proceed']))
		{
		$sub=$_POST['proceed'];
				$pquan=$_SESSION['checkoutCartQuan'];
		$pbook=$_SESSION['checkoutCartName'];
		$pprice=$_SESSION['checkoutCartPrice'];
		$ptotal=$_SESSION['checkoutCartTotal'];
		?>
		
<?php
        $rk= mysql_query("select * from users where s_id='".$_SESSION['valid_uid']."'"); 
		 if(mysql_num_rows($rk) == 1)
		 {
		 while($row=mysql_fetch_array($rk))
		 {
		 $pto=$row['email'];
		 $pname=$row['name'];
		 $pemail=$row['email'];
		 $pmobi=$row['phone'];
		 $paddr=$row['address'];
		 }
		 $rs= mysql_query("select * from users where s_id =(select s_id from tblproduct where prod_no='".$_SESSION['checkoutCartId']."')"); 
		 if(mysql_num_rows($rs) == 1)
		 {
		 while($row=mysql_fetch_array($rs))
		 {
		 $prmail=$row['email'];
		 $prname=$row['name'];
		 $prphone=$row['phone'];
		 $praddr=$row['address'];
		 }
		 }

		 $cc='';
		 $messa = "\n \n\n\n\n\n From:  getmybooks.co,\nEmail: getmybooks@gmail.com  ";
         $messa=" $messa \n \n Hai Ms/Ms $pname thankyou for using getmybooks.co your purchase details is given below , andwe are informed that
		 please \n contact to below given book provider details to purchase book ";
		 $messa="$messa \n\n purchase details:\n\nBook: $pbook \nBook price: $pprice \n No of books: $pquan\nTotal amount: $ptotal";
		 $messa="$messa \n\n Book provider details:\n\nName: $prname\nEmail: $prmail\n Mobile no: $prphone\n Address: $praddr";
		 $subj="Your purchase details in getmybooks.co";
		 $header='From: [getmybooks.co]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
	     	/*mail( $pto,$subj,$messa,$header);*/
		  system("sendEmail -f 'getmybooks.co@gmail.com' -t '$pto' -cc '$cc' -s 'smtp.gmail.com:587' 
		  -u 'Your purchase details in getmybooks.co' -m '$messa' -o 'tls=yes' -xu 'getmybooks.co@gmail.com' -xp 'getmybooks25'");
		
		 }
		 
$rt= mysql_query("select * from users where s_id =(select s_id from tblproduct where prod_no='".$_SESSION['checkoutCartId']."')"); 
		 if(mysql_num_rows($rt) == 1)
		 {
		 while($row=mysql_fetch_array($rt))
		 {
		 $to=$row['email'];
		 $name=$row['name'];
		 $phone=$row['phone'];
		 $addr=$row['address'];
		 }
		 $cc='';
		 $message = "\n \n\n\n\n\n From:  getmybooks.co,\nEmail: getmybooks@gmail.com  ";
		 $message=" $message \n \n Hai Ms/Ms $name we are informed that your book \'$pbook\' is requested to purchase by \'$pname\'.  ";
         $message=" $message \n and he/she require $pquan books  contact details about purchaser is given below.  ";
         $message="$message  \n\n\n Information about purcheser:\n\n name: $pname\nMobile no: $pmobi\nEmail:$pemail\nAddress: $paddr";
		 $message="$message \n\n\n Book purchase details:\n\nBook: $pbook\nnumber of books: $pquan\n";
		 $subject="Your Book is requested to purchase by $pname";
		 $header='From: [getmybooks.co]@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
	     /*	mail( $pto,$subject,$message,$header);*/
		  system("sendEmail -f 'getmybooks.co@gmail.com' -t '$to' -cc '$cc' -s 'smtp.gmail.com:587' 
		  -u 'Your Book is requested to purchase by $pname' -m '$message' -o 'tls=yes' -xu 'getmybooks.co@gmail.com' -xp 'getmybooks25'");
		 
		 }
		 mysql_query("insert into tblpurches(s_id,prod_id,prod_name,prod_quan,prod_price,prod_total,p_time)
values('".$_SESSION['valid_uid']."','".$_SESSION['checkoutCartId']."','".$_SESSION['checkoutCartName']."','".$_SESSION['checkoutCartQuan']."','".$_SESSION['checkoutCartPrice']."','".$_SESSION['checkoutCartTotal']."',now())") or die(mysql_error());
 $disp='successfully purchased item order!'; 
 }
		if(isset($_POST['ant']))
		{
		header('location:user.php');
		}
	//-------------------------------------------------------------------------------------------------
	if(!empty($_GET['cid']) || isset($_GET['cid'])){
		$removeKey = $_GET['cid'];
		if(count($_SESSION["cart_array"])<=1){
			unset($_SESSION["cart_array"]);
		}else{
			unset($_SESSION["cart_array"]["$removeKey"]);
			sort($_SESSION["cart_array"]);
		}
	}
	//-------------------------------------------------------------------------------------------------
	$cartTitle = "";
	$cartOutput = "";
	$cartTotal = "";
	if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1){
		$cartOutput="<h2 align='center'> Your shopping cart is empty </h2>";
	}else{
		$x = 0;
		$cartTitle .= '<form name="shoppingcart_form" action="shoppingcart.php" method="post" /><table width="700px" cellspacing="0" cellpadding="5">
				<tr bgcolor="#CCCCCC">
                        	<th width="220" align="left">Image </th>
							<th width="140" align="left">Book_id </th> 
                        	<th width="140" align="left">Name </th> 
                       	  	<th width="100" align="center">Quantity </th> 
							<th width="60" align="center">Stock </th> 
                        	<th width="60" align="right">Price </th> 
                        	<th width="60" align="right">Total </th> 
                        	<th width="90"> </th></tr>';
		$i = 0;
		foreach($_SESSION["cart_array"] as $each_product){
			$product_id = $each_product['productID'];
			$sql=mysql_query("select * from tblproduct where prod_no='$product_id' limit 1");
			while($row=mysql_fetch_array($sql)){
				$prodNo = $row["prod_no"];
				//$prodID = $row["prod_id"];
				$prodName = $row["prod_name"];
				$prodPrice = $row["prod_price"];
				$prodQuan = $row["prod_quan"];
			}
			$pricetotal=$prodPrice*$each_product['quantity'];
			$cartTotal= number_format($pricetotal+$cartTotal,2);
			$cartOutput .= '<tr><td><img style="border: 2px solid;" src="images/product/'.$prodNo.'.jpg" width="150" height="120" /></td> 
				<td>'.$prodNo.'</td>
				<td>'.$prodName.'</td> 
				<td align="center"><input type="hidden" name="txtHoldProdId'.$i.'" value="'.$prodNo.'" /><input name="txtQuan'.$i.'" type="text" value="'.$each_product['quantity'].'" style="width: 40px; text-align: center" /> </td>
				<td align="center"><input type="hidden" name="txtHoldQuan'.$i.'" value="'.$prodQuan.'" /> '.$prodQuan 	.' pcs</td> 
				<td align="right">₹'.$prodPrice.'</td> 
				<td align="right">₹'.$cartTotal.'</td>
				<td align="center"> <a href="shoppingcart.php?cid='.$i++.'"><img src="images/remove_x.gif" alt="remove" /><br />Remove</a> </td></tr>';
		}
		$_SESSION['checkoutCartName'] = $prodName;
		$_SESSION['checkoutCartId'] = $prodNo;
		$_SESSION['checkoutCartQuan'] = $each_product['quantity'];
		$_SESSION['checkoutCartPrice'] = $prodPrice;
		$_SESSION['checkoutCartTotal'] = $cartTotal;
				$cartOutput .= '<tr>
                        	<td colspan="3" align="right"  height="40px">
							Have you modified your basket? Please click here to <input class="btn_upd" type="submit" name="btnUpdate" value="update" />&nbsp;&nbsp;</td>
                            <td align="right" style="background:#ccc; font-weight:bold"> Total: </td>
                            <td colspan="2" align="left" style="background:#ccc; font-weight:bold;">₹'.$cartTotal.' </td>
                            <td style="background:#ccc; font-weight:bold"> </td>
						</tr>
					</table>
					<br>
					<hr>
					<div style="float:left; width: 215px; margin-top: 20px;">
                    
                <input type="submit"name="ant" class="btn_proceed" value="purchase another"/>
						<br/>
                    	
                    </div>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
                <input type="submit"name="proceed" class="btn_proceed" value="Proceed to Checkout"/>
						<br/>
						
                    	
                    </div></form>';
	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>getmybooks</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script language="javascript" type="text/javascript">

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="subpage">

<div id="main_wrapper">
	<div id="main_header">
    	<div id="site_title"><h1><font color="#000000" size="+1"><img src='images/get1.png' style="opacity:0.78;"/></font></h1></div>
        
        <div id="header_right">
          
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="main_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="user.php?ac=<?php echo base64_encode($_SESSION['valid_uid']);?>">Home</a></li>
            
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;&nbsp;</li>
           <!-- <li><a href="about.php">About</a></li>
			<li><a href="admin/index.php">Admin Login</a></li> -->
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div class="cleaner h20"></div>
    <div id="main_top"></div>
    <div id="main">
    	
        <div id="sidebar">
           
        </div> <!-- END of sidebar -->
        
        <div id="content">
		
		<?php
		
	
	   echo $cartTitle;
	   echo $cartOutput;
				?>
            <p class="disp margintop_3"><?php print $disp;?> </p>
		</div> <!-- end of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="main_footer">   
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2015 getmybooks.co
		</center>
    </div> <!-- END of footer -->   
   
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
