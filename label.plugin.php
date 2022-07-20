<?php
/**
 * Plugin Name: Print Label & Barcode
 * Plugin URI: 
 * Description: Prin Label Call Number including barcode item
 * Version: 1.0
 * Author:  BlogITCode 
 * Author URI: https://www.blogitcode.com/search/label/SLiMS
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

// registering menus
$plugin->registerMenu('bibliography', 'Print Label & Barcode', __DIR__ . '/index.php');
