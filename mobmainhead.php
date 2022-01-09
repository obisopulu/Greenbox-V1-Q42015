<html>
<head>

<title>Music</title>
<link href="img/favi.ico" type="image/x-icon" rel="shortcut icon"/>
<link href="mobnew.css" rel="stylesheet" type="text/css" />
<script>
function searchV() 
{
	var searche = document.getElementById('searchForm').style
	var menu = document.getElementById('menu').style
   if(searche.visibility == 'visible')
    {
		searche.visibility = 'hidden';
	 	searche.height = '0px';
		menu.visibility = 'hidden';
	 	menu.height = '0px';
	}
   else
    {
		searche.visibility = 'visible';
	 	searche.height = '50px';
		menu.visibility = 'hidden';
	 	menu.height = '0px';
	}
}
function menu() 
{
	var searche = document.getElementById('searchForm').style
	var menu = document.getElementById('menu').style
   if(menu.visibility == 'visible')
    {
		menu.visibility = 'hidden';
	 	menu.height = '0px';
		searche.visibility = 'hidden';
	 	searche.height = '0px';
	}
   else
    {
		menu.visibility = 'visible';
	 	menu.height = '220px';
		searche.visibility = 'hidden';
	 	searche.height = '0px';
	}
}
</script>
</head>
<body>
<table align='center' id='cubes450' width='100%' style="padding:20px;">
<tr height='30px'>
			<td width='30px' height='30px' align='left'>
			<button onclick='menu()' style='background-image:url(img/form.png);  background-position:center; background-repeat:no-repeat; border:none; height:100px; width:100px; cursor:pointer; background-color:#ddd; background-size:cover'></button>
	</td>
        <td align="center">
        <form action='mobindex.php' method='post'>
<input type='submit' value='' style='background-image:url(img/favi.ico); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:200px; width:200px; cursor:pointer; background-size:cover'/>	
</form>	
	</td>
	<td width='30px' height='30px' align='right'>
			<button onclick='searchV()' style='background-image:url(img/srch.png);  background-position:center; background-repeat:no-repeat; border:none; height:100px; width:100px; cursor:pointer; background-color:#ddd; background-size:cover'></button>
	</td> 
    </tr>  
	<tr>
	<td colspan="3" align="center" width="100%">
 	<div id='searchForm' style="visibility:hidden; height:0px;">
    <table><tr><td bgcolor='#CCC'>
    	<form action='mobsearch.php' method='post'>
		<input class='new' type='text' name='keyword' required  maxlength='50'>
        <input type="submit" value="" style='background-image:url(img/srch.png); background-position:center; background-repeat:no-repeat; border:none; height:30px; width:30px; cursor:pointer; vertical-align:middle; background-color:#CCCCCC' /></form>
	</td>
</tr>
</table>
</div>
<div id='menu' style="visibility:hidden; height:0px;">
    <table><tr>
<td align='center' width='100%'>
		<a href='mobmusic.php' class='link'>Music</a>
</td>
</tr>
<tr>
<td align='center' width='100%'>
		<a href='mobpeople.php' class='link'>People</a>
</td>
</tr>
<tr>
<td align='center' width='100%'>
		<a href='moblabels.php' class='link'>Labels</a>
</td>
</tr>
<tr>
<td align='center' width='100%'>
		<a href='mobactivities.php' class='link'>Activities</a>
</td>
</tr>
</table>
</div>
	</td>    
	<tr>
	<td colspan="9" align="right" width="100%">
<?php if($loginStatus=='new'){echo 'Welcome first-time GreenBox user&nbsp;';}else{echo 'Welcome back '.$anonymous.'&nbsp;';}?>
	</td>
</tr>
</table>