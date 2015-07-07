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