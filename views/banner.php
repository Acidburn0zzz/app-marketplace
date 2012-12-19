<?php

/**
 * Marketplace banner view.
 *
 * @category   Apps
 * @package    Marketplace
 * @subpackage Views
 * @author     ClearCenter <developer@clearcenter.com>
 * @copyright  2011 ClearCenter
 * @license    http://www.clearcenter.com/Company/terms.html ClearSDN license
 * @link       http://www.clearcenter.com/support/documentation/clearos/marketplace/
 */

///////////////////////////////////////////////////////////////////////////////
// Load dependencies
///////////////////////////////////////////////////////////////////////////////

$this->lang->load('base');
$this->lang->load('marketplace');

///////////////////////////////////////////////////////////////////////////////
// Marketplace Banner
///////////////////////////////////////////////////////////////////////////////

echo "
<div>
    <div style='clear: both; float: right; padding: 0px 12px 0px 0px;'>" .
    anchor_custom('/app/marketplace/settings', lang('base_settings'), 'high') . 
// TODO - Enable to add 'select all' feature
//    anchor_custom('/app/marketplace/all', lang('marketplace_select_all'), 'high', array('id' => 'toggle_select')) . 
    anchor_custom('/app/marketplace/install', lang('marketplace_install_selected_apps'), 'high') . "
    </div>
  <div id='pagination-top' style='font-size: .7em; padding: 5px 12px 0px 0px;'></div>
  <div class='ui-widget marketplace-footer'></div>
</div>
";
