<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> */

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	display: block;
	margin: 10px 0;
	text-align: center;
}
.elgg-pagination li {
	display: inline-block;
	margin: 0 3px;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	border: 1px solid #444;
	color: #444;
	font-size: 12px;
	padding: 2px 6px;
}
.elgg-pagination a:hover,
.elgg-pagination a:focus {
	border-color: #9F1C00;
	color: #9F1C00;
	text-decoration: none;
}

.elgg-pagination .elgg-state-disabled span {
	border-color: #CCC;
	color: #CCC;
}
.elgg-pagination .elgg-state-selected span {
	border-color: #9F1C00;
	color: #9F1C00;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	border-bottom: 1px solid #7D0B00;
	display: table;
	font-family: "Colonna MT Regular", serif;
	font-size: 130%;
	line-height: normal;
	margin-bottom: 5px;
	width: 100%;
}

.elgg-tabs > li {
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	float: left;
	margin-left: 5px;
}

.elgg-tabs > li > a {
	color: white;
	display: block;
	font-weight: bold;
	padding: 3px 10px 1px;
	text-align: center;
	text-decoration: none;
}

.elgg-tabs > .elgg-state-selected,
.elgg-tabs > li:hover,
.elgg-tabs > li:focus {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	color: #666;
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
}

.elgg-breadcrumbs > li {
	display: inline-block;
}

.elgg-breadcrumbs > li:after {
	content: "\003E";
	font-weight: normal;
	padding: 0 4px;
}

.elgg-breadcrumbs > li > a {
	color: #666;
	display: inline-block;
}

.elgg-breadcrumbs > li:last-child {
	color: #999;
}

.elgg-breadcrumbs > li > a:hover,
.elgg-breadcrumbs > li > a:focus {
	text-decoration: underline;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
	color: #eee;
	line-height: 1.1em;
	margin-top: 2px;
	padding: 2px 15px;
}

.elgg-menu-topbar > li > a:hover,
.elgg-menu-topbar > li > a:focus {
	color: #71cbff;
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float: right;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	background: #333;
	position: absolute;
	width: 100%;
	z-index: 101;
}

.elgg-menu-site > li {
	display: inline-block;
	position: relative;
	width: 16.66666%;
}

.elgg-menu-site > li > a {
	text-align: center;
}

.elgg-menu-site li > a {
	color: #f5e7b6;
	display: block;
	font-size: 1.2em;
	font-weight: bold;
	padding: 4px 13px;
}

.elgg-menu-site .elgg-menu-item-donate > a {
	color: #64AAD0;
}

.elgg-menu-site li > a:hover,
.elgg-menu-site li > a:focus {
	background: #7d0b00;
	text-decoration: none;
}

.elgg-menu-site {
	/* font-family: "Colonna MT Regular", serif; */
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	font-family: "Trebuchet MS", Arial, sans-serif;
	font-size: 130%;
	position: relative;
}


.elgg-menu-site > li > a:hover,
.elgg-menu-site > li > a:focus {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
	z-index: 3;
}

/* This can probably be abstracted to elgg-menu-dropdown */
.elgg-menu-site .elgg-child-menu {
	background: #333;
	display: none;
	left: 0;
	min-width: 100%;
	position: absolute;
	top: 100%;
	white-space: nowrap;
	z-index: 2;
}

.elgg-menu-site :hover .elgg-child-menu,
.elgg-menu-site :focus .elgg-child-menu {
	display: block;
}

/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	border-bottom: 1px solid #9F1C00;
	display: table;
	font-family: "Colonna MT Regular", serif;
	font-size: 130%;
	line-height: normal;
	margin-bottom: 5px;
	width: 100%;
}

.elgg-menu-filter > li {
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	float: left;
	margin-left: 5px;
}

.elgg-menu-filter > li > a {
	color: white;
	display: block;
	font-weight: bold;
	padding: 3px 10px 1px;
	text-align: center;
	text-decoration: none;
}

.elgg-menu-filter > .elgg-state-selected,
.elgg-menu-filter > li:hover,
.elgg-menu-filter > li:focus {
	background: -webkit-gradient(linear, left bottom, left top, from(#7D0B00), to(#9F1C00));
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page > li > a {
	background: none;
	color: #333;
	display: block;
	padding: 4px 10px;
}

.elgg-menu-page > li > a:hover,
.elgg-menu-page > li > a:focus {
	background-color: #9F1C00;
	color: white;
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
	background-color: #FFF;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	display: none;
	position: absolute;
	width: 165px;
	z-index: 10000;
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
	font-size: 92%;
	padding: 2px 8px;
}
.elgg-menu-hover a:hover,
.elgg-menu-hover a:focus {
	background: #ccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover,
.elgg-menu-hover-admin a:focus
	background-color: red;
	color: white;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	color: #666;
	display: inline-block;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-alt {
	float: right;
}

.elgg-menu-footer-default {
	float: left;
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
	background: none;
	color: #333;
	display: block;
	padding: 4px 10px;
}
.elgg-menu-owner-block > li > a:hover,
.elgg-menu-owner-block > li > a:focus {
	background-color: #9F1C00;
	color: white;
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
	float: right;
	font-size: 90%;
}

.elgg-menu-river > li {
	display: inline-block;
}

.elgg-menu-extras {
	padding-bottom: 10px;
	padding-left: 10px;
}

.elgg-menu-extras > li {
	display: inline-block;
}
