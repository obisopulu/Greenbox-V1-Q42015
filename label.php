<?php include('top.php')?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Label</title>
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
include('mainhead.inc');
$query = "SELECT * FROM labels WHERE labelName=\"{$_POST['label']}\"";

$result = mysql_query($query, $cxn)
	or die("result no work");
extract(mysql_fetch_assoc($result));
?>
<center>
</center>

<table width="700px" align="center" border="0">
    <tr>
    	<td>
            <div class="artistname"><?php echo $labelName ?><br/></div>
            <div class="artistgenre"><?php echo $labelOwner ?></div>
            
        </td>
        <td align="right" height="400px">
	<img src='labelsimg/<?php echo $labelPic ?>' width='170px' height='170px'/>
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
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Introduction:</b>&nbsp;&nbsp; $labelIntro." ?>
        </div>

    <br/>		
	
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo"<b> History:</b>&nbsp;&nbsp; $labelHistory." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Artists:</b>&nbsp;&nbsp; $labelArtists." ?>
        </div>

    <br/>
    
    	<div style="padding:10px; background-color:#DDD; padding:20px;">
        	<?php echo "<b> Producers:</b>&nbsp;&nbsp; $labelProducers." ?>

    </td>
    </tr>

</table>
<?php include('mainfooter.inc')?>

</body>
</html>