
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PhoneZone</title>
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
    	<div id="site_title"><h1><a href="#" rel="nofollow"><font color="#000000" size="+1">PhoneZone</font></a></h1></div>
        
        <div id="header_right">
          
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="main_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li><a href="shoppingcart.php">Cart</a></li>
            <li><a class="selected" href="checkout.php">Checkout</a></li>
            <li><a href="about.php">About</a></li>
			<li><a href="admin/index.php">Admin Login</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div class="cleaner h20"></div>
    <div id="main_top"></div>
    <div id="main">
    	
        <div id="sidebar">
           
        </div> <!-- END of sidebar -->
        
        <div id="content">
       		<h2>Checkout</h2>
            
           <div id="content">
			<h2>User Information <span style="color: #a11; font-size: 13px; margin-left: 50px;"><?php echo $msg; ?><span></h2>
			
			<form name="addnew_user_form" method="get" action="billingdetail.php">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="col col_13 checkout">name:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="name" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">address:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="address" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">city:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="city" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">country:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="country" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">email:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="email" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">phone:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="phone" style="width:300px;"/></td>
				</tr>

			</table>
			<div class="marginleft_1">
				<input class="margintop_2 sub_btn" type="submit" name="btnaddnew" value="Save" style="width:150px;"/>
				<input class="margintop_2 sub_btn" type="reset" name="btnreset" value="Reset" style="width:150px;" style="height:150px;" />
			</div>
			</form>
		</div><!-- end of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="main_footer">   
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2015 PravinPranav
		</center>
    </div> <!-- END of footer -->   
   
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
