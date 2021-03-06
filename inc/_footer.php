<!-- FOOTER CONTENT -->
	<footer class="mainFooter">
		<ul>
			<li><a href="index.php">Home</a></li>
			<?php
				$i = 0;
				for (;$i < sizeof($navItems); $i++) {
					if ($navItems[$i]["active"] == 'true'){
						echo 	'<li><a href="'.$navItems[$i]["link"].'">'.$navItems[$i]["lable"].'</a></li>';
					}
				}
			?>
		</ul>
		<span class="copyright">
			&copy Copyright <?php echo date ("Y"); ?> - All Rights Reserved
		</span>
		<div class="poweredBy">
			<span>Powered By:</span>
			<?php
				function get_http_response_code($url) {
			    $headers = get_headers($url);
			    return substr($headers[0], 9, 3);
				}
				$footerLogoLocation = 'http://www.'.$shopDomain.'/style/footerlogo/'.$shopDomain.'.png';
				if(get_http_response_code($footerLogoLocation) != "404"){
					echo '<a href="http://www.'.$shopDomain.'" target="_blank"><img src="'.$footerLogoLocation.'" ></a>';
				}else{
				    echo '<a href="http://www.shopcity.com" target="_blank"><img src="images/scLogo.png" ></a>';
				}
				if ($facebookLink){
					echo '<iframe src="http://www.facebook.com/plugins/like.php?href='.$facebookLink.'&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;font&amp;colorscheme=light&amp;api_key=113050292188" scrolling="no" frameborder="0"  style="border:none; overflow:hidden; width:84px;height:21px;"></iframe>';
				}else{
					$curUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					echo '<iframe src="http://www.facebook.com/plugins/like.php?href='.$curUrl.'&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;font&amp;colorscheme=light&amp;api_key=113050292188" scrolling="no" frameborder="0"  style="border:none; overflow:hidden; width:84px;height:21px;"></iframe>';
				}
			?>
		</div>
	</footer>
<!-- END OF FOOTER CONTENT -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.<?php echo $shopDomain; ?>/webtools/script/all.js.cfm"></script>
<script type="text/javascript" src="js/build/script.build.js"></script>
<?php
	if ($enableSlider == "true") {
		echo '<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>'.chr(13).chr(10).
				 '<script>$("#slider").nivoSlider();</script>'.chr(13).chr(10);
	}
?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $analytics; ?>']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
