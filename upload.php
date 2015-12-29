
<?php
include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	include("accesscheck.php");
	$raj="";
	if(isset($_GET['ud']))
	{
	$raj=$_GET['ud'];
//	print $raj;
	}
	include("admin/php/connect_to_mysql.php");
	require_once "admin/php/formvalidator.php";
	$msg = "";
	if(isset($_POST['btnaddnew']))
	{
	$submit = $_POST['btnaddnew'];
	
	if($submit == "Save"){
	            
				mysql_query("insert into tblproduct(s_id,prod_name, prod_descr, prod_cat, prod_price, prod_quan, date_added ,sold)
					values('$_SESSION[valid_uid]','$_POST[ProductName]','$_POST[txtProdDescr]','$_POST[selProdCat]','$_POST[ProductPrice]','$_POST[ProductQuantity]',now(),'no')") or die(mysql_error());
				$imgID = mysql_insert_id();
				$newname = "$imgID.jpg";
				move_uploaded_file($_FILES['fileField']['tmp_name'],"images/product/$newname");
				mysql_query("insert into usrprod(s_id,prod_name, prod_descr, prod_cat, prod_price, prod_quan, date_added,sold)
					values('$_SESSION[valid_uid]','$_POST[ProductName]','$_POST[txtProdDescr]','$_POST[selProdCat]','$_POST[ProductPrice]','$_POST[ProductQuantity]',now(),'no')") or die(mysql_error());

				$msg = "Successfully added your book!";

			
 	}
	}?>

<?php
	
	
	
?>
<script>
 var http = false;   
      if (window.XMLHttpRequest) 
	  {  
	  http = new XMLHttpRequest();
	  } 
	  else if (window.ActiveXObject) {
	  XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	  } 
	 
function getorder(d)
{

http.onreadystatechange=function(){

if(http.readyState==4 && http.status== 200)
{
document.getElementById("content").innerHTML=http.responseText;

}
}
http.open("POST","myorders.php",true);
http.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
http.send("da="+d);
}
	 
function getcart(d)
{

http.onreadystatechange=function(){

if(http.readyState==4 && http.status== 200)
{
document.getElementById("content").innerHTML=http.responseText;

}
}
http.open("POST","mycart.php",true);
http.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
http.send("da="+d);
}





</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>getMybooks.co</title>
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

<body id="home">

<div id="main_wrapper">
	<div id="main_header">
    	<div id="site_title"><h1><font color="#000000" size="+1"><img src='images/get1.png' style="opacity:0.78;"/></font></h1></div>
        
        <div id="header_right">
            <div id="main_search">
                <form action="products.php" method="get" name="search_form">
                  <input type="text" value="Search" name="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            
      </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="main_menu" class="ddsmoothmenu">
       <marquee direction='left' style="margin-top:15px;font-size:16px;font-family:Agency FB;font-weight:bold;">This is getmybooks.co</marquee>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div id="main_middle">
    	<img src="images/logo.png" alt="Image 01" width="200" height="220"/>
    	<h1></h1>
        <p></p>
        <a href="index.php" class="buy_now"></a>
    </div> <!-- END of middle -->
   <div id="di"style="">
	<ul id="us"><li id="t"><?php echo $_SESSION['valid_uid']; ?></li><li  onclick="getorder('<?php echo $_SESSION['valid_uid']; ?>')">My Orders</li>
	 <li class="add_to_cart" onclick="getcart('<?php echo $_SESSION['valid_uid']; ?>')">My Purches</li>
	 <li><a href="upload.php?ud=" style="color:white;">Upload</a></li><li>Account</li><li><a href="logout.php" style="color:white;">Logout</a></li></ul>
    </div>
    <div id="main_top"></div>
	
    <div id="main" ><br>
	
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
           	
<li><a href='user.php?cat=Engineering&ud=<?php echo $raj;?>'>Engineering</a></li>
<li><a href='user.php?cat=Technology&ud=<?php echo $raj;?>'>Technology</a></li>
<li><a href='user.php?cat=compitative &ud=<?php echo $raj;?>'>compitative </a></li>
<li><a href='user.php?cat=Teaching Resources&ud=<?php echo $raj;?>'>Teaching Resources</a></li>
<li><a href='user.php?cat= Medical&ud=<?php echo $raj;?>'> Medical</a></li>
<li><a href='user.php?cat=computing&ud=<?php echo $raj;?>'>computing</a></li>
<li><a href='user.php?cat=Art and Photography&ud=<?php echo $raj;?>'>Art & Photography</a></li>
<li><a href='user.php?cat=Audio Books&ud=<?php echo $raj;?>'>Audio Books</a></li>
<li><a href='user.php?cat=Biography&ud=<?php echo $raj;?>'>Biography</a></li>
<li><a href='user.php?cat=Business, Finance and Law&ud=<?php echo $raj;?>'>Business, Finance & Law</a></li>
<li><a href='user.php?cat=Crime and Thriller&ud=<?php echo $raj;?>'>Crime & Thriller</a></li>
<li><a href='user.php?cat=Dictionaries and Languages&ud=<?php echo $raj;?>'>Dictionaries & Languages</a></li>
<li><a href='user.php?cat=Entertainment&ud=<?php echo $raj;?>'>Entertainment</a></li>
<li><a href='user.php?cat=Health&ud=<?php echo $raj;?>'>Health</a></li>
<li><a href='user.php?cat=History and Archaeology&ud=<?php echo $raj;?>'>History & Archaeology</a></li>
<li><a href='user.php?cat=Humour&ud=<?php echo $raj;?>'>Humour</a></li>
<li><a href='user.php?cat=Mind, Body and Spirit&ud=<?php echo $raj;?>'>Mind, Body & Spirit</a></li>
<li><a href='user.php?cat=Natural History&ud=<?php echo $raj;?>'>Natural History</a></li>
<li><a href='user.php?cat=Personal Development&ud=<?php echo $raj;?>'>Personal Development</a></li>
<li><a href='user.php?cat=Poetry and Drama&ud=<?php echo $raj;?>'>Poetry & Drama</a></li>
<li><a href='user.php?cat=Reference&ud=<?php echo $raj;?>'>Reference</a></li>
<li><a href='user.php?cat=Religion&ud=<?php echo $raj;?>'>Religion</a></li>
<li><a href='user.php?cat=Science and Geography&ud=<?php echo $raj;?>'>Science & Geography</a></li>
<li><a href='user.php?cat=Science Fiction&ud=<?php echo $raj;?>'>Science Fiction</a></li>
<li><a href='user.php?cat=Society and Social Sciences&ud=<?php echo $raj;?>'>Society & Social Sciences</a></li>
<li><a href='user.php?cat=Sport&ud=<?php echo $raj;?>'>Sport</a></li>
<li><a href='user.php?cat=Teaching Resources&ud=<?php echo $raj;?>'>Teaching Resources</a></li>
<li><a href='user.php?cat=Transport&ud=<?php echo $raj;?>'>Transport</a></li>
<li><a href='user.php?cat=Travel and Holiday Guides&ud=<?php echo $raj;?>'>Travel & Holiday Guides</a></li>
		</ul>
        </div> <!-- END of sidebar -->
        
        <div id="content">
		
		
<h2>Book Information <span style="color: #a11; font-size: 13px; margin-left: 50px;"><?php echo $msg; ?><span></h2>
			<script language="JavaScript" src="gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
			<form name="myform" method="post" action="" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					
					<td colspan="2" class="border border_tlr border_ts border_ls border_bs col_02 border_rs col_2 border_trr">Book Image:<input class="col_3 marginleft_3" type="file" name="fileField" value="bd.jpg"/></td>
				</tr>
				<tr>
					<td class="border border_ls border_bs col_1">Book Name:</td>
					<td colspan="3" class="border border_bs border_rs col_2"><input class="col_4" type="text" name="ProductName" required="required"/></td>
				</tr>
				<tr>
					<td class="border border_ls border_bs col_1">Book Description:</td>
					<td colspan="3" class="border border_bs border_rs col_2"><textarea name="txtProdDescr"required="required" cols="40" rows="4" placeholder="book author,etc..."></textarea></td>
				</tr>
				<tr>
					<td class="border border_ls border_bs col_1">Book Category:</td>
					<td colspan="3" class="border border_bs border_rs col_2"><select name="selProdCat"required="required" class="col_2">
					<option></option><option>Engineering</option><option>Technology</option>
					<option>compitative </option><option>Teaching Resources</option>
<option> Medical</option><option>computing</option>
<option>Art and Photography</option><option>Audio Books</option>
<option>Biography</option>
<option>Business, Finance and Law</option>
<option>Crime and Thriller</option>
<option>Dictionaries and Languages</option>
<option>Entertainment</option>
<option>Health</option>
<option>History and Archaeology</option>
<option>Humour</option>
<option>Mind, Body and Spirit</option>
<option>Natural History</option>
<option>Personal Development</option>
<option>Poetry and Drama</option>
<option>Reference</option>
<option>Religion</option>
<option>Science and Geography</option>
<option>Science Fiction</option>
<option>Society and Social Sciences</option>
<option>Sport</option>
<option>Teaching Resources</option>
<option>Transport</option>
<option>Travel and Holiday Guides</option></select></td>
					 
				</tr>
				<tr>
					<td class="border border_ls border_bs col_1">Book Price:</td>
					<td colspan="3" class="border border_bs border_rs col_2"><input type="text" required="required"name="ProductPrice" /></td>
				</tr>
				<tr>
					<td class="border border_ls border_bs col_1">No of Books:</td>
					<td colspan="3" class="border border_bs border_rs col_2"><input type="text"required="required" name="ProductQuantity" /></td>
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
           

</div>
          </td>
        </tr>
			</table>
			
			<div class="marginleft_1">
				<input class="margintop_2 sub_bt" type="submit" name="btnaddnew" value="Save"/><span>&nbsp;&nbsp&nbsp;</span>
				<input class="margintop_2 sub_bt" type="reset"  value="Reset" />
			</div>
			</form>
			

        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="main_footer">   
        
    </div> <!-- END of footer -->   
   
</div>
<div style="height:150px;background-color:#00796b;opacity:0.88;">
<center ><br><br><br><p style="color:white;opacity:0.89;">
			Copyright © 2015 getmybooks.co</p>
		</center>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>
