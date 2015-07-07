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
if (!defined('DC_CONTEXT_ADMIN')) { return; }

global $core;

//PARAMS

# Translations
l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/main');

# Default values
$default_about = false;

# Settings
$my_about = $core->blog->settings->themes->qrazytimes2_about;

# About
$html_fileabout = path::real($core->blog->themes_path).'/'.$core->blog->settings->system->theme.'/tpl/_about.html';

if (!is_file($html_fileabout) && !is_writable(dirname($html_fileabout))) {
	throw new Exception(
		sprintf(__('File %s does not exist and directory %s is not writable.'),
		$css_fileabout,dirname($html_fileabout))
	);
}

// POST ACTIONS

if (!empty($_POST))
{
	try
	{
		$core->blog->settings->addNamespace('themes');

  	# About
		if (!empty($_POST['qrazytimes2_about']))
		{
			$my_about = $_POST['qrazytimes2_about'];


		} elseif (empty($_POST['qrazytimes2_about']))
		{
			$my_about = $default_about;

		}
		$core->blog->settings->themes->put('qrazytimes2_about',$my_about,'boolean', 'Display About',true);

		if (isset($_POST['about']))
		{
			@$fp = fopen($html_fileabout,'wb');
			fwrite($fp,$_POST['about']);
			fclose($fp);
		}

		// Blog refresh
		$core->blog->triggerBlog();

		// Template cache reset
		$core->emptyTemplatesCache();

		dcPage::success(__('Theme configuration has been successfully updated.'),true,true);
	}
	catch (Exception $e)
	{
		$core->error->add($e->getMessage());
	}
}

$html_contentabout = is_file($html_fileabout) ? file_get_contents($html_fileabout) : '';

// DISPLAY

# About
echo
'<div class="fieldset"><h4>'.__('About').'</h4>'.
'<p>'.
	form::checkbox('qrazytimes2_about',1,$my_about).
	'<label class="classic" for="qrazytimes2_about">'.
		__('Display About').
	'</label>'.
'</p>';

echo
'<p class="area"><label for="about">'.__('Code:').' '.
form::textarea('about',60,10,html::escapeHTML($html_contentabout)).'</label></p>'.
'</div>';