<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of QrazyTimes2, a theme for Dotclear 2.
# Pierre Van Glabeke
#
# License:
# http://creativecommons.org/licenses/by-nc-sa/2.0/fr/
#
# -- END LICENSE BLOCK ------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"QrazyTimes2",
	/* Description*/		"Thème magazine, fork de Qrazy Times",
	/* Author */			"Pierre Van Glabeke",
	/* Version */			'1.0',
	array(
		'type'	 =>	'theme',
		'tplset' => 'mustek'
	)
);