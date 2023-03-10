<html>
<head>
<title> Banking Project </title>
</head>
<link rel="stylesheet" href="styles.css">

<center><img src="images/head6.png" width="1500" height="100"></center> <br><br>


<table align=center border=5 width=80% cellpadding=5 cellspacing=0>
<tr><td> ACNo </td><td> Name </td><td> Address </td><td> MobileNo</td><td> eMail</td><td> actype</td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from CustAcTab where custapp='Y'";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]." </td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
</body>
</html>