<?php include ("incfunctions.php3");
if(!empty($_GET)) extract($_GET);
if(!empty($_POST)) extract($_POST);
header("Location: displaylegacy.php?ID=$ID");
?>
