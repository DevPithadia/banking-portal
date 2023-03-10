<html>
<head>
<title> Banking Project </title>
</head>
<link rel="stylesheet" href="styles.css">

<center><img src="images/head6.png" width="1500" height="100"></center> <br><br>
<?php
include("connfile.php");
session_start();
$res="";


if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo("working");
	$v1=$_POST['text1'];
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];

	//echo $v1."  ".$v2;
	$nvar=1001;
	$sqlvar="select max(tranno) + 1 from  tranTab";
	$result=$conn -> query($sqlvar);
	if($row=$result->fetch_row())
	{
		$nvar=$row[0];
	}
	if($nvar===null){$nvar=1001;}
	//echo($nvar);
	$d1=date('Y/m/d');
	$sqlvar="insert into tranTab values($nvar,'$d1',$v1,$v2,0,'$v3')";
	echo($sqlvar);
	$result=$conn -> query($sqlvar);
	if($result)
	{
		$res="Record Inserted";
		
	}
	else
	{
		
		$res="Record Not Inserted, Some problem";
	}
	
	
}
?>

<form name=form1 method="post"  action="admindeposit.php">

<table width=80% cellspacing=5 cellpadding=5 align=center>
<tr> <td colspan=2> <h3 align=center>Deposit Entry </h3></td> </tr>
<tr> <td > AcNo </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td > Amount</td> <td> <input type=text name=text2> </td> </tr>
<tr> <td > AcDetails  </td> <td> <input type=text name=text3> </td> </tr>

<tr> <td > <a href=adminmainpage.php> Back </a> </td> <td> <input type=submit name=Login  style="height: 45px; width: 150px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>

</form>

<table width=100%>
<tr height=200> <td></td> </tr>
</table>
</body>
</html>