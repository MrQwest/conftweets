<?php
	// Tweet Aggregator - coined by Anthony (@mrqwest), assisted by Kris (@simianstudios) adapted 
	// by Mike (@mikestreety)
	// The work of the Croydon Creatives (@crcreatives) */
	
	// This should all be pretty self explanatory
	
	
	// what to use as a hash tag (for the search). Try to use alphanumeric characters as otherwise it breaks!
	$hashkey='';
	// how to divide multiple users and search terms
	$divider='8';
	// What to search for - can be multiple terms, use $hashkey instead of hashtag and divide each term using the $divider
	$searchfor = 'hashtag';
	// users to exclude - using the above divider
	$filterUsers = ''; 
	// This is needed for the javascript. Put in a name for the file - it will be automatically created.
	$cacheLoc = 'cache';
	// This is the conference name
	$conf = 'CONF';
	
	
?>