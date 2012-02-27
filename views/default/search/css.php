<?php
/**
 * Elgg Search css
 *
 */
?>

/**********************************
 Search plugin
***********************************/
.elgg-page-header .elgg-search {
	bottom: 5px;
	height: 23px;
	position: absolute;
	right: 0;
}

.elgg-page-header .elgg-search input[type=text] {
	width: 198px;
}

.elgg-page-header .elgg-search input[type=submit] {
	display: none;
}

.elgg-search input[type=text] {
	background: white url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 4px -915px;
	border: 1px solid white;
	border-radius: 2px;
	font-size: 12px;
	font-weight: bold;
	padding: 2px 4px 2px 26px;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #cccccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
