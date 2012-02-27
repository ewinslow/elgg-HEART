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
	background-image: url(<?php echo elgg_get_site_url(); ?>mod/HEART/assets/graphics/bg_main.jpg);
}

.elgg-icon {
	vertical-align: middle;
}

.elgg-image-block {
	padding: 0;
	margin: 0;
}

.elgg-image-block > .elgg-image {
	margin-right: 10px;
	max-width: 50%;
}

.elgg-image-block.elgg-size-large > .elgg-image {
	margin-right: 20px;
}

.elgg-list-content {
	margin:0;
}

.elgg-main {padding:0}

img {
	max-height:100%;
	max-width: 100%;
}

.HEART-banner {
	position:relative;
	margin-bottom:-4px;
	overflow:hidden;
}

.HEART-banner img {
	width: 100%;
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
	width: 225px;
}

.HEART-banner-groups img {
	margin: -25% 0 -10%;
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

.elgg-list {margin:0; border:0}
.elgg-list > li {border:0}

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
	padding-right: 10px;
	border-right: 1px solid #ccc;
	width: 100px;
	text-align: right;
}

.elgg-ajax-loader {
	background-color: transparent;
}

.elgg-photo {
	box-sizing: border-box;
	border: 0;
	padding: 0;
	background: none;
}

.tidypics-list-album {
	overflow: hidden;
	height: 100px;
}

.tidypics-list-album > li {
	margin-right: 5px;
}

.HEART-legal {
	color: #999;
	text-align: right;	
}

.elgg-item .elgg-content {
	margin: 0;
}

.elgg-list-entity > .elgg-item {
	margin-bottom: 2em;
}