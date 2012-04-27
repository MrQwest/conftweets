<?php require_once("../config.php") ?>
<!doctype html>
<html>
<head>

	<title>Attendees for #BuildConf - conftweets.com/build</title>
	<script src="../twagg/js/jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
	<script>
		var lanyrdurl = "<?php echo $lanyrdurl; ?>";
	</script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26142372-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<header>
	<img src="../img/build.png" alt="Tweets from BUILDConf" />
	<h1>Tweets from #Buildconf</h1>
	</header>

<!-- ATTENDEES -->

          
          <ul class="center clearfix" id="lanyrd-attendees"></ul>
          	<script type="text/javascript" src="../twagg/js/lanyrd.js"></script>
	<footer>
		<p>Built for the awesome <a href="http://buildconf.com" title="buildconf">BuildConf</a> and the lucky attendees! Part of <a href="http://conftweets.com" title="conftweets.com">ConfTweets.com</a>.</p>
		<p>&copy; 2011 <a href="http://mrqwest.co.uk" title="MrQwest - A Croydon Web Designer">MrQwest</a> with code from <a href="http://twitter.com/simianstudios" title="@simianstudios">@simianstudios</a> &  <a href="http://twitter.com/mikestreety" title="@mikestreety">@mikestreety</a></p>
		<p class="croydoncreatives"><a href="http://croydoncreativ.es" title="A CroydonCreativ.es Project"><img src="http://www.croydoncreativ.es/img/croydoncreatives.png" alt="A CroydonCreativ.es Project" /></a></p>
	</footer>
</body>
</html>