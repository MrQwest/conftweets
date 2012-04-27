	<!-- This is where each tweet displayed in the list gets its formatting from -->
	
	<li class="<?php echo $d->from_user; ?>">
	
		<a class=""><img class="twitteravatar" src="<?php echo $d->profile_image_url; ?>" alt="<?php echo $d->from_user; ?>" /></a>
	
		<div class="tweetmeta">
	
			<a class="twitteruser" rel="nofollow" href="http://twitter.com/<?php echo $d->from_user; ?>"><?php echo $d->from_user; ?></a> <a href="http://twitter.com/intent/follow?screen_name=<?php echo $d->from_user; ?>"><img class="twitterprofile" src="https://si0.twimg.com/images/dev/cms/intents/bird/bird_blue/bird_16_blue.png" alt="Twitter profile" /></a> 
			
			<span class="twittertime">
			
				<?php echo $created_at; ?><span class="timedivide"> | </span><span class="twitterintent"><a href="http://twitter.com/intent/tweet?in_reply_to_status_id=<?php echo sprintf('%0.0f',$d->id); ?>">Reply</a> | <a href="http://twitter.com/intent/retweet?tweet_id=<?php echo sprintf('%0.0f',$d->id_str); ?>">Retweet</a> | <a href="http://twitter.com/intent/favorite?tweet_id=<?php echo sprintf('%0.0f',$d->id); ?>">&#x2605;</a></span>
			</span>
		</div>
		
		<!-- show the tweet -->
		<span class="actualtweet"><?php echo link_it($tweet); ?></span>
		
	</li>
	
