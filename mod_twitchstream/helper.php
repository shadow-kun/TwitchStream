<?php
/**
 * Helper class for Twtich Stream module
 * 
 * @package    Twitch Stream
 * @subpackage Modules
 * @link http://zor.systems
 * @license        GNU/GPL v2
 */
class modTwitchStreamHelper
{
    /**
     * Retrieves the stream 
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