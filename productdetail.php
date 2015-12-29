<?php
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	$raj="";
	$prodID = base64_decode($_GET['p']);
	if(isset($_GET['sd']))
	{
	$raj=$_GET['sd'];
	}
	if(isset($_GET['d']))
	{
	$raj=$_GET['d'];
	}
	$prodAvail = "";
	$txtQuanDisable = "";
	$otherProdList = "";
	$otherProdCtr = 0;
	if(!empty($prodID)){
		$sqlSelectSpecProd = mysql_query("select * from tblproduct where prod_no = '$prodID'") or die(mysql_error());
		$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);
		$prodNo = $getProdInfo["prod_no"];
		//$prodid = $getProdInfo["prod_id"];
		$prodName = $getProdInfo["prod_name"];
		$prodDescr = $getProdInfo["prod_descr"];
		$prodCat = $getProdInfo["prod_cat"];
		$prodPrice = $getProdInfo["prod_price"];
		$prodQuan = $getProdInfo["prod_quan"];
		$s_id=$getProdInfo["s_id"];
		$providerdetails=mysql_query("select * from users where s_id ='$s_id' ") or die(mysql_error());
		$getprovider=mysql_fetch_array($providerdetails);
		$name=$getprovider['name'];
		$ph=$getprovider['phone'];
		$email=$getprovider['email'];
		$address=$getprovider['address'];
		$college=$getprovider['college'];
		if($prodQuan >= 1){
			$prodAvail = "In Stock";
		}
		else{
			$prodAvail = "Out of Stock";
			$txtQuanDisable = "disabled";
		}
		$sqlSelectOtherProduct = mysql_query("select * from tblproduct order by date_added desc") or die(mysql_error());
		$sqlCountOtherProduct = mysql_num_rows($sqlSelectOtherProduct);
		if($sqlCountOtherProduct >=1 ){
			while($getOtherProductInfo = mysql_fetch_array($sqlSelectOtherProduct)){
				$otherProdNo = $getOtherProductInfo["prod_no"];
				//$otherProdId = $getOtherProductInfo["prod_id"];
				$otherProdName = $getOtherProductInfo["prod_name"];
				$otherProdPrice = $getOtherProductInfo["prod_price"];
				$otherProdList .= '<div class="col col_14 product_gallery">
				<a href="productdetail.php?p='.base64_encode($otherProdNo).'&d='.$raj.'"><img src="images/product/'.$otherProdNo.'.jpg" width="170" height="150"" /></a>
				<h3>'.$otherProdName.'</h3>
				<p class="product_price">₹'.$otherProdPrice.'</p>
				<a href="logcheck.php?p='.base64_encode($prodNo).'&sd='.$raj.'" class="add_to_cart">BUY</a></div>';
				if(++$otherProdCtr >= 3){
				     if ($raj=="")
					 {
					$otherProdList .= '<a href="index.php" class="more float_r">View all</a>';
					break;
					}
					else{ $otherProdList .= '<a href="user.php" class="more float_r">View all</a>';
					break;
					}
				}
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>getmybooks</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />

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
        <?php if($raj=="")
		{ ?><ul>
            <li><a href="index.php">Home</a></li>
           
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;&nbsp;</li>
			<li><a href="login.php">Login</a></li>
            <li><a href="about.php">About</a></li>
			<li><a href="admin/index.php">Admin Login</a></li>
        </ul>
		<?php }
		else{ ?>
		<marquee direction='left' style="margin-top:15px;font-size:16px;font-family:Agency FB;font-weight:bold;">This is getmybooks.co</marquee>
		<?php }?>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div class="cleaner h20"></div>
    <div id="main_top"></div>
    <div id="main">
    	
        <div id="sidebar">
            
        </div> <!-- END of sidebar -->
        
        <div id="content">
        	<h2>Book Details</h2>
            <div class="col col_13">
		<a href="images/product/<?php echo $prodNo; ?>.jpg" title="Lady Shoes"><img src="images/product/<?php echo $prodNo; ?>.jpg" style="width:250px; height: 210px; margin-left:15px; border: 2px double;" alt="Image 10" /></a>
            </div>
            <div class="col col_13 no_margin_right">
                <table>
					<tr>
						<td colspan="2" height="30" width="160"><br></td>
					</tr>
					
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>₹<?php echo $prodPrice; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Availability:</td>
                        <td><?php echo $prodAvail; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Name:</td>
                        <td><?php echo $prodName; ?></td>
                    </tr>
                    <tr>
                        <td height="30">Category:</td>
                        <td><?php echo $prodCat; ?></td>
                    </tr>
					<tr></tr>
					<tr><th align="left">Book Seller:</th></tr>
					<tr><td>name:</td><td><?php echo $name; ?></td></tr>
					<tr><td>Mobile no:</td><td><?php echo $ph; ?></td></tr>
					<tr><td>College:</td><td><?php echo $college; ?></td></tr>
					<tr><td>Address:</td><td><?php echo $address; ?></td></tr>
                    <!-- <tr><td height="30">Quantity</td><td><input type="text" name="txtQuantity" value="1" style="width: 20px; text-align: right" /></td></tr> -->
                </table>
                <div class="cleaner h20"></div><?php
               echo '<a href="logcheck.php?p='.base64_encode($prodID).'&sd='.$raj.'" class="add_to_cart">BUY</a>'; ?>
			</div>
            <div class="cleaner h30"></div>
            
            <h5><strong>Book Description</strong></h5>
            <p><?php echo $prodDescr; ?></p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Other Books</h4>
	    <?php echo $otherProdList; ?>    
            <div class="cleaner"></div>
        </div> <!-- END of content -->
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
