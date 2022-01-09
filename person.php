<?php include('top.php')?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Person</title>
<link href="new.css" rel="stylesheet" type="text/css" />
<link href="img/favi.ico" type="image/x-icon" rel="shortcut icon"/>
<style type="text/css">
.artistname{ font-size:40px; color:#1F7044; padding-top:45px;}
.artistgenre{ padding-bottom:45px;}
a:active{text-decoration:none; color:#1F7044;}
.greenbox{ color:#1F7044; font-size:14px;}
td.one{padding-top:25px; padding-bottom:25px;}
.bottompad{padding:16px;background-color:#CCCCCC; width:145px;}
</style>

<?php
$Y=date('Y');
include('mainhead.inc');
$query = "SELECT * FROM persons WHERE personStageName=\"{$_POST['person']}\"";
$result = mysql_query($query, $cxn)
	or die("result no work");
$row=(mysql_fetch_assoc($result));
extract($row);
?>
<center>

</center>

<table width="700px" align="center" border="0">
    <tr>
    	<td>
            <div class="artistname"><?php echo $personStageName ?><br/></div>
            <div class="artistgenre"><?php echo $personProfession ?></div>
            
        </td>
        <td align="right">
        
    <img align="middle" src="<?php echo "personsimg/$personPic2"?>" width="170" height="170" />
        </td>
    </tr>

  
</table>
<table>
    <tr>
    	<td>

        </td>
    </tr>
</table>
<table align="center" width='700'>
	<tr>
    <td>
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo "<b>Birth name:</b> $personBirthName" ?>
        </div>

    <br/>		
	
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo"<b>Birthday:</b> $personBirthDay" ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php $Age = $Y-$personBirthYear; echo "<b>Age:</b> $Age years" ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo "<b>State of origin:</b> $personPlaceOfOrigin" ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo "<b>Genre:</b> $personGenre" ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php $careerLenght = $Y-$personCareerStartYear; echo "<b>Career lenght:</b> $careerLenght years" ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo "<b>Label:</b> $personLabel"	 ?>
        </div>

    <br/>
    
    	<div style="padding:10px; text-transform:capitalize; background-color:#DDD; padding:20px;">
        	<?php echo "<b>Associated Acts:</b> $personAssociatedActs" ?>
        </div>
	<br/>
    <div style="padding:10px; background-color:#DDD; text-transform:none; padding:20px;"><?php echo"<b>Story:</b> $personLifeStory" ?></div>
    </td>
    </tr>
    <tr>
    <td align="right"><br />
            	    	<form action='search.php' method='post'>
		<input type="hidden" name='keyword'  value='<?php echo $personStageName ?>' maxlength='50'>
        <input type="submit" value="More about <?php echo $personStageName ?>" style='color:#FFF; padding:10px; background-position:center; background-repeat:no-repeat; border:none; cursor:pointer; vertical-align:middle; background-color:#CCCCCC; width:694px' /></form>
    </td>
    </tr>

</table><br/>
<?php include('mainfooter.inc')?>

</body>
</html>