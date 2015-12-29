
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SuperMart</title>
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
    	<div id="site_title"><h1><a href="#" rel="nofollow"><font color="#000000" size="+1">SuperMart</font></a></h1></div>
        
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
			<script language="JavaScript" src="gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
  </head>
  <body>
    
			<form name="myform" method="get" action="billingdetail.php">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="col col_13 checkout">Name:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="Name" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">Address(Delivery only Available in India):</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="Address" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">City:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="City" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">Country:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="country" value="India" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">Email:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="Email" style="width:300px;"/></td>
				</tr>
				<tr>
					<td class="col col_13 checkout">Phone:</td></tr><tr>
					<td class="col col_13 checkout"><input type="text" name="Phone" style="width:300px;"/></td>
				</tr>
<tr>
          <td align="left"></td>
          <td>
            <div id="myform_errorloc" class="error_strings">
            </div>
          </td>
        </tr>
 <tr>
          <td align="left"></td>
          <td>
<div class="marginleft_1">
            <input class="margintop_2 sub_btn" type="submit" value="Submit" style="width:150px;" style="height:150px;"/>
<input class="margintop_2 sub_btn" type="reset" name="btnreset" value="Reset" style="width:150px;" style="height:150px;" />
</div>
          </td>
        </tr>

			</table>
			
				
				
			
			</form>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
 frmvalidator.EnableOnPageErrorDisplaySingleBox();
 frmvalidator.EnableMsgsTogether();
 
 frmvalidator.addValidation("Name","req","Please enter your Name");
  frmvalidator.addValidation("Name","maxlen=20",	"Max length for FirstName is 20");
  frmvalidator.addValidation("Name","alpha_s","Name can contain alphabetic chars only");


  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req");
  frmvalidator.addValidation("Email","email");
  
  frmvalidator.addValidation("Phone","maxlen=13");
  frmvalidator.addValidation("Phone","req");
  frmvalidator.addValidation("Phone","numeric","Phone number must be a number");
  
    frmvalidator.addValidation("Address","maxlen=50");
   frmvalidator.addValidation("Address","req");
  frmvalidator.addValidation("Country","dontselect=000");


//]]></script>
		</div><!-- end of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="main_footer">   
        <div class="cleaner h40"></div>
		<center>
			Copyright © 2015 Vaibhav Kshirsagar
		</center>
    </div> <!-- END of footer -->   
   
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
