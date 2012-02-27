<?php
/**
 * Page Layout
 *
 * Contains mobile (phone-optimized) CSS for the page shell and page layout
 *
 * Colors:
 *   #f5e7b6 Tan
 * 
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> */
/* ***************************************
	PAGE LAYOUT
*************************************** */

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat top left;
	border-bottom: 1px solid #000;
	left: 0;
	height: 48px;
	padding: 0 10px;
	position: fixed;
	right: 0;
	z-index: 9000;
}

.elgg-page-topbar + .elgg-page {
	padding-top: 49px;
}

/****** HEADER *******/
.elgg-page-header > .elgg-inner {
	position: relative;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/bg_main.jpg);
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 10px;
	position: relative;
	z-index: 100;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	background: #F5E7B6;
	color: #999999;
	font-size: 80%;
}

.elgg-page-footer .elgg-inner {
	padding: 10px;
}


