<html>
<head>
<title> Banking Project </title>
</head>
<link rel="stylesheet" href="styles.css">

<center><img src="images/head6.png" width="1500" height="100"></center> <br><br>

<table align=center border=1 width=80% cellpadding=5 >
<tr><td colspan=4 align=left><h3><a href=custlogin.php> Click here to Login </a> <h3> </td></tr>

<tr><td colspan=4><h3> Please select the Ac Type then Signup <h3> </td></tr>

<tr><td> AC Name </td><td> Details </td><td> Facilities </td><td> Min Bal </td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from actypeTab order by actypename";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td><a href=custsingup.php?actype=".$row[0].">".$row[0]."</a></td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
		
	}
	
?>

</table>
<a href=mainpage.php> Back </a> 
<table width=100%>
<tr height=200> <td></td> </tr>
</table>
</body>
</html>