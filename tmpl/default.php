<?php /**
 * @title		Shape 5 Snipcart
 * @version		1.1
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
$document = JFactory::getDocument();
$document->addCustomTag('<link rel="stylesheet" href="'.$url.'css/style.css" type="text/css" />');
$document->addCustomTag('<link rel="stylesheet" href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" type="text/css" />');
JHtml::_('jquery.framework');
?>

<?php if ($s5_sc_pretext != "") { ?>		
	<div id="s5_sc_pretext">			
		<?php echo $s5_sc_pretext ?>		
	</div>	
<?php } ?>

<script type="text/javascript" id="snipcart" src="https://cdn.snipcart.com/scripts/2.0/snipcart.js"  <?php if ($s5_sc_cartpopup == "no") { ?>data-autopop="false"<?php } ?> data-api-key="<?php echo $s5_apikey ?>"></script>

<div class="snipcart-summary">
	<?php if ($s5_sc_showprice == "yes") { ?><span class="snipcart-total-price"></span><?php } ?>
	<div id="s5-snipcart-carticon" class="<?php echo $s5_carticon ?> snipcart-checkout"><span class="snipcart-total-items"></span></div>
</div>


