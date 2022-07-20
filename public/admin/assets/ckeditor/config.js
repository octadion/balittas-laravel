/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//tambahan
	config.height = 400;  
	config.skin = 'office2013';
	config.allowedContent = true;
	config.extraPlugins = ["imageresizerowandcolumn,youtube,bt_table"];
	config.youtube_width = '640';
	config.youtube_height = '480';
	config.youtube_controls = true;
	config.youtube_autoplay = false;
	config.youtube_privacy = false;
	config.youtube_older = false;
	config.youtube_related = true;
};
