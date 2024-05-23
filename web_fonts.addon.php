<?php
	if(!defined('__XE__')) return;
	if(!defined('__ZBXE__')) return;

	if( $called_position == 'before_display_content' ) {
		if( $addon_info->google_use == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/google_icon.css');
		}
		if( $addon_info->awesome_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/fa/css/all.min.css');
		}
		if( $addon_info->awesome_use== 'enable' ) {
			Context::addCSSFile('///use.fontawesome.com/releases/v6.5.2/css/all.css');
		}
		if( $addon_info->remix_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/remix/fonts/remixicon.css');
		}
		if( $addon_info->remix_use== 'enable' ) {
			Context::addCSSFile('///cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
		}
		if( $addon_info->nanumgothic_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/nanumgothic.css');
		}
		if( $addon_info->nanumgothic_use== 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/nanumgothic.css');
		}
		if( $addon_info->nanumsquareneo_use== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/nanumsquareneo.css');
		}
		if( $addon_info->nanumbarungothic_use== 'enable' ) {
			Context::addCSSFile('///cdn.jsdelivr.net/gh/moonspam/NanumBarunGothic@latest/nanumbarungothicsubset.css');
		}
		if( $addon_info->nanumpen_use== 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/nanumpenscript.css');
		}
		if( $addon_info->xeicon== 'enable_xe' ) {
			Context::addCSSFile('././common/xeicon/xeicon.min.css');
		}
		if( $addon_info->xeicon== 'enable_rm' ) {
			Context::addCSSFile('././common/css/xeicon/xeicon.min.css');
		}
		if( $addon_info->noto_use == 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/notosanskr.css');
		}
		if( $addon_info->button_use == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/button.css');
		}
		if( $addon_info->tag_counter == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/tagcounter.css');
		}
		if( $addon_info->randcolor== 'enable' ) {
			Context::addJSFile('./addons/web_fonts/css/randcolor.js');
		}
	}
=======
<?php
	if(!defined('__XE__')) return;
	if(!defined('__ZBXE__')) return;

	if( $called_position == 'before_display_content' ) {
		if( $addon_info->google_use == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/google_icon.css');
		}
		if( $addon_info->awesome_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/fa/css/all.min.css');
		}
		if( $addon_info->awesome_use== 'enable' ) {
			Context::addCSSFile('///use.fontawesome.com/releases/v6.5.2/css/all.css');
		}
		if( $addon_info->remix_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/remix/fonts/remixicon.css');
		}
		if( $addon_info->remix_use== 'enable' ) {
			Context::addCSSFile('///cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
		}
		if( $addon_info->nanumgothic_use_in== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/nanumgothic.css');
		}
		if( $addon_info->nanumgothic_use== 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/nanumgothic.css');
		}
		if( $addon_info->nanumsquareneo_use== 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/nanumsquareneo.css');
		}
		if( $addon_info->nanumbarungothic_use== 'enable' ) {
			Context::addCSSFile('///cdn.jsdelivr.net/gh/moonspam/NanumBarunGothic@latest/nanumbarungothicsubset.css');
		}
		if( $addon_info->nanumpen_use== 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/nanumpenscript.css');
		}
		if( $addon_info->xeicon== 'enable_xe' ) {
			Context::addCSSFile('././common/xeicon/xeicon.min.css');
		}
		if( $addon_info->xeicon== 'enable_rm' ) {
			Context::addCSSFile('././common/css/xeicon/xeicon.min.css');
		}
		if( $addon_info->noto_use == 'enable' ) {
			Context::addCSSFile('///fonts.googleapis.com/earlyaccess/notosanskr.css');
		}
		if( $addon_info->button_use == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/button.css');
		}
		if( $addon_info->tag_counter == 'enable' ) {
			Context::addCSSFile('./addons/web_fonts/css/tagcounter.css');
		}
		if( $addon_info->randcolor== 'enable' ) {
			Context::addJSFile('./addons/web_fonts/css/randcolor.js');
		}
	}