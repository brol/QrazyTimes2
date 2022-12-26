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

if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'QrazyTimes2',
    'Thème magazine, fork de Qrazy Times',
    'Pierre Van Glabeke',
    '0.4',
    [
        'requires' => [['core', '2.24']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
