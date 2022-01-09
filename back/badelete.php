<?php include("../top.php");  ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenBox || Admin -Activity</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<link href="../img/favi.ico"  rel="shortcut icon" type="image/x-icon"/>
</head>
<a name="top"></a>
<body>
<?php
if ($_POST['delete'] == 'Delete')
	{
		$query="DELETE FROM activities WHERE activityID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "activity data deleted";
	}
else
	{
		echo "Location: Error something went wrong, i just hope u dont get to see this";
	}
?>
</body>
</html>