<?php  include("../top.inc");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin -Label</title>
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
                                        Alter <br/> Label
                                    </td>
	
</tr>
</table>
<?php 
if ($_POST['labelName'] == '' or $_POST['labelOwner'] == '' or $_POST['labelArtists'] == '') 
	{?>
		<form method="POST" action="alterlabelprocessor.php">
		<table align="center" bgcolor="#444"><tr>
		<td style="padding:5px; font-size:12px;">label Name(50)<br />
		<div  style="float:left;"><input size="10" required type='text' name='labelName' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">label Owner(50)<br/>
		<div  style="float:left;"><input size="10" required type='text' name='labelOwner' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">label Artists(100)<br/>
		<div  style="float:left;"><input size="10" required type='text' name='labelArtists' maxlength='50' value='' style="color:#444; background-color:#CCC; border:none; padding:5px"></div>
		</td><td style="padding:5px; font-size:12px;">Extract<br/>
		<div  style="float:left;"><input name="extract" type='submit' value="Extract" style="color:#444; background-color:#CCC; border:none; padding:15px 15px"></div>
		</td>
		</tr></table>
		</form>
<?php 
	}
else
	{
		$query = "SELECT * FROM labels WHERE labelName LIKE '%".$_POST['labelName']."%' OR labelOwner LIKE '%".$_POST['labelOwner']."%' OR labelArtists LIKE '%".$_POST['labelArtists']."%' LIMIT 20";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center' bgcolor='#444'>
		<tr  bgcolor='#555' height='11px'>
        <td width='' style='padding:5px 5p;'>label Name</td>
        <td width='auto' style='padding:5px 5p;'>labelOwner</td>
        <td style='padding:5px 5p;'>label Artists</td>
		<td style='padding:5px 5p; background-color:#733;'>Delete</td>
		<td style='padding:5px 5p; background-color:#337;'>Edit</td>
		</tr>";
	$r = 1;
	?><?php
	while($row = mysql_fetch_array($result))
		{
			extract($row);
			$c= $r%2;?>
	 		<tr bgcolor='<?php if ($c==0) echo "#666"; else echo "#777" ?>'>
    	    <td style="padding:0px 5px;"><?php echo trim($labelName)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($labelOwner)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($labelArtists)?></td>
            <form action="bldelete.php" method="post">
	        <td style='padding:5px 5p; background-color:#733;'><input type='hidden' name='theID' value='<?php echo $labelID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/><input type="submit" name="" value="" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/></td>
            </form>
            <form action="bledit.php" method="post">
	        <td style='padding:5px 5p; background-color:#337;'><input type='hidden' name='theID' value='<?php echo $labelID ?>'/><input type="submit" name="edit" value="Edit" style="margin-left:20px; cursor:pointer; border:none; background-color:#55d; color:#CCC; padding:10px"/><input type="submit" name="" value="" style="margin-left:20px; cursor:pointer; border:none; background-color:#D55; color:#CCC; padding:10px"/></td>
            </form>
	        </tr>
	        <?php $r++; } ?>
	        </table>
			<?php 
		}
	else
		{
			echo '<center>you search well nw bros</center>';
			echo"<form method='POST' action='deletelabelprocessor.php'>
		<table align='center' bgcolor='#444'><tr>
		<td style='padding:5px; font-size:12px;'>label Name(50)<br />
		<div  style='float:left;'><input size='10' required='required' type='text' name='labelName' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>label Owner(50)<br/>
		<div  style='float:left;'><input size='10' required='required' type='text' name='labelOwner' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>label Artists(100)<br/>
		<div  style='float:left;'><input size='10' required='required' type='text' name='labelArtists' maxlength='50' value='' style='color:#444; background-color:#CCC; border:none; padding:5px'></div>
		</td><td style='padding:5px; font-size:12px;'>Extract<br/>
		<div  style='float:left;'><input name='extract' type='submit' value='Extract' style='color:#444; background-color:#CCC; border:none; padding:15px 15px'></div>
		</td>
		</tr></table>
		</form>";
		}

	}
?>
<?php include('bfooter.inc')?>