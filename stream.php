<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/slider.css" type="text/css"  media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Résultats</title>
	<script type="text/javascript">
		function toggle_visibility(id) {
			var pyou = document.getElementById('s_pyou');
			var chyp = document.getElementById('s_chyp');
			var tpyou = document.getElementById('t_pyou');
			var tchyp = document.getElementById('t_chyp');
			if (id == 's_pyou') {
				chyp.style.display = 'none';
				pyou.style.display = 'block';
				tchyp.style.color = 'white';
				tpyou.style.color = 'lightgrey';
			} else {
				pyou.style.display = 'none';
				chyp.style.display = 'block';
				tpyou.style.color = 'white';
				tchyp.style.color = 'lightgrey';				
			}
		}
</script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
		<section id="top_stream">
			<div class="title">
				<a href="#" onclick="toggle_visibility('s_pyou');" id="t_pyou">Pyoup</a>
			</div>
			<div class="title" style="border-left:1px solid white;">
				<a href="#" onclick="toggle_visibility('s_chyp');" style="color: lightgrey;" id="t_chyp">ChypRiotE</a>
			</div>
		</section>
		<section class="stream" id="s_chyp">
			<object type="application/x-shockwave-flash"
				width="90%"
				height="85%"
				id="live_embed_player_flash"
				data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=chypriote"
				bgcolor="#000000">
				<param name="allowFullScreen" value="true" />
				<param name="allowScriptAccess" value="always" />
				<param name="allowNetworking" value="all" />
				<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
				<param name="flashvars" value="hostname=www.twitch.tv&channel=chypriote&auto_play=true&start_volume=25" />
			</object>
		</section>
		<section class="stream" id="s_pyou" style="display:none;">
			<object type="application/x-shockwave-flash"
				width="90%"
				height="85%"
				id="live_embed_player_flash"
				data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=pyoup"
				bgcolor="#000000">
				<param name="allowFullScreen" value="true" />
				<param name="allowScriptAccess" value="always" />
				<param name="allowNetworking" value="all" />
				<param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
				<param name="flashvars" value="hostname=www.twitch.tv&channel=pyoup&auto_play=true&start_volume=25" />
			</object>
		</section>
		<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>