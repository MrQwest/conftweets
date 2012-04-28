# Conftweets

A tweet aggregator that searches the public twitter firehose for specified hashtags and then displays them in a list.

It's built on PHP using a php wrapper class from David Billingham, Aaron Brazell and Keith Casey.

## How To Use

Download the files, open config.php and edit the details inside. It's all commented out so should be pretty easy to configure.  You'll also need to manually edit the 'tag' at around line 41 in index.php to allow the instagram search to work.

Right now, you'll need to set the permissions on /tweets/cache.txt to 777 to allow the caching to work.

## The Future

Once @lanyrd open up their API, a lot more would be possible.

I had a fair few plans for this including re-writing it in Node, incorporating instagram into the timeline along with foursquare checkins and other social related tomfoolery.

Alas, my back end knowledge is no where near strong enough for this sort of thing and time is lacking so instead of letting this fester on my hard drive with dreams of turning it into a service, I thought I'd throw it up on github.

## Notes

Just as an FYI, the reply / retweet / favourite twitter intents on the tweet list aren't always accurate. One in 20 or so tweets will be associated with the wrong tweet. This is because the tweet ID is out by 1. I've no idea where this is happening, nor can I track it down.  Internet, do your awesome thing!