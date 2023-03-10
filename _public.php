<?php
/**
 * @brief QrazyTimes2, a theme for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Theme
 *
 * @author Pierre Van Glabeke
 * @copyright https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__) . '/locales/' . dcCore::app()->lang. '/public');

# appel css about
if (dcCore::app()->blog->settings->themes->qrazytimes2_about)
{
	dcCore::app()->addBehavior('publicHeadContent',
		array('tplQrazytimes2_about','publicHeadContent'));
}

class tplQrazytimes2_about
{
	public static function publicHeadContent()
	{
	$url = dcCore::app()->blog->settings->system->themes_url.'/'.dcCore::app()->blog->settings->system->theme;
		echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/about.css\" />\n";
	}
}