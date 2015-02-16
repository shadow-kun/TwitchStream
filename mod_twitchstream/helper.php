<?php
/**
 * Helper class for Twtich Stream module
 * 
 * @package    Twitch Stream
 * @subpackage Modules
 * @link http://www.shadowreaper.net
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modTwitchStreamHelper
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