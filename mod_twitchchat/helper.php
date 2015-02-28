<?php
/**
 * Helper class for Twitch Stream module
 * 
 * @package    Twitch Stream
 * @subpackage Modules
 * @link http://www.shadowreaper.net
 * @license        GNU/GPL v2
 */
class modTwitchChatHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
	
	public static function getStreamer($params)
    {
        return $params->get('streamer');
    }
}
?>