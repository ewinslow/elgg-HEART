/**
 * Colors:
 *   #663600 -- brown    (Pantone 1545 C)
 *   #7d0b00 -- deep red (Pantone 1815 C)
 *   #b49f70 -- dark tan (Pantone 7503 C)
 *   #f5e7b6 -- light tan
 *   #E65217 -- Orange
 *   #8F563F -- Light brown
 *   #6D2103 -- Dark brown
 *   #FFD57D -- Yellowish
 *   #FFEBBF -- Light yellowish
 */
body {
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/HEART/graphics/bg_main.jpg);
}

.elgg-image-block {
	padding: 0;
	margin: 0;
}

.elgg-image-block > .elgg-image{
	margin-right: 10px;
}

.elgg-list-content {
	margin:0;
}

.elgg-main {padding:0}

img {max-width: 100%}

.HEART-banner {
	position:relative;
	margin-bottom:-3px;
}

.HEART-banner-text {
	font-family: trebuchet;
	font-style: italic;
	color:white;
	position:absolute;
	bottom: 0;
	left: 0;
	padding: 20px;
	font-size: 1.5em;
	line-height: 1.3em;
	text-shadow: 1px 1px 10px black;
}

.elgg-button {display:inline-block}
.elgg-button:hover {text-decoration:none}

.elgg-button-large,
a.elgg-button-large {
	font-size: 1.5em;
	padding: .3em .6em;
}

.elgg-button-special {
	background: #64aad0;
	background: -webkit-gradient(linear, left bottom, left top, color-stop(0, #086ca2), color-stop(1, #64aad0));
	border: 1px solid #086ca2;
	color: white;
	text-shadow: 1px 1px 0px #086ca2;
}

.elgg-button-special:hover {
	color:white;
}

.elgg-button-special:active {
	background: #086ca2;
}

.elgg-page-header .elgg-search {
	position:absolute;
	top: 10px;
	right: 10px;
}

.elgg-col:last-child {
	overflow:hidden;
	float:none;
	width:auto;
}

.elgg-entity-list > li {
	padding: 5px;
}

.elgg-author-name {
	font-weight:bold;
}

a {color:#7d0b00;}
a:hover{color: #E65217;}

.elgg-output a {
	text-decoration:underline;
}

.elgg-output a:hover {
	text-decoration:underline;
}

.elgg-list {margin:0}

.elgg-gallery > li {
	display: inline-block;
	vertical-align: top;

	/* IE fixes */
	zoom: 1;
	*display: inline;
}

.elgg-gallery-2 > li {
	width:50%;
}