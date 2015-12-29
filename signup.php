
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="formvalid.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>getMybooks.co</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script language="javascript" type="text/javascript">
   
   var http = false;   
      if (window.XMLHttpRequest) 
	  {  
	  http = new XMLHttpRequest();
	  } 
	  else if (window.ActiveXObject) {
	  http = new ActiveXObject("Microsoft.XMLHTTP");
	  } 
	 
function replace()
{

http.onreadystatechange=function(){

if(http.readyState==4 && http.status== 200)
{
document.getElementById("repl").innerHTML=http.responseText;

}
}
http.open("POST","repl.html",true);
http.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
http.send(null);
}
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
        <ul>
            <li><a href="index.php" class="selected">Home</a></li>
           
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;&nbsp;</li>
			<li><a href="login.php">Login</a></li>
			<li><a href="admin/index.php">Admin Login</a></li>
			<li><a href="about.php">About</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div id="main_middle">
    	<img src="images/logo.png" alt="Image 01" width="200" height="220"/>
    	<h1></h1>
        <p></p>
        <a href="index.php" class="buy_now"></a>
    </div> <!-- END of middle -->
    
    <div id="main_top"></div>
    <div id="main">
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
           		<li><a href='index.php?cat=Engineering'>Engineering</a></li>
<li><a href='index.php?cat=Technology'>Technology</a></li>
<li><a href='index.php?cat=compitative '>compitative </a></li>
<li><a href='index.php?cat=Teaching Resources'>Teaching Resources</a></li>
<li><a href='index.php?cat= Medical'> Medical</a></li>
<li><a href='index.php?cat=computing'>computing</a></li>
<li><a href='index.php?cat=Art and Photography'>Art & Photography</a></li>
<li><a href='index.php?cat=Audio Books'>Audio Books</a></li>
<li><a href='index.php?cat=Biography'>Biography</a></li>
<li><a href='index.php?cat=Business, Finance and Law'>Business, Finance & Law</a></li>
<li><a href='index.php?cat=Crime and Thriller'>Crime & Thriller</a></li>
<li><a href='index.php?cat=Dictionaries and Languages'>Dictionaries & Languages</a></li>
<li><a href='index.php?cat=Entertainment'>Entertainment</a></li>
<li><a href='index.php?cat=Health'>Health</a></li>
<li><a href='index.php?cat=History and Archaeology'>History & Archaeology</a></li>
<li><a href='index.php?cat=Humour'>Humour</a></li>
<li><a href='index.php?cat=Mind, Body and Spirit'>Mind, Body & Spirit</a></li>
<li><a href='index.php?cat=Natural History'>Natural History</a></li>
<li><a href='index.php?cat=Personal Development'>Personal Development</a></li>
<li><a href='index.php?cat=Poetry and Drama'>Poetry & Drama</a></li>
<li><a href='index.php?cat=Reference'>Reference</a></li>
<li><a href='index.php?cat=Religion'>Religion</a></li>
<li><a href='index.php?cat=Science and Geography'>Science & Geography</a></li>
<li><a href='index.php?cat=Science Fiction'>Science Fiction</a></li>
<li><a href='index.php?cat=Society and Social Sciences'>Society & Social Sciences</a></li>
<li><a href='index.php?cat=Sport'>Sport</a></li>
<li><a href='index.php?cat=Teaching Resources'>Teaching Resources</a></li>
<li><a href='index.php?cat=Transport'>Transport</a></li>
<li><a href='index.php?cat=Travel and Holiday Guides'>Travel & Holiday Guides</a></li>
		</ul>
        </div> <!-- END of sidebar -->
        
        <div id="content">
		<h2>CREATE UR ACCOUNT:</h2>
		<form method="POST" onsubmit='return formValidation()'action="#"><p id="head"</p><br>
		<table id="tb">
		<tr><td>
		Name:<input type='text' id='firstname' name="fn" placeholder="your name"/><br />
		<p id="p1"></p>	<!--This segment displays the validation rule for name--> </td>				
		<td>
		Username:<input type='text' id='username' name="un"placeholder="choose ur username" /><br />
		<p id="p7"></p> <!--This segment displays the validation rule for user name--> </td>
		</tr>
		<tr><td align="right">
		Password:</td><td><input type='password' id='pwd'name="pwd" placeholder="password"/><br />
		<p id="p8"></p></td>
		</tr><tr><td align="right">
		Re-enter password:</td><td><input type='password' id='cpwd' name="cpwd"placeholder="conform ur password"/><br />
		<p id="p9"></p></td>
		</tr><tr><td align="right">
		Email:</td><td><input type='text' id='email'name="email" placeholder="email" /><br />
		<p id="p3"></p> <!--This segment displays the validation rule for email--> 
		</td></tr><tr><td align="right">
		 Phone:</td><td><input type="text" id='phone' name="phone" placeholder="phone" /><br/>
		<p id="p4"></p> <!--This segment displays the validation rule for phone--> 
		</td></tr><tr><td align="right">
		Address:</td><td><input type='text' id='addr'name="addr" placeholder="address" /><br />
		<p id="p5"></p> <!--This segment displays the validation rule for address--> 
        </td></tr><tr><td></td><td align="leftt"><input type="radio" name="role" value="student" onclick="replace()">Student<br><div id="repl"></div>
		<input type="radio" name="role" value="others">Others</td></tr>
		<tr><td align="center" colspan="2">
		<input type='submit' class="sub_bt"id="submit"name="submit" value='create'/>&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' class="sub_bt"id="submit" value='reset'/><br />
	</td></tr></table></form>
<?php
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	$err="";
	if(isset($_POST['college']))
	$college=$_POST['college'];
	else
	$college="null";
	if(isset($_POST['submit']))
	{
	$name=$_POST['fn'];
	$username=$_POST['un'];
	$pwd=$_POST['pwd'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['addr'];
	$role=$_POST['role'];
	$r=mysql_query("select * from users where s_id='$username'") or die(mysql_query());
	$f=mysql_num_rows($r);
	if( $f > 0)
	{
	?>
	<script type="text/javascript">
	           
				document.getElementById('p7').innerText="**try with different user name**";
				p7.focus();
				
				</script>
	
	<?php
	}
	else{
	mysql_query("insert into users(s_id,password,email,phone,address,name,role,college)values('$username','$pwd','$email','$phone','$address','$name','$role','$college')");
	?>

	<script type="text/javascript">
				document.getElementById('head').innerHTML="ur registered successfully....<a href='login.php' style='color:blue;'>goto login page</a>";
				p7.focus();
				</script>
<?php	}
	
	}
	?>

		
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
