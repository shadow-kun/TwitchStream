<?php
/**
 * Twitch Stream Module Entry Point
 * 
 * @package    Twitch Stream
 * @subpackage Modules
 * @link http://zor.systems
 * @license        GNU/GPL, see LICENSE.php
 */
 
	// no direct access
	defined('_JEXEC') or die;

	// Include the syndicate functions only once
	require_once( dirname(__FILE__) . '/helper.php' );
 
	$streamer = modTwitchStreamHelper::getStreamer($params);
	
	require( JModuleHelper::getLayoutPath('mod_twitchstream'));
?>