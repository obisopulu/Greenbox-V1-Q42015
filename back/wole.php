<?php
if (($_POST['usersname']== 'sopusoft' and $_POST['password']== 'latitude14') 
or ($_POST['usersname']== 'boychingy' and $_POST['password']== 'bold5') 
or ($_POST['usersname']== 'madu' and $_POST['password']== 'perfect101') 
or ($_POST['usersname']== 'al kosi' and $_POST['password']== 'heartland'))
	{
		header("Location: backyard.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.ico"  rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body bgcolor="#555">
<?php
if ($_POST['usersname']!= '' and $_POST['password']== '')
	{
	echo "<center>How you wan take login w/o ur password </center>
		<table align='center' bgcolor='#444' width='200px'>
	<tr height='200px'>
    	<td align='center'>
        		<h1 >GreenBox</h1><br/>
				<img src='../img/favi.ico' id='imagerad' width='100px' height='100px' draggable='false' dropzone='link' data-icon='gear'/>
        </td>
    </tr>
	<tr><form action='wole.php' method='post'>
		<td align='center' width='100px'>
			<input type='text' name='usersname' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
    	<td align='center' width='100px'>
            <input type='password' name='password' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
		<td align='center'>
            <input type='submit' value='login' width='100%' style='width:100%; cursor:pointer; border:none; background-color:#DDD; color:#888; height:30px; padding:10px'/>
		</td></form>
	</tr>
</table>
		";
	}
elseif ($_POST['usersname']== '' and $_POST['password']!= '')
	{
			echo "<center>Go carry your Username come 1st before any other thing</center>
			<table align='center' bgcolor='#444' width='200px'>
	<tr height='500px'>
    	<td align='center'>
        		<h1 >GreenBox</h1><br/>
				<img src='../img/favi.ico' id='imagerad' width='100px' height='100px' draggable='false' dropzone='link' data-icon='gear'/>
        </td>
    </tr>
	<tr><form action='wole.php' method='post'>
		<td align='center' width='100px'>
			<input type='text' name='usersname' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
    	<td align='center' width='100px'>
            <input type='password' name='password' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
		<td align='center'>
            <input type='submit' value='login' width='100%' style='width:100%; cursor:pointer; border:none; background-color:#DDD; color:#888; height:30px; padding:10px'/>
		</td></form>
	</tr>
</table>
			";
	}
elseif ($_POST['usersname']== '' and $_POST['password']== '')
{
	echo "<table align='center' bgcolor='#444' width='200px'>
	<tr height='500px'>
    	<td align='center'>
        		<h1 >GreenBox</h1><br/>
				<img src='../img/favi.ico' id='imagerad' width='100px' height='100px' draggable='false' dropzone='link' data-icon='gear'/>
        </td>
    </tr>
	<tr><form action='wole.php' method='post'>
		<td align='center' width='100px'>
			<input type='text' name='usersname' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
    	<td align='center' width='100px'>
            <input type='password' name='password' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
		<td align='center'>
            <input type='submit' value='login' width='100%' style='width:100%; cursor:pointer; border:none; background-color:#DDD; color:#888; height:30px; padding:10px'/>
		</td></form>
	</tr>
</table>";
}
else 
{
	echo "<center>Ooooops... You hv inputed wrong shits MoFo</center>
	<table align='center' bgcolor='#444' width='200px'>
	<tr height='500px'>
    	<td align='center'>
        		<h1 >GreenBox</h1><br/>
        		<img align='middle' src='../img/favi.png'  height='100' width='100'/>
        </td>
    </tr>
	<tr><form action='wole.php' method='post'>
		<td align='center' width='100px'>
			<input type='text' name='usersname' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
    	<td align='center' width='100px'>
            <input type='password' name='password' maxlength='10' width='100%' style='width:90%; border:none; background-color:#EEE; color:#888; height:15px; padding:10px'/>
		</td>
	</tr>
	<tr>
		<td align='center'>
            <input type='submit' value='login' width='100%' style='width:100%; cursor:pointer; border:none; background-color:#DDD; color:#888; height:30px; padding:10px'/>
		</td></form>
	</tr>
</table>";
}

?>

</body>
</html>