<?php
header('Content-Type: text/html; charset=utf-8');
	$ogrno=$_POST["ogrno"];
	$sifre=$_POST["sifre"];
	$link=mysql_connect("localhost","root","");
	$db=mysql_select_db("test",$link);
	mysql_query("set names 'latin5'");
	$sql="select * from kullanici";
	$emir=mysql_query($sql,$link);
	while($kullanici=mysql_fetch_array($emir))
	{
		if ($kullanici['id']==$ogrno && $kullanici['sifre']==$sifre)
		{
			setcookie("login",$kullanici['id']);
		}
		
	}
	header('Location: index.php');
	mysql_close();
?>