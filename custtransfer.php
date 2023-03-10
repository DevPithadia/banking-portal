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
	$v1=$_SESSION['acno'];;
	$v2=$_POST['text2'];
	$v3=$_POST['text3'];
	$v4=$_POST['text1'];


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
	$result=$conn -> query($sqlvar);
	$sqlvar2="insert into tranTab values($nvar+1,'$d1',$v4,0,$v2,'$v3')";
	$result2=$conn -> query($sqlvar2);
	if($result && $result2)
	{
		$res="Record Inserted";
		
	}
	else
	{
		
		$res="Record Not Inserted, Some problem";
	}
	
	
}
?>

<form name=form1 method="post"  action="custtransfer.php">

<table width=80% border=1 cellpadding=5 align=center>
<tr> <td colspan=2> Transfer Money </td> </tr>
<tr> <td >To AcNo </td> <td> <input type=text name=text1> </td> </tr>
<tr> <td > Amount</td> <td> <input type=text name=text2> </td> </tr>
<tr> <td > Transfer Details  </td> <td> <input type=text name=text3> </td> </tr>

<tr> <td > <a href=custmainpage.php> Back </a> </td> <td> <input type=submit name=Login  style="height: 45px; width: 150px"> </td> </tr>
<tr> <td colspan=2> <?php echo $res; ?> </td> </tr>
</table>

</form>

<table width=100%>
<tr height=200> <td></td> </tr>
</table>
</body>
</html>