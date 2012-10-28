<?php
/**
 * Theme settings
 */



function theme_content(&$a){
	if(!local_user())
		return;

	$font_size = get_pconfig(local_user(), 'perihel', 'font_size' );
	$line_height = get_pconfig(local_user(), 'perihel', 'line_height' );
	$resolution = get_pconfig(local_user(), 'perihel', 'resolution' );
	$color = get_pconfig(local_user(), 'perihel', 'color' );
	$TSearchTerm = get_pconfig(local_user(), 'perihel', 'TSearchTerm' );
	$ELZoom = get_pconfig(local_user(), 'perihel', 'ELZoom' );
	$ELPosX = get_pconfig(local_user(), 'perihel', 'ELPosX' );
	$ELPosY = get_pconfig(local_user(), 'perihel', 'ELPosY' );
	$close_pages = get_pconfig(local_user(), 'perihel', 'close_pages' );
	$close_mapquery = get_pconfig(local_user(), 'perihel', 'close_mapquery' );
	$close_profiles = get_pconfig(local_user(), 'perihel', 'close_profiles' );
	$close_helpers = get_pconfig(local_user(), 'perihel', 'close_helpers' );
	$close_services = get_pconfig(local_user(), 'perihel', 'close_services' );
	$close_friends = get_pconfig(local_user(), 'perihel', 'close_friends' );
	$close_twitter = get_pconfig(local_user(), 'perihel', 'close_twitter' );
	$close_lastusers = get_pconfig(local_user(), 'perihel', 'close_lastusers' );
	$close_lastphotos = get_pconfig(local_user(), 'perihel', 'close_lastphotos' );
	$close_lastlikes = get_pconfig(local_user(), 'perihel', 'close_lastlikes' );


	return perihel_form($a,$font_size, $line_height, $resolution, $color, $TSearchTerm, $ELZoom, $ELPosX, $ELPosY, $close_pages, $close_mapquery, $close_profiles, $close_helpers, $close_services, $close_friends, $close_twitter, $close_lastusers, $close_lastphotos, $close_lastlikes);
}

function theme_post(&$a){
	if(! local_user())
		return;

	if (isset($_POST['perihel-settings-submit'])){
		set_pconfig(local_user(), 'perihel', 'font_size', $_POST['perihel_font_size']);
		set_pconfig(local_user(), 'perihel', 'line_height', $_POST['perihel_line_height']);
		set_pconfig(local_user(), 'perihel', 'resolution', $_POST['perihel_resolution']);
		set_pconfig(local_user(), 'perihel', 'color', $_POST['perihel_color']);
		set_pconfig(local_user(), 'perihel', 'TSearchTerm', $_POST['perihel_TSearchTerm']);
		set_pconfig(local_user(), 'perihel', 'ELZoom', $_POST['perihel_ELZoom']);
		set_pconfig(local_user(), 'perihel', 'ELPosX', $_POST['perihel_ELPosX']);
		set_pconfig(local_user(), 'perihel', 'ELPosY', $_POST['perihel_ELPosY']);
		set_pconfig(local_user(), 'perihel', 'ELPosY', $_POST['perihel_ELPosY']);
		set_pconfig(local_user(), 'perihel', 'close_pages', $_POST['perihel_close_pages']);
		set_pconfig(local_user(), 'perihel', 'close_mapquery', $_POST['perihel_close_mapquery']);
		set_pconfig(local_user(), 'perihel', 'close_profiles', $_POST['perihel_close_profiles']);
		set_pconfig(local_user(), 'perihel', 'close_helpers', $_POST['perihel_close_helpers']);
		set_pconfig(local_user(), 'perihel', 'close_services', $_POST['perihel_close_services']);
		set_pconfig(local_user(), 'perihel', 'close_friends', $_POST['perihel_close_friends']);
		set_pconfig(local_user(), 'perihel', 'close_twitter', $_POST['perihel_close_twitter']);
		set_pconfig(local_user(), 'perihel', 'close_lastusers', $_POST['perihel_close_lastusers']);
		set_pconfig(local_user(), 'perihel', 'close_lastphotos', $_POST['perihel_close_lastphotos']);
		set_pconfig(local_user(), 'perihel', 'close_lastlikes', $_POST['perihel_close_lastlikes']);

	}
}


function theme_admin(&$a){
	$font_size = get_config('perihel', 'font_size' );
	$line_height = get_config('perihel', 'line_height' );
	$resolution = get_config('perihel', 'resolution' );
	$color = get_config('perihel', 'color' );
	$TSearchTerm = get_config('perihel', 'TSearchTerm' );
	$ELZoom = get_config('perihel', 'ELZoom' );
	$ELPosX = get_config('perihel', 'ELPosX' );
	$ELPosY = get_config('perihel', 'ELPosY' );
	$close_pages = get_config('perihel', 'close_pages' );
	$close_mapquery = get_config('perihel', 'close_mapquery' );
	$close_profiles = get_config('perihel', 'close_profiles' );
	$close_helpers = get_config('perihel', 'close_helpers' );
	$close_services = get_config('perihel', 'close_services' );
	$close_friends = get_config('perihel', 'close_friends' );
	$close_twitter = get_config('perihel', 'close_twitter' );
	$close_lastusers = get_config('perihel', 'close_lastusers' );
	$close_lastphotos = get_config('perihel', 'close_lastphotos' );
	$close_lastlikes = get_config('perihel', 'close_lastlikes' );

	return perihel_form($a,$font_size, $line_height, $resolution, $color, $TSearchTerm, $ELZoom, $ELPosX, $ELPosY, $close_pages, $close_mapquery, $close_profiles, $close_helpers, $close_services, $close_friends, $close_twitter, $close_lastusers, $close_lastphotos, $close_lastlikes);
}

function theme_admin_post(&$a){
	if (isset($_POST['perihel-settings-submit'])){
		set_config('perihel', 'font_size', $_POST['perihel_font_size']);
		set_config('perihel', 'line_height', $_POST['perihel_line_height']);
		set_config('perihel', 'resolution', $_POST['perihel_resolution']);
		set_config('perihel', 'color', $_POST['perihel_color']);
		set_config('perihel', 'TSearchTerm', $_POST['perihel_TSearchTerm']);
		set_config('perihel', 'ELZoom', $_POST['perihel_ELZoom']);
		set_config('perihel', 'ELPosX', $_POST['perihel_ELPosX']);
		set_config('perihel', 'close_pages', $_POST['perihel_close_pages']);
		set_config('perihel', 'close_mapquery', $_POST['perihel_close_mapquery']);
		set_config('perihel', 'close_profiles', $_POST['perihel_close_profiles']);
		set_config('perihel', 'close_helpers', $_POST['perihel_close_helpers']);
		set_config('perihel', 'close_services', $_POST['perihel_close_services']);
		set_config('perihel', 'close_friends', $_POST['perihel_close_friends']);
		set_config('perihel', 'close_twitter', $_POST['perihel_close_twitter']);
		set_config('perihel', 'close_lastusers', $_POST['perihel_close_lastusers']);
		set_config('perihel', 'close_lastphotos', $_POST['perihel_close_lastphotos']);
		set_config('perihel', 'close_lastlikes', $_POST['perihel_close_lastlikes']);

	}
}


function perihel_form(&$a, $font_size, $line_height, $resolution, $color, $TSearchTerm, $ELZoom, $ELPosX, $ELPosY, $close_pages, $close_mapquery, $close_profiles, $close_helpers, $close_services, $close_friends, $close_twitter, $close_lastusers, $close_lastphotos, $close_lastlikes){
	$line_heights = array(
		"1.3"=>"1.3",
		"---"=>"---",
		"1.6"=>"1.6",
		"1.5"=>"1.5",
		"1.4"=>"1.4",
		"1.2"=>"1.2",
		"1.1"=>"1.1",
	);

	$font_sizes = array(
		'14'=>'14',
		"---"=>"---",
		"16"=>"16",
		"15"=>"15",
		'13.5'=>'13.5',
		'13'=>'13',
		'12.5'=>'12.5',
		'12'=>'12',
		);
	$resolutions = array(
		'normal'=>'normal',
		'wide'=>'wide',
		);
	$colors = array(
		'perihel'=>'perihel',
		);

	$close_or_not = array('1'=>t("don't show"),	'0'=>t("show"),);



	$t = file_get_contents( dirname(__file__). "/theme_settings.tpl" );
	$o .= replace_macros($t, array(
		'$submit' => t('Submit'),
		'$baseurl' => $a->get_baseurl(),
		'$title' => t("Theme settings"),
		'$font_size' => array('perihel_font_size', t('Set font-size for posts and comments'), $font_size, '', $font_sizes),
		'$line_height' => array('perihel_line_height', t('Set line-height for posts and comments'), $line_height, '', $line_heights),
		'$resolution' => array('perihel_resolution', t('Set resolution for middle column'), $resolution, '', $resolutions),
		'$color' => array('perihel_color', t('Set color scheme'), $color, '', $colors),
		'$TSearchTerm' => array('perihel_TSearchTerm', t('Set twitter search term'), $TSearchTerm, '', $TSearchTerm),
		'$ELZoom' => array('perihel_ELZoom', t('Set zoomfactor for Earth Layer'), $ELZoom, '', $ELZoom),
		'$ELPosX' => array('perihel_ELPosX', t('Set longitude (X) for Earth Layers'), $ELPosX, '', $ELPosX),
		'$ELPosY' => array('perihel_ELPosY', t('Set latitude (Y) for Earth Layers'), $ELPosY, '', $ELPosY),
		'$close_pages' => array('perihel_close_pages', t('Community Pages'), $close_pages, '', $close_or_not),
		'$close_mapquery' => array('perihel_close_mapquery', t('Earth Layers'), $close_mapquery, '', $close_or_not),
		'$close_profiles' => array('perihel_close_profiles', t('Community Profiles'), $close_profiles, '', $close_or_not),
		'$close_helpers' => array('perihel_close_helpers', t('Help or @NewHere ?'), $close_helpers, '', $close_or_not),
		'$close_services' => array('perihel_close_services', t('Connect Services'), $close_services, '', $close_or_not),
		'$close_friends' => array('perihel_close_friends', t('Find Friends'), $close_friends, '', $close_or_not),
		'$close_twitter' => array('perihel_close_twitter', t('Last tweets'), $close_twitter, '', $close_or_not),
		'$close_lastusers' => array('perihel_close_lastusers', t('Last users'), $close_lastusers, '', $close_or_not),
		'$close_lastphotos' => array('perihel_close_lastphotos', t('Last photos'), $close_lastphotos, '', $close_or_not),
		'$close_lastlikes' => array('perihel_close_lastlikes', t('Last likes'), $close_lastlikes, '', $close_or_not),
	));
	return $o;
}
