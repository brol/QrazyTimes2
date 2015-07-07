<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of QrazyTimes2, a theme for Dotclear 2.
# Pierre Van Glabeke
#
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/public');

# appel css about
if ($core->blog->settings->themes->qrazytimes2_about)
{
	$core->addBehavior('publicHeadContent',
		array('tplQrazytimes2_about','publicHeadContent'));
}

class tplQrazytimes2_about
{
	public static function publicHeadContent($core)
	{
	$url = $core->blog->settings->system->themes_url.'/'.$core->blog->settings->system->theme;
		echo '<link rel="stylesheet" type="text/css" media="screen" href="'.$url."/about.css\" />\n";
	}
}