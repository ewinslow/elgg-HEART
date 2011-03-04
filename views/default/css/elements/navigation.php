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
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	padding: 2px 6px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	color: #4690d6;
	border: 1px solid #4690d6;
	font-size: 12px;
}
.elgg-pagination a:hover {
	background: #4690d6;
	color: white;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #555555;
	border-color: #555555;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #cccccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 2px solid #cccccc;
	border-bottom-width: 0;
	background: #eeeeee;
	margin: 0 0 0 10px;
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-top-right-radius: 5px;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
	color: #999999;
}
.elgg-tabs a:hover {
	background: #dedede;
	color:#4690D6;
}
.elgg-tabs .elgg-state-selected {
	border-color: #cccccc;
	background: white;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 2px;
	background: white;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs li {
	display: inline;
}
.elgg-breadcrumbs li:after{
	content: "\003E";
	display: inline-block;
	padding: 0 4px 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs li:last-child:after {
	content: "";
}
.elgg-breadcrumbs a {
	color: #999999;
}
.elgg-breadcrumbs a:hover {
	color: #0054a7;
	text-decoration: underline;
}
.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}

/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	position: absolute;
	height: 23px;
	bottom: 0;
	left: 5px;
	width: auto;
	z-index: 7000;
}
.elgg-menu-site li {
	display: block;
	float: left;
	height: 23px;
}
.elgg-menu-site > li {
	margin-right: 1px;
}
.elgg-menu-site a {
	color: white;
	font-weight: bold;
	padding: 3px 13px 0px 13px;
	height: 20px;
	display: block;
}
.elgg-menu-site li.elgg-state-selected a,
.elgg-menu-site li a:hover,
.elgg-menu-site .elgg-more:hover a {
	text-decoration: none;
	background: #F5E7B6;
	color: #555555;
	-webkit-box-shadow: 2px -1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 2px -1px 1px rgba(0, 0, 0, 0.25);
	-moz-border-radius-topleft: 4px;
	-moz-border-radius-topright: 4px;
	-webkit-border-top-left-radius: 4px;
	-webkit-border-top-right-radius: 4px;
}
.elgg-menu-site .elgg-more {
	overflow: hidden;
}
.elgg-menu-site .elgg-more:hover {
	overflow: visible;
}
.elgg-menu-site .elgg-more:hover span {
	background-position: -146px -76px;
}
.elgg-menu-site .elgg-more ul {
	z-index: 7000;
	min-width: 150px;
	border-left: 1px solid #999999;
	border-right: 1px solid #999999;
	border-bottom: 1px solid #999999;
	-moz-border-radius-bottomleft: 4px;
	-moz-border-radius-bottomright: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}
.elgg-menu-site .elgg-more ul li {
	float: none;
}
.elgg-menu-site .elgg-more:hover ul li a {
	background: white;
	color: #483E25;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}
.elgg-menu-site .elgg-more ul li a:hover {
	background: #F5E7B6;
	color: #483E25;
}
.elgg-menu-site .elgg-more ul li:last-child a,
.elgg-menu-site .elgg-more ul li:last-child a:hover {
	-moz-border-radius-bottomleft: 4px;
	-moz-border-radius-bottomright: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-webkit-border-bottom-right-radius: 4px;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page a {
	display: block;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	background-color: white;
	margin: 0 0 3px 0;
	padding: 2px 4px 2px 8px;
}
.elgg-menu-page a:hover {
	background-color: #0054A7;
	color: white;
	text-decoration: none;
}
.elgg-menu-page li.elgg-state-selected > a {
	background-color: #4690D6;
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
	border-top: solid 1px #E5E5E5;
	border-left: solid 1px #E5E5E5;
	border-right: solid 1px #999999;
	border-bottom: solid 1px #999999;
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
	display: block;
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #cccccc;
	text-decoration: none;
}
.elgg-hover-admin a {
	color: red;
}
.elgg-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-menu-footer li {
	float: left;
}
.elgg-menu-footer li:after {
	content: "\007C";
	display: inline-block;
	padding: 0 4px 0 4px;
	font-weight: normal;
}
.elgg-menu-footer li:last-child:after {
	content: "";
}
