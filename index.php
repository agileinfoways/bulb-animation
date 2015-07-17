<?php ob_start("ob_gzhandler")?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.icon-large.css">
		<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			// var myAnim = setInterval(function(){
			//   $(".myImageHolder").attr('src', nextImage);
			// }, 4200);
			var timeout = null;

			$(window).load(function(){
				$('img.bgfade').hide();
				var dg_H = $(window).height();
				var dg_W = $(window).width();
				$('#wrap').css({'height':"700px",'width':"100%"});
				
			});

			$(window).resize(function(){window.location.href = window.location.href});
			
			function anim() {
			    // $("#wrap img.bgfade").first().appendTo('#wrap').fadeOut('fast');
			    // $("#wrap img").first().fadeIn('fast');
			    $("#wrap img.bgfade").first().appendTo('#wrap').css('display',"none");
			    $("#wrap img").first().css('display',"block");
			    timeout = setTimeout(anim, 40);
			}

			function interruptAnim() {
			    if (timeout != null) {
			        // Never mind, cancel the scheduled task.
			        clearTimeout(timeout);
			        timeout = null;
			    }
			}

			function initi() {
				anim();
			}
		</script>
		<style type="text/css">
			.leftt{
				float: left;
			}
			.topp{
				margin-top: 10px
			}

			#wrap{
				position:fixed;; 
				z-index:-1; 
				top:0; 
				left:0; 
				background-color:lightskyblue
			}
			#wrap img.bgfade{
				position:absolute;
				top:0;
				display:none;
				width:100%;
				height:100%;
				z-index:-1
			}
		</style>
	</head>
	<body>
		<div class="well">
			<input type="button" class="btn btn-success" name="button" value="Start Animation" onclick="initi()">&nbsp;&nbsp;
			<input type="button" class="btn btn-warning" name="button" value="Stop Animation" onclick="interruptAnim()">&nbsp;&nbsp;
			<!-- <a target="_blank" href="http://74.208.77.106/rp/examples/bulb/bulb.rar"><input type="button" class="btn btn-info" name="button" value="Download Source"></a>&nbsp;&nbsp;It may take time to load.. please don't go! :( -->
		</div>
		<div id="wrap">
			<?php for ($i=0; $i < 61; $i++) { ?>
				<img class="bgfade" src="img/1 A Getting_Ready_To Write_Glasses<?php echo $i;?>-min.png">
			<?php } ?>
		</div>
	</body>
</html>