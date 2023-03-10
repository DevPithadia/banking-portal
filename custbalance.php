<html>
<head>
<title> Banking Project </title>
</head>
<link rel="stylesheet" href="styles.css">

<center><img src="images/head6.png" width="1500" height="100"></center> <br><br>


<table align=center border=1 width=80% cellpadding=5 >
<tr> <td colspan=2> <h1> Balance Amount </h1> </tr>
<?php
include("connfile.php");
session_start();
$v1=$_SESSION['acno'];

	$sqlvar="select (sum(cramt) - sum(dbamt) ) as Balance from TranTab where acno=$v1";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td> Balance Amt </td><td>".$row[0]." </td></tr>");
		
	}
	
?>

</table>
<a href=custmainpage.php> Back </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
</body>
</html>