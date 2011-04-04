/**
 * Colors:
 *   #663600 -- brown    (Pantone 1545 C)
 *   #7d0b00 -- deep red (Pantone 1815 C)
 *   #b49f70 -- dark tan (Pantone 7503 C)
 *   #f5e7b6 -- light tan


 * #E65217 -- Orange
 * #8F563F -- Light brown
 * #6D2103 -- Dark brown
 * #FFD57D -- Yellowish
 * #FFEBBF -- Light yellowish
 */
body {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/HEART/graphics/bg_main.jpg);
}

.elgg-page-default > .elgg-page-header > .elgg-inner {background:transparent;height: auto}

.divider {
	background: url(<?php echo elgg_get_site_url(); ?>mod/HEART/graphics/divider.jpg) repeat-x;
	height: 3px;
	border: 0;
}

.elgg-main {padding:0}

img {max-width: 100%}

.HEART-banner { position:relative}
.HEART-banner-text {
	position:absolute;
	top: 0;
	left: 0;
	padding: 20px;
	font-size: 1.5em;
	line-height: 1.3em;
	font-weight:bold;
}

.elgg-button {display:inline-block}
.elgg-button:hover {text-decoration:none}

.elgg-button-large,
a.elgg-button-large {
	font-size: 1.5em;
	padding: .3em .6em;
}

.elgg-button-special {
	background: green;
	border: 1px solid darkGreen;
	color: white;
}

.elgg-button-special:hover {
	color:white;
}