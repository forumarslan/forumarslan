<html>
<head>
	<!--meta start-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<!--meta end-->
	
	<!--title start-->
	<title>Kbü Form</title>	
	<!--title end-->
	
	<!--css file start-->
	<link href="css/allpagesstyle.css" rel="stylesheet" type="text/css">
	<link href="css/content.css" rel="stylesheet" type="text/css">	
	<link href="css/headerstyle.css" rel="stylesheet" type="text/css">
	<link href="css/menustyle.css" type="text/css" rel="stylesheet">
	<link href="css/bottomstyle.css" type="text/css" rel="stylesheet">
	<link href="css/newnote.css" type="text/css" rel="stylesheet">
	<!--css file end-->

</head>

<body>
	<!--header start-->
	<div id = "top"> 
			
			<!--logo div start-->
			<div id = "toplogo"> 
				<img src = "img/logo.png"/ width="100px" height="100px">
			</div>
			<!--logo div stop-->
			
			<!--top text div start-->
			<div id="toptext">
				<p>Karabük Üniversitesi Paylaşım Platformu</p>
			</div>
			<!--top text div stop-->
			<div id="clear"></div>
	</div>
	<!--header end-->

	
	<!--menu start-->
	<div id="topmenu">
		<div id="navigation">
			<ul>
				<li><a href="#">Profil</a></li>
				<li>&nbsp;</li>
				<li>&nbsp;</li>
				<li>&nbsp;</li>
				<li><a href="#">Mesaj</a></li>
				<li><a href="#">Bildirim</a></li>
				<li><a href="#">Yeni Not</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clear"></div>
	<!--menu end-->

	
	<!--bottom start-->
	<div id="bottom">
			<div class="newheader">
				<p>Yeni Konu</p>
			</div>
			<div class="icerik">
				<div class="icerikbaslik">
					<p>Başlık</p>
					<input type="text" name="formbaslik" id="formbaslik" />
				</div>
				<div class="icerikkonu">
					<p>Konu İçeriği</p>
					<textarea name="formicerik" id="formicerik"></textarea>
				</div>
				<div class="icerikbutton">
					<input type="submit" value="Oluştur" id="formbutton" />
				</div>
			</div>
	</div>
	<!--bottom end-->

	
	<!--footer start-->
	<div class="footer" id="footer">
		<span id="footer">footer</span>
	</div>
	<!--footer start-->

	
	<!--accordion menu script start-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="js/jquery.accordion.2.0.js" charset="utf-8"></script>
	<script type="text/javascript">
		
		/*filtre script start*/
		$('#accordionMenu').accordion({
			canToggle: true,
			canOpenMultiple: true
		});
		/*filtre script end*/
		
		/*other script start*/
		$('#accordionMenu2').accordion({
			canToggle: true,
			canOpenMultiple: true
		});
		/*other script end*/
		
		/*links script start*/
		$('#accordionMenu3').accordion({
			canToggle: true,
			canOpenMultiple: true
		});
		/*links script end*/

		$(".loading").removeClass("loading");
	</script>
	<!--accordion menu script start-->
	
</body>
</html>
