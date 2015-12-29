<?php
    include("accesscheck.php");
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	$raj="";
	if(isset($_GET['ud']))
	{
	$raj=$_GET['ud'];
//	print $raj;
	}
	$displayImages = "";
     	$sqlSelProd = mysql_query("select * from tblproduct order by prod_name") or die(mysql_error());
	
	if(isset($_GET['cat']))
	{
	if($_GET['cat'] == "Engineering")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Technology")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
else if($_GET['cat']=="compitative ")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Teaching Resources")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']==" Medical")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="computing")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Art and Photography")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Audio Books")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Biography")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Business, Finance and Law")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Crime and Thriller")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Dictionaries and Languages")
		$sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else if($_GET['cat']=="Entertainment")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Health")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="History and Archaeology")
         $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error()); 
    else if($_GET['cat']=="Humour")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Mind, Body and Spirit")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Natural History")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Personal Development")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Poetry and Drama")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Reference")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Religion")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Science and Geography")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Science Fiction")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Society and Social Sciences")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Sport")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Teaching Resources")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Transport")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
    else if($_GET['cat']=="Travel and Holiday Guides")
	     $sqlSelProd = mysql_query("select * from tblproduct where prod_cat = '$_GET[cat]'") or die(mysql_error());
	else
		$sqlSelProd = mysql_query("select * from tblproduct") or die(mysql_error());
	}
	if(mysql_num_rows($sqlSelProd) >= 1){
		while($getProdInfo = mysql_fetch_array($sqlSelProd)){
			$prodNo = $getProdInfo["prod_no"];
			//$prodID = $getProdInfo["prod_id"];
			$prodName = $getProdInfo["prod_name"];
			$prodPrice = $getProdInfo["prod_price"];
			$sold=$getProdInfo["sold"];
			if($sold !='yes')
			{
			$displayImages .= '<div class="col col_14 product_gallery" id="r'.$prodNo.'" >
			<a href="productdetail.php?p='.base64_encode($prodNo).'&d='.base64_encode($_SESSION['valid_uid']).'"><img src="images/product/'.$prodNo.'.jpg" alt="Product '.$prodNo.'" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">Rs'.$prodPrice.'</p>
			<a href="logcheck.php?p='.base64_encode($prodNo).'&sd='.base64_encode($_SESSION['valid_uid']).'" class="add_to_cart">BUY</a></div>';
		   }
		   else if($sold=='yes')
		   {
		   $displayImages .= '<acronym title="Book is Soldout"><div class="col col_14 product_gallery" id="blr" >
			<a href="productdetail.php?p='.base64_encode($prodNo).'&d='.base64_encode($_SESSION['valid_uid']).'"><img src="images/product/'.$prodNo.'.jpg" alt="Product '.$prodNo.'" width="170" height="150" /></a>
			<h3>'.$prodName.'</h3>
			<p class="product_price">Rs'.$prodPrice.'</p>
			<a href="logcheck.php?p='.base64_encode($prodNo).'&sd='.base64_encode($_SESSION['valid_uid']).'" class="add_to_cart">BUY</a></div></acronym>';
		   
		   }
		} 
	}
	
?>
<script>

 var http = false;   
      if (window.XMLHttpRequest) 
	  {  
	  http = new XMLHttpRequest();
	  } 
	  else if (window.ActiveXObject) {
	  http = new ActiveXObject("Microsoft.XMLHTTP");
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
function  upload(d)
{

http.onreadystatechange=function(){

if(http.readyState==4 && http.status== 200)
{
document.getElementById("content").innerHTML=http.responseText;

}
}
http.open("POST","upload.php",true);
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
                <form action="products.php?ac=<?php echo $_SESSION['valid_uid'];?>" method="get" name="search_form">
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
	<style>
	</style>
	<ul id="us"><li id="t"><?php echo ucfirst( $_SESSION['valid_uid']); ?></li><li  onclick="getorder('<?php echo $_SESSION['valid_uid']; ?>')">My Orders</li>
	 <li class="add_to_cart" onclick="getcart('<?php echo $_SESSION['valid_uid']; ?>')">My Purches</li>
	 <li><a href="upload.php?ud=" style="color:white;">Upload</a></li><li>Account</li><li><a href="logout.php" style="color:white;">Logout</a></li></ul>
    </div>
	<div id="main_top"></div>
    <div id="main" ><br>
	 
        <div id="sidebar">
	<ul class="sidebar_menu"><li>	<a href="books_from_college.php">Books from your college</a></li></ul>
		<br><br>
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
		<h2>Books</h2>
		<?php echo $displayImages; ?>
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
