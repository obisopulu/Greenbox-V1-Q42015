<?php include("../top.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin *Activity</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.ico"  rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<table align="center" width="800px" height="113px" >
<tr>
	<td align="left" width="25%">
		 <a href="../index.php"><<  Go Frontyard  <<</a><br/><a href="backyard.php"><<  Go Dashboard  <<</a>
	</td>
    <td width="50%" align="center">
		<img src="../img/favi.ico" id="imagerad" width="35px" height="35px" draggable="false" dropzone="link" data-icon="gear"/>
	</td>
    <td align="left" width="25%" style="font-size:40px; font-weight:900; color:#CCC; padding:4px;">
                                        Edit Activity
                                    </td>
	
</tr>
</table>
<?php
if ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM activities WHERE activityID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='baedit.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
		<td style='padding:5px; font-size:12px; font-weight:bold'>Activity Name(100)<br/>
		<input required='required' size='10' type='text' name='activityName' maxlength='100' value='$activityName' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Day(2)<br/>
		<input size='2' type='text' name='activityDay' maxlength='2' value='$activityDay' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Month(2)<br/>
		<input size='2' type='text' name='activityMonth' maxlength='2' value='$activityMonth' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>Activity Year(2)<br/>
		<input size='2' type='text' name='activityYear' maxlength='2' value='$activityYear' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>activities' Info(1000)<br/>
		<textarea name='activityInfo' cols='10' rows='2'  required='required' value='$activityInfo' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>$activityInfo</textarea></td></tr><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444' colspan='3' align='center'>----------<br/>
		<input name='update' type='submit' value='Update' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
if ($_POST['update']=='Update')
	{
		$query = "UPDATE activities 
		
		SET  
	
		activityName='{$_POST['activityName']}' ,
		activityPic='{$_POST['activityPic']}' ,
		activityInfo='{$_POST['activityInfo']}' ,
		activityDay ='{$_POST['activityDay']}' ,
		activityMonth ='{$_POST['activityMonth']}' ,
		activityYear ='{$_POST['activityYear']}' ,
		activityDate ='{$_POST['activityDate']}'

		WHERE activityID = '{$_POST['theID']}' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
	include('bfooter.inc')
?>
</body>
</html>