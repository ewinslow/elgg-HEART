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

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.elgg-page-default {
	margin: 0 auto;
	width: 960px;
	box-shadow: 0 0 20px 10px rgba(0,0,0,.5);
	background: #f5e7b6;
}

.elgg-inner {position:relative}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	min-width: 998px;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
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
	position: relative;
	padding-bottom: 32px;
	height:125px;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	position:relative;
	background: #F5E7B6;
	z-index: 100;
}
.elgg-layout {
	min-height: 360px;
}

.elgg-layout-one-column {
	padding: 10px 0;
}

.elgg-layout-one-sidebar {
	padding: 10px 0 0 20px;	
}

.elgg-sidebar {
	position: relative;
	padding: 20px 0;
	float: right;
	width: 210px;
	margin-left: 20px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}

.elgg-main > .elgg-head a {
	float: right;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
	font-size: 80%;
	padding: 10px;
	text-align:center;
}
.elgg-page-footer {
	color: #999999;
}
.elgg-page-footer a:hover {
	color: #666666;
}