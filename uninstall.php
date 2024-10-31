<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_hotels = new TrustindexPlugin_hotels("hotels", __FILE__, "12.4.1", "Widgets for Hotels.com Reviews", "Hotels");
$trustindex_pm_hotels->uninstall();
?>