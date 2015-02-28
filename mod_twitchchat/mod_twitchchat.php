<?php
/**
 * Twitch Stream Module Entry Point
 * 
 * @package    Twitch Stream
 * @subpackage Modules
 * @link http://ZoR Systems
 * @license        GNU/GPL v2
 */
 
	// no direct access
	defined('_JEXEC') or die;

	// Include the syndicate functions only once
	require_once( dirname(__FILE__) . '/helper.php' );
 
	$streamer = modTwitchChatHelper::getStreamer($params);
	
	require( JModuleHelper::getLayoutPath('mod_twitchchat'));
?>