<?php
session_start();
	include("admin/php/connect_to_mysql.php");
	include("admin/php/myFunctions.php");
	$err="";
	if(isset($_POST['btnLogin'])){
	$u_id=$_POST['txtLogin'];
	$u_pass=$_POST['txtPassword'];
	$q="select s_id,password from users where s_id='$u_id' and password='$u_pass'";
	$r=mysql_query($q);
	$f=mysql_fetch_array($r);
	if($f['s_id']==''&& $f['password']=='')
	{
	$err='<center><font color="light green">login failed...</font></center>';
	}
	else{
	$rk=$f['s_id'];
	$_SESSION['user']=$f['s_id'];
	header('location: user.php?ud='.$rk);}
	
	}
	$displayImages = '';
     	
	
	
	
?>
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
        <ul>
            <li><a href="index.php" >Home</a></li>
           
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;&nbsp;</li>
			<li><a href="#" class="selected">Login</a></li>
			<li><a href="signup.php">Signup</a></li>
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
		<h2>User Login</h2>
		<form id="login-form" action="user.php" method="post">
		<fieldset>
			<?php
			if(isset($_GET['e'])==1)
			{
			$err='<center><font color="light green">login failed...</font></center><br>';
			}
			echo $err; ?>
			<legend>Log in</legend>
			<label style="margin-left:70px;"for="login">Username</label>
			<input type="text" name="txtLogin" id="logintp" placeholder="Username" required="required"/>
			<label for="password">Password</label>
			<input type="password" name="txtPassword"id="logintp" placeholder="Password" required="required"/>
			<div class="clear"></div>
			<div class="clear"></div>
			
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="sub_bt" name="btnLogin" value="Login"/>
             <input type="reset" style="margin-left:15px;" class="sub_bt" value="reset"/>	<a href="signup.php"><br><p>If you dont have account? <font color="green">Signup</font></a></p>			 
		</fieldset>
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
