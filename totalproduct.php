<?php 
include "admin/php/connect_to_mysql.php";
//################ engineering###############
$ary=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Engineering' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("engineering"=>$ary));

//################ degree###############

$ary1=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Degree' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary1,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Degree"=>$ary1));


//################ Diploma ###############

$ary2=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Diploma' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary2,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Diploma"=>$ary2));

//################ mba###############

$ary3=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='MBA' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary3,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("MBA"=>$ary3));

					

//################ mca###############

$ary4=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='MCA' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary4,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("MCA"=>$ary4));
		
					//<option>Competitive</option>
//################ compitative ###############
$ary5=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Competitive' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary5,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Competitive"=>$ary5));

										//<option>Intermediate</option>
$ary6=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Intermediate' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary6,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Intermediate"=>$ary6));

//<option>Teaching Resources</option>
				
//################ Teaching Resources ###############

$ary7=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Teaching Resources' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary7,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Teaching Resources"=>$ary7));

//	<option> Medical</option>
				
$ary8=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Medical' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary8,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Medical"=>$ary8));
	//<option>computing</option>

$ary9=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='computing' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary9,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("computing"=>$ary9));


//<option>Biography</option>

$ary10=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Biography' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary10,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Biography"=>$ary10));

//<option>Business, Finance and Law</option>


$ary11=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Business, Finance and Law' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary11,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Business, Finance and Law"=>$ary11));

//<option>Dictionaries and Languages</option>
//<option>Entertainment</option>

$ary12=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Entertainment' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary12,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Entertainment"=>$ary12));

//<option>Health</option>
//<option>Humour</option>

$ary13=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Health' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary13,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Health"=>$ary13));

//<option>Personal Development</option>
//<option>Poetry and Drama</option>
//<option>Reference</option>
//<option>Magazine</option>


$ary14=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Magazine' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary14,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}

echo json_encode(array("Magazine"=>$ary14));

//<option>Science and Geography</option>
//<option>Science Fiction</option>
//<option>Society and Social Sciences</option>

//<option>Travel and Holiday Guides</option>

$ary15=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Science and Geography' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary15,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}
echo json_encode(array("Science and Geography"=>$ary15));

//<option>Sport</option>

$ary16=array();
$rq=mysql_query("select * from tblproduct where sold='no' and prod_cat='Sport' ");
while($row=mysql_fetch_array($rq))
{
$r="select * from users where s_id='$row[0]'";
$r1=mysql_query($r);
$row1=mysql_fetch_array($r1);
array_push($ary16,array('s_id'=>$row[0],'prod-no'=>$row[1],'name'=>$row[2],'description'=>$row[3],'category'=>$row[4],'price'=>$row[5],'quantity'=>$row[6],'uname'=>$row1[5],'phone'=>$row1[3],'college'=>$row1[7]));
}
echo json_encode(array("Sport"=>$ary16));

?>
