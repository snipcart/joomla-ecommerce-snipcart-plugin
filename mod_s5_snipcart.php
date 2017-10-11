<?php /**
 * @title		Shape 5 Snipcart
 * @version		1.0
 * @package		Joomla
 * @website		http://www.shape5.com
 * @copyright	Copyright (C) 2015 Shape 5 LLC. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$url = JURI::root().'modules/mod_s5_snipcart/';

$s5_sc_cartpopup = $params->get('s5_sc_cartpopup', '');
$s5_apikey = $params->get('s5_apikey', '');
$s5_sc_pretext = $params->get('pretext', '');
$s5_carticon = $params->get('s5_carticon', '');
$s5_sc_showprice = $params->get('s5_sc_showprice', '');

require (JModuleHelper::getLayoutPath('mod_s5_snipcart'));