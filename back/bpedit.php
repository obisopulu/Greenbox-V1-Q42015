<?php include("../top.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin *Person</title>
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
                                        Edit Person
                                    </td>
	
</tr>
</table>
<?php
if ($_POST['edit']=="Edit")
	{ 
		echo $_POST['theID'];
		$query="SELECT * FROM persons WHERE personID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='bpedit.php' enctype='multipart/form-data' method='post'>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
	<table align='center' bgcolor='#444'><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'>person' Stage Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personStageName' maxlength='50' value='$personStageName' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personBirthName' maxlength='100' value='$personBirthName' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Fan Name(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personFanName' maxlength='50' value='$personFanName' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Genre(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personGenre' maxlength='50' value='$personGenre' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Day(5)<br/>
		<div  style='float:left;'><input required='required' size='5' type='text' name='personBirthDay' maxlength='5' value='$personBirthDay' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Birth Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personBirthYear' maxlength='4' value='$personBirthYear' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Place Of Origin(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personPlaceOfOrigin' maxlength='100' value='$personPlaceOfOrigin' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Profession(50)<br/>
		<div  style='float:left;'><input size='10' type='text' name='personProfession' maxlength='50' value='$personProfession' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Career Start Year(4)<br/>
		<div  style='float:left;'><input required='required' size='4' type='text' name='personCareerStartYear' maxlength='4' value='$personCareerStartYear' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>person' Label(50)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personLabel' maxlength='50' value='$personLabel' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>person' Associated Acts(200)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='personAssociatedActs' maxlength='200' value='$personAssociatedActs' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>personLifeStory(1000)<br/>
	<div  style='float:left;'><textarea name='personLifeStory' cols='25' rows='2'  required='required' value='$personLifeStory' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>(hint: this space is resizable)Born and brought down then sick Bliss helped him and so on Afor na ur work b dis las las</textarea></div>
	</td></tr><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444' colspan='3' align='center'>----------<br/>
		<input name='update' type='submit' value='Update' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
if ($_POST['update']=='Update')
	{
		echo $_POST['theID'];
		$query = "UPDATE persons
		
		SET  
		
		personStageName = '{$_POST['personStageName']}' , 
		personBirthName = '{$_POST['personBirthName']}' , 
		personFanName = '{$_POST['personFanName']}' , 
		personGenre = '{$_POST['personGenre']}' , 
		personBirthDay = '{$_POST['personBirthDay']}' , 
		personBirthYear = '{$_POST['personBirthYear']}' , 
		personPlaceOfOrigin = '{$_POST['personPlaceOfOrigin']}' , 
		personProfession = '{$_POST['personProfession']}' , 
		personCareerStartYear = '{$_POST['personCareerStartYear']}' , 
		personLabel = '{$_POST['personLabel']}' , 
		personAssociatedActs = '{$_POST['personAssociatedActs']}' , 
		personLifeStory = '{$_POST['personLifeStory']}'
		
		WHERE personID = '1' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
	include('bfooter.inc')
?>
</body>
</html>