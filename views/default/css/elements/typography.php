<?php
/**
 * CSS typography
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Typography
*************************************** */
@font-face {
	font-family: "Colonna MT Regular";
	src: url("<?php echo elgg_get_site_url(); ?>mod/HEART/fonts/Colonna_MT_Regular.ttf");
}

body {
	font-size: 80%;
	line-height: 1.4em;
	font-family: "Lucida Grande", Arial, Tahoma, Verdana, sans-serif;
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
}
h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
}
h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

a:hover {text-decoration:none !important}

.elgg-heading-site {
	color: white;
	font-style: italic;
	line-height: 1.2em;
	font-family: "Colonna MT Regular", Georgia, times, serif;
	text-shadow: 1px 2px 4px #333333;
}

h1.elgg-heading-site {
	font-size: 3.6em;
}

.elgg-heading-site:hover {	text-decoration: none}
.elgg-heading-main {
	float: left;
	max-width: 530px;
	margin-right: 10px;
}
.elgg-heading-basic {
	color: #0054A7;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666666;
	font-size: 85%;
	line-height: 1.2em;
	font-style: italic;
}
