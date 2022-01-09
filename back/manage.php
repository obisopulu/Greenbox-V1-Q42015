<?php 
if ($_POST['add']=='Music'){header("Location: addmusicprocessor.php");}
if ($_POST['add']=='Person'){header("Location: addpersonprocessor.php");}
if ($_POST['add']=='Label'){header("Location: addlabelprocessor.php");}
if ($_POST['add']=='Activity'){header("Location: addactivityprocessor.php");}

if ($_POST['alter']=='Music'){header("Location: altermusicprocessor.php");}
if ($_POST['alter']=='Person'){header("Location: alterpersonprocessor.php");}
if ($_POST['alter']=='Label'){header("Location: alterlabelprocessor.php");}
if ($_POST['alter']=='Activity'){header("Location: alteractivityprocessor.php");}
?>
