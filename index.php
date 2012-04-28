<?php require_once("config.php") ?>
<!doctype html>
<html>
	<head>
		<!-- grab the hashtag & conf name from config.php -->
		<title><?=$searchfor?> - Tweets from <?=$conf?></title> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="tweets/js/jquery.min.js"><\/script>')</script>	
		<script type="text/javascript" src="tweets/js/jquery.instagram.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			$("#tweetlist").load("tweets/tweets.php?hashkey=<?=$hashkey?>&divider=<?=$divider?>&searchfor=<?=$searchfor?>&cacheLoc=<?=$cacheLoc?>&filterUsers=<?=$filterUsers?>");
			var refreshId = setInterval(function() {
				$("#tweetlist").load("tweets/tweets.php?hashkey=<?=$hashkey?>&divider=<?=$divider?>&searchfor=<?=$searchfor?>&cacheLoc=<?=$cacheLoc?>&filterUsers=<?=$filterUsers?>");
				}, 300000);
			});
		</script>
	
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<meta name="viewport" content="width=device-width initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
		<script type="text/javascript">

			// GOOGLE ANALYTICS CODE -->

			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'XX-XXXXXXXX-X']); // DONT FORGET YOUR ANALYTICS CODE!
			  _gaq.push(['_trackPageview']);
			
			  (function() {
			    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
  
  			// START Instagram includes
  
			$(function(){
			  var
			    insta_container = $(".instagram")
			  , insta_next_url
			
			  insta_container.instagram({
			      hash: 'hashtag'
			    , clientId : 'YOUR CLIENT ID'
			    , show : 16
			    , onComplete : function (photos, data) {
			      insta_next_url = data.pagination.next_url
			    }
			  });
			
			  $('button').on('click', function(){
			    var 
			      button = $(this)
			    , text = button.text()
			
			    if (button.text() != 'Loading…'){
			      button.text('Loading…')
			      insta_container.instagram({
			          next_url : insta_next_url
			        , show : 16
			        , onComplete : function(photos, data) {
			          insta_next_url = data.pagination.next_url
			          button.text(text)
			        }
			      })
			    }       
			  }) 
			});
			
			$(document).ready(function() {
				$('.instagram-link').click(function() {
					$('button#moreinstagram').toggle('fast', 'swing', function() {
						
					}).css("display", "block");
					$('.instagram').toggle('fast', 'swing', function() {
					// Animation complete.
					});
				});
			});
			
			// change the title for iOS devices to just the hashtag so it works
			// nicely when it's saved to home screen	
		
			if( navigator.userAgent.match(/iPhone/i) || 
		    	navigator.userAgent.match(/iPod/i) || 
		    	navigator.userAgent.match(/iPad/i)
		    ) {
		        document.title = "#<?=$searchfor?>";
		    }
	
		</script>
		<script type="text/javascript" src="http://use.typekit.com/euc8ntw.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<style></style><!-- empty style tag to get around TypeKit bug -->
	</head>

	<body>
		<header>
			<div class="container">
				<h1>#<?=$searchfor?> - Tweets from <?=$conf?></h1>
			</div>
		</header>
		<p class="contentnav"><a href="#" class="instagram-link">Show Instagram photos</a></p>
		<div class="instagram"></div>
		<button id="moreinstagram">More</button>
		<!-- pulls in Instagram photos and puts them in here -->
		<ul id="tweetlist">
			<? require('tweets/tweets.php'); ?>
		</ul>
		<footer>
			<!-- You don't need to leave this in here but it'd be some nice credit if you did! Drop me a line if you do use the code - @mrqwest -->
			<p>Built for the awesome <?=$conf?> and the lucky attendees! Part of <a href="http://conftweets.com" title="conftweets.com">ConfTweets.com</a>.</p>
			
			<p>&copy; 2012 <a href="http://mrqwest.co.uk" title="MrQwest - A Croydon Web Designer">MrQwest</a> with code from <a href="http://twitter.com/simianstudios" title="@simianstudios">@simianstudios</a> &  <a href="http://twitter.com/mikestreety" title="@mikestreety">@mikestreety</a></p>
			
			<p class="croydoncreatives"><a href="http://croydoncreativ.es" title="A CroydonCreativ.es Project"><img src="http://www.croydoncreativ.es/img/croydoncreatives.png" alt="A CroydonCreativ.es Project" /></a></p>
		</footer>
	</body>
</html>