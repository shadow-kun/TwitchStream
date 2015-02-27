<?php
/**
 * Twitch Stream Module Entry Point
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
 
	// no direct access
	defined('_JEXEC') or die;

	class PlgContentTwitchStream extends JPlugin
	{
		public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
			/*if($context == 'com_finder.indexer')
			{
				return true;
			}*/
			
			if(is_object($row))
			{
				return $this->_twitchstreamer($row->text, $params);
			}
			else
			{
				return $this->_twitchstreamer($row, $params);
			}
		}
		
		protected function _twitchstreamer(&$text, &$params)
		{
			$this->_findPlugin($text, 0);
			
			return true;
		}
		
		protected function _findPlugin(&$text, $start)
		{
			// Find the first occurance
			$locationStart = strpos($text, '{twitchstream', $start); 
			$locationEnd = strpos($text, '}', $locationStart); 
			if(!empty($locationStart))
			{
				$text2 = substr(stristr(stristr($text, '{twitchstream'), '}', true), 14);
				if(stristr($text,'"'))
				{
					$text2 = stristr(substr(stristr($text2, '"'),1), '"', true) ;
				}
				
				$replText = '<div style="position: relative; width: 100%; height: 0; padding-bottom: 51%;" >
				<iframe src="http://www.twitch.tv/' . $text2 . '/embed" frameborder="0" scrolling="no" style="position: absolute; width: 100%; height: 100%; left: 0; top: 0;" ></iframe>
				<a href="http://www.twitch.tv/' . $text2 . '?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; 
					width:345px; font-weight:normal; font-size:10px;text-decoration:underline;"></a>
				</div>';
				
				$this->_findPlugin($text, $locationEnd);
				
				$text = substr($text, 0, $locationStart) . $replText . substr($text, $locationEnd + 1);
				
			}
			
			return true;
		}
	}
?>