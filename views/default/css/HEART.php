/* <style> */
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
	background-color: #7d0b00;
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/bg_main.jpg);
}

.elgg-icon {
	vertical-align: middle;
}

.elgg-image-block {
	margin: 0;
	padding: 0;
}

.elgg-image-block > .elgg-image {
	margin-right: 10px;
	max-width: 50%;
}

.elgg-image-block.elgg-size-large > .elgg-image {
	margin-right: 20px;
}

.elgg-list-content {
	margin: 0;
}

.elgg-main {
	padding: 0;
}

img {
	max-height: 100%;
	max-width: 100%;
}

.elgg-page-header .elgg-search {
	position: absolute;
	right: 10px;
	top: 10px;
}

.elgg-col:last-child {
	float: none;
	overflow: hidden;
	width: auto;
}

.elgg-entity-list > li {
	padding: 5px;
}

.elgg-list {
	margin:0; 
	border:0;
}

.elgg-list > li {
	border:0;
}

.elgg-gallery > li {
	display: inline-block;
	vertical-align: top;

	/* IE fixes */
	zoom: 1;
	*display: inline;
}

.elgg-gallery-2 > li {
	width: 50%;
}

.elgg-gallery-cozy > li {
	margin: 20px;
}

.tidypics-gallery > li {
	margin: 0 5px 1px 0;
	padding: 0;
}

.elgg-river > li {
	padding: 7px 0;
}

.elgg-object-blog-summary {
	margin-bottom: 20px;
}

.elgg-object-blog-summary > .elgg-image {
	border-right: 1px solid #ccc;
	padding-right: 10px;
	text-align: right;
	width: 100px;
}

.elgg-ajax-loader {
	background-color: transparent;
}

.elgg-photo {
	background: none;
	border: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
}

.tidypics-list-album {
	height: 100px;
	overflow: hidden;
}

.tidypics-list-album > li {
	margin-right: 5px;
}

.elgg-item .elgg-content {
	margin: 0;
}

.elgg-list-entity > .elgg-item {
	margin-bottom: 2em;
}

.HEART-legal {
	color: #999;
	text-align: right;	
}

.HEART-hidden-accessible {
	left: -9999em;
	position: absolute;
}

.elgg-line {
	display: table;
	width: 100%;
}

.elgg-line > * {
	padding-right: .5em;
	display: table-cell;
	vertical-align: middle;
	width: 0;
}

.elgg-line > .elgg-body {
	width: 100%;
}
