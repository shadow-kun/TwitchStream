<?php defined('_JEXEC') or die; 
// No direct access ?>

<div style="position: relative; width: 100%; height: 0; padding-bottom: 51%;" >
	<iframe src="http://www.twitch.tv/<?php echo $streamer; ?>/embed" frameborder="0" scrolling="no" style="position: absolute; width: 100%; height: 100%; left: 0; top: 0;" ></iframe>
	<a href="http://www.twitch.tv/<?php echo $streamer; ?>?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; 
		width:345px; font-weight:normal; font-size:10px;text-decoration:underline;"></a>
</div>