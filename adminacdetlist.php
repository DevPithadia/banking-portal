<html>
<head>
<title> Banking Project </title>
</head>
<link rel="stylesheet" href="styles.css">

<center><img src="images/head6.png" width="1500" height="100"></center> <br><br>


<table align=center width=80% cellpadding=6 cellspacing=5>
<tr><td><h3> AC Name </h3> </td><td><h3> Details </h3> </td><td><h3> Facilities </td><td> <h3> Min Bal </h3> </td></tr>
<?php
include("connfile.php");

	$sqlvar="select * from actypeTab order by actypename";
	$result=$conn -> query($sqlvar);
	while($row=$result->fetch_row())
	{
		echo("<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>");
		
	}
	
?>

</table>
<a href=adminmainpage.php> Back </a> 
<table width=200%>
<tr height=300> <td></td> </tr>
</table>
</body>
</html>