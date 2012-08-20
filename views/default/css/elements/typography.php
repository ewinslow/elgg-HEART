<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/*<style>*/
/* ***************************************
	Typography
*************************************** */
@font-face {
	font-family: "Colonna MT Regular";
	src: url("<?php echo elgg_get_site_url(); ?>mod/HEART/assets/fonts/Colonna_MT_Regular.ttf");
}

body {
	font-family: "Trebuchet MS", "Times New Roman", serif;
	font-size: 14px;
	line-height: normal;
}

p {
	margin-bottom: 1em;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
}

input, textarea {
	font: 120% Arial, Helvetica, sans-serif;
}

blockquote {
	line-height: 1.3em;
	margin-left: 40px;
	margin-right: 40px;
}

h1, h2, h3, h4, h5, h6 {
	color: #7D0B00;
	font-family: "Trebuchet MS", "Times New Roman", serif;	
	font-weight: bold;
	margin-bottom: 0.5em;
}

h1 { font-size: 2em; }
h2 { font-size: 1.8em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

a:hover {
	text-decoration:none !important;
}

.elgg-heading-site {
	color: white;
	font-family: "Colonna MT Regular", Georgia, times, serif;
	font-style: italic;
	line-height: 1.2em;
	padding: 30px 20px;
	text-align: center;
	text-shadow: 1px 2px 4px #333333;
}

h1.elgg-heading-site {
	font-size: 3.6em;
}

.elgg-heading-site:hover {	text-decoration: none}

.elgg-heading-main {
	font-size: 24px;
	padding: 8px 0 6px;
	text-align: center;
}

.elgg-heading-basic {
	color: #0054A7;
	font-size: 1.2em;
	font-weight: bold;
}

.HEART-heading-motto {
	background: #444;
	background: -webkit-gradient(linear, left bottom, left top, from(#333), to(#555));
	color: #F5E7B6;
	font-family: "Colonna MT Regular";
	font-size: 24px;
	font-weight: normal;
	margin: 0;
	padding: 8px 0 6px;
	text-align: center;
}

.elgg-subtext {
	color: #666;
	font-size: 85%;
}

.elgg-author-name {
	font-weight: bold;
}

a {
	color: #7d0b00;
}

a:hover, a:focus {
	color: #E65217;
}

.elgg-output p {
	margin-bottom: 1em;
}

.elgg-output a {
	text-decoration: underline;
}

.elgg-output a:hover,
.elgg-output a:focus {
	text-decoration: underline;
}