<?php
	header('Content-Type: text/html; charset=utf-8');
		$link=mysql_connect("localhost","root","");
		$db=mysql_select_db("test");
		mysql_query("set names 'latin5'");
        $ad=$_POST['adbox'];
      
        $soyad=$_POST['soyadbox'];
        $sifre=$_POST['sifrebox'];
        $email=$_POST['emailbox'];
        $gun=$_POST['gun'];
        $ay=$_POST['ay'];
        $yil=$_POST['yil'];
        $ogrno=$_POST['ogrnobox'];
        $fakno=$_POST['fakultem'];
        $bolno=$_POST['bolumum'];
        $sinif=$_POST['sinifim'];
        $ogretim=$_POST['ogretimim'];
        $dil=$_POST['dilim'];
        $rutbe=1;
        $puan=1;
        $mesajsayisi=0;
        $dogum=$gun."/".$ay."/".$yil;
        $sql=mysql_query("insert into kullanici (id,mail,sifre,isim,soyisim,dogum,rutbe,puan,mesajsayisi,fakno,bolno,sinif,ogretim,dil) values ('$ogrno','$email','$sifre','$ad','$soyad','$dogum','$rutbe','$puan','$mesajsayisi','$fakno','$bolno','$sinif','$ogretim','$dil')");
		mysql_close();
				header('Location: index.php');
	?>