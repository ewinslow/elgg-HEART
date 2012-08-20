/*<style>
/**
 *
 */

/* ***************************************
	Modules
*************************************** */
/* Aside */
.elgg-module-aside {
	font-size: 85%;
	margin-bottom: 20px;
}

.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #CCC;
	margin-bottom: 5px;
	padding-bottom: 5px;
}

.elgg-module-aside > .elgg-head > h3 {
	margin: 0;
}

/* Info */
.elgg-module-info > .elgg-head {
	font-size: 1.5em;
	font-style: italic;
	padding: 10px;
	text-align: center;
}

.elgg-module-info > .elgg-head > h3 {
	color: #333;
}

/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;

	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;

	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);

	margin-bottom: 0;
	padding: 5px;
	z-index: 9999;
}

.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}

.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color: white;
	border: 5px solid #CCC;

	-webkit-border-radius: 5px 0 5px 5px;
	-moz-border-radius: 5px 0 5px 5px;
	border-radius: 5px 0 5px 5px;

	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);

	display: none;

	margin-right: 0px;
	padding: 12px;
	position: absolute;
	right: 0px;
	top: 100%;
	width: 210px;
	z-index: 100;
}

/* Featured */
.elgg-module-featured > .elgg-head {
	background: #333;
	color: white;
	font-size: 1.5em;
	padding: 10px;
	text-align: center;
}

.elgg-module-featured > .elgg-body {
	padding: 10px;
	text-align:justify;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}

.elgg-widget-add-control {
	margin: 5px 5px 15px;
	text-align: right;
}

.elgg-widgets-add-panel {
	background: #dedede;
	border: 2px solid #ccc;
	margin: 0 5px 15px;
	padding: 10px;
}

<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	background-color: #ccc;
	border: 2px solid #b0b0b0;
	float: left;
	font-weight: bold;
	margin: 2px 10px;
	padding: 4px;
	width: 200px;
}

.elgg-widgets-add-panel li a {
	display: block;
}

.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}

.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}

.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	background-color: #dedede;
	margin: 0 5px 15px;
	padding: 2px;
	position: relative;
}

.elgg-module-widget:hover {
	background-color: #ccc;
}

.elgg-module-widget > .elgg-head {
	background-color: #dedede;
	height: 30px;
	line-height: 30px;
	overflow: hidden;
}

.elgg-module-widget > .elgg-head h3 {
	color: #333;
	float: left;
	padding: 0 45px 0 20px;
}

.elgg-module-widget.elgg-state-draggable > .elgg-head {
	cursor: move;
}

.elgg-module-widget > .elgg-head a {
	border: 1px solid transparent;
	display: inline-block;
	height: 18px;
	padding: 2px 2px 0 0;
	position: absolute;
	top: 5px;
	width: 18px;
}

a.elgg-widget-collapse-button {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat 0px -385px;
	left: 5px;
}

a.elgg-widget-collapsed {
	background-position: 0px -365px;
}

a.elgg-widget-delete-button {
	right: 5px;
}

a.elgg-widget-edit-button {
	right: 25px;
}

a.elgg-widget-edit-button:hover, a.elgg-widget-delete-button:hover,
a.elgg-widget-edit-button:focus, a.elgg-widget-delete-button:focus {
	border: 1px solid #ccc;
}

.elgg-module-widget > .elgg-body {
	background-color: white;
	overflow: hidden;
	width: 100%;
}

.elgg-widget-edit {
	border-bottom: 2px solid #dedede;
	display: none;
	padding: 2%;
	width: 96%;
}

.elgg-widget-content {
	padding: 10px;
}

.elgg-widget-placeholder {
	border: 2px dashed #dedede;
	margin-bottom: 15px;
}