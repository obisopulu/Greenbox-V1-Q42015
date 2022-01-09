<?php include("../top.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin *Label</title>
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
                                        Edit Label
                                    </td>
	
</tr>
</table>
<?php
if ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM labels WHERE labelID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='bledit.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
		<td style='padding:5px; font-size:12px; font-weight:bold'>label' Name(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelName' maxlength='100' value='$labelName' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Owner(100)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelOwner' maxlength='100' value='$labelOwner' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Intro(1000)<br/>
		<div  style='float:left;'><textarea name='labelIntro' cols='10' rows='2'  required='required' value='$labelIntro' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>spice this shit up</textarea></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>label' History(1000)<br/>
		<div  style='float:left;'><textarea name='labelHistory' cols='10' rows='2'  required='required' value='$labelHistory' maxlength='1000' style='color:#444; background-color:#CCC; border:none; padding:5px'>make this shit History</textarea></div>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>label' Artists(300)<br/>
		<div  style='float:left;'><input required='required' size='10' type='text' name='labelArtists' maxlength='300' value='$labelArtists' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>label' Producers(200)<br/>
		<div  style='float:left;'><input size='10' type='text' name='labelProducers' maxlength='200' value='$labelProducers' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
	</td></tr><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444' colspan='3' align='center'>----------<br/>
		<input name='update' type='submit' value='Update' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
if ($_POST['update']=='Update')
	{
		$query = "UPDATE labels 
		
		SET  
		
		labelName='{$_POST['labelName']}' , 
		labelOwner='{$_POST['labelOwner']}' , 
		labelIntro='{$_POST['labelIntro']}' , 
		labelHistory='{$_POST['labelHistory']}' , 
		labelArtists='{$_POST['labelArtists']}' ,  
		labelProducers='{$_POST['labelProducers']}'
		
		WHERE labelID = '{$_POST['theID']}' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
	include('bfooter.inc')
?>
</body>
</html>