<?php include("../top.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin *Music</title>
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
                                        Edit Music
                                    </td>
	
</tr>
</table>
<?php
if ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM songs WHERE songID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='bmedit.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#444'><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
	<td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongTitle(50)<br/>
		<input required='required' size='10' type='text' name='songTitle' maxlength='50' value='$songTitle' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongArtist(50)<br/>
		<input required='required' size='10' type='text' name='songArtist' maxlength='50' value='songArtist' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongArtistFt(100)<br/>
		<input size='10' type='text' name='songArtistFt' maxlength='50' value='$songArtistFt' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongAlbum(50)<br/>
		<input required='required' size='10' type='text' name='songAlbum' maxlength='50' value='$songAlbum' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongProducer(50)<br/>
		<input required='required' size='10' type='text' name='songProducer' maxlength='50' value='$songProducer' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongBeatmaker(50)<br/>
		<input size='10' type='text' name='songBeatmaker' maxlength='50' value='$songBeatmaker' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongLenght(4)<br/>
		<input required='required' size='4' type='text' name='songLenght' maxlength='6' value='$songLenght' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongBitrate(4)<br/>
		<input size='3' type='text' name='songBitrate' maxlength='3' value='$songBitrate' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongGenre(100)<br/>
		<input required='required' size='10' type='text' name='songGenre' maxlength='25' value='$songGenre' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongYear(4)<br/>
		<input size='4' type='text' name='songYear' maxlength='4' value='$songYear' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongLanguage(100)<br/>
		<input required='required' size='10' type='text' name='songLanguage' maxlength='50' value='$songLanguage' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold' align='center'>SongRating(2)<br/>
		<input required='required' size='2' type='text' name='songRating' maxlength='2' value='$songRating' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td></tr><tr>
	<td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#444' colspan='3' align='center'>----------<br/>
		<input name='update' type='submit' value='Update' style='color:#444; background-color:#CCC; border:none; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
if ($_POST['update']=='Update')
	{
		$query = "UPDATE songs 
		
		SET  
		
		songTitle='{$_POST['songTitle']}' , 
		songArtist='{$_POST['songArtist']}' , 
		songArtistFt='{$_POST['songArtistFt']}' , 
		songAlbum='{$_POST['songAlbum']}' , 
		songProducer='{$_POST['songProducer']}' ,  
		songBeatmaker='{$_POST['songBeatmaker']}' , 
		songLenght='{$_POST['songLenght']}' , 
		songGenre='{$_POST['songGenre']}' , 
		songYear='{$_POST['songYear']}' ,  
		songLanguage='{$_POST['songLanguage']}' , 
		songRating='{$_POST['songRating']}'
		
		WHERE songID = '{$_POST['theID']}' ";
		 

		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
	include('bfooter.inc')
?>
</body>
</html>