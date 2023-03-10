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
if (!defined('DC_RC_PATH')) {
    return;
}
$this->registerModule(
    'QrazyTimes2',
    'Thème magazine, fork de Qrazy Times',
    'Pierre Van Glabeke',
    '0.4',
    [
        'requires' => [['core', '2.26']],
        'type'     => 'theme',
        'tplset'   => 'mustek',
    ]
);
