<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline-block;
	margin: 0 3px;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	padding: 2px 6px;
	color: #444;
	border: 1px solid #444;
	font-size: 12px;
}
.elgg-pagination a:hover {
	color: #9F1C00;
	border-color: #9F1C00;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCC;
	border-color: #CCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #9F1C00;
	border-color: #9F1C00;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	display: table;
	font-family: "Colonna MT Regular", serif;
	margin-bottom: 5px;
	border-bottom: 1px solid #7D0B00;
	width: 100%;
	font-size: 130%;
	line-height: normal;
}

.elgg-tabs > li {
	float: left;
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	margin-left: 5px;
}

.elgg-tabs > li > a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 1px;
	text-align: center;
	color: white;
	font-weight: bold;
}

.elgg-tabs > .elgg-state-selected,
.elgg-tabs > li:hover {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #666;
}

.elgg-breadcrumbs > li {
	display: inline-block;
}

.elgg-breadcrumbs > li:after{
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}

.elgg-breadcrumbs > li > a {
	color: #666;
	display: inline-block;
}

.elgg-breadcrumbs > li:last-child {
	color: #999;
}

.elgg-breadcrumbs > li > a:hover {
	text-decoration: underline;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float:left;
}

.elgg-menu-topbar > li > a {
	padding: 2px 15px;
	color: #eeeeee;
	margin-top: 2px;
	line-height: 1.1em;
}

.elgg-menu-topbar > li > a:hover {
	color: #71cbff;
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float:right;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	background: #333;
	position:absolute;
	width:100%;
	z-index: 101;
}

.elgg-menu-site > li {
	display:inline-block;
	margin-right: 1px;
	position:relative;
	width: 16.66666%;
}

.elgg-menu-site > li > a {
	text-align: center;
}

.elgg-menu-site li > a {
	color: #f5e7b6;
	display: block;
	font-size: 1.3em;
	font-weight: bold;
	padding: 4px 13px;
}

.elgg-menu-site li > a:hover {
	background: #7d0b00;
	text-decoration: none;
}

.elgg-menu-site {
	/* font-family: "Colonna MT Regular", serif; */
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	font-family: "Trebuchet MS", Arial, sans-serif;
	font-size: 130%;
	position: relative;
	top: -1px;
}


.elgg-menu-site > li > a:hover {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
	z-index: 3;
}

/* This can probably be abstracted to elgg-menu-dropdown */
.elgg-menu-site .elgg-child-menu {
	background: #333;
	display: none;
	position: absolute;
	left: 0;
	min-width: 150px;
	top: 100%;
	white-space: nowrap;
	z-index: 2;
}

.elgg-menu-site :hover .elgg-child-menu {
	display:block;
}

/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float:right;
}

.elgg-menu-title > li {
	display:inline-block
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	display: table;
	font-family: "Colonna MT Regular", serif;
	margin-bottom: 5px;
	border-bottom: 1px solid #9F1C00;
	width: 100%;
	font-size: 130%;
	line-height: normal;
}

.elgg-menu-filter > li {
	float: left;
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	margin-left: 5px;
}

.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 1px;
	text-align: center;
	color: white;
	font-weight: bold;
}

.elgg-menu-filter > .elgg-state-selected,
.elgg-menu-filter > li:hover {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page > li > a {
	display: block;
	color: #333;
	background: none;
	padding: 4px 10px;
}
.elgg-menu-page > li > a:hover {
	color: white;
	background-color: #9F1C00;
	text-decoration: none;
}
.elgg-menu-page > li.elgg-state-selected > a {
	background-color: #9F1C00;
	color: white;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}


.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	width: 165px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFFFFF;
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #dddddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #cccccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color:#666;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-alt {
	float: right;
}

.elgg-menu-footer-default {
	float:left;
}

/* ***************************************
	ENTITY METADATA
*************************************** */
.elgg-menu-entity {
	font-size: 80%;
}

.elgg-menu-entity > li {
	display: inline-block;
	margin-right: 4px;
}

.elgg-timestamp {
	color: gray;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-owner-block > li > a {
	display: block;
	color: #333;
	background: none;
	padding: 4px 10px;
}
.elgg-menu-owner-block > li > a:hover {
	color: white;
	background-color: #9F1C00;
	text-decoration: none;
}
.elgg-menu-owner-block > li.elgg-state-selected > a {
	background-color: #9F1C00;
	color: white;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	font-size: 90%;
	float:right;
}

.elgg-menu-river > li {
	display: inline-block;
}

.elgg-menu-extras {
	padding-left: 10px;
	padding-bottom: 10px;
}

.elgg-menu-extras > li {
	display: inline-block;
}