<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> */
/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.elgg-page-default {
	background: #f5e7b6;
	box-shadow: 0 0 20px 10px rgba(0,0,0,.5);
	margin: 0 auto;
	width: 960px;
}

.elgg-inner {
	position:relative;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000;
	height: 24px;
	left: 0;
	min-width: 998px;
	padding: 0 10px;
	position: fixed;
	right: 0;
	z-index: 9000;
}

.elgg-page-topbar + .elgg-page {
	padding-top: 25px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	max-width: 500px;
	position: fixed;
	right: 20px;
	top: 24px;
	z-index: 1000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	background: #444;
}
.elgg-page-header > .elgg-inner {
	height: 125px;
	padding-bottom: 32px;
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	background: #F5E7B6;
	position: relative;
	z-index: 100;
}
.elgg-layout {
	min-height: 360px;
	padding: 20px;
}

.elgg-layout-one-sidebar {
	padding: 10px 0 0 20px;	
}

.elgg-sidebar {
	float: right;
	margin-left: 20px;
	padding: 20px 0;
	position: relative;
	width: 210px;
}
.elgg-sidebar-alt {
	float: left;
	margin: 0 10px 0 0;
	padding: 20px 10px;
	position: relative;
	width: 160px;
}
.elgg-main {
	min-height: 360px;
	padding: 10px;
	position: relative;
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}

.elgg-main > .elgg-head a {
	float: right;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	font-size: 80%;
	padding: 10px;
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover,
.elgg-page-footer a:focus {
	color: #666;
}