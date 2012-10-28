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




	return perihel_form($a,$font_size, $line_height, $resolution);
}

function theme_post(&$a){
	if(! local_user())
		return;

	if (isset($_POST['perihel-settings-submit'])){
		set_pconfig(local_user(), 'perihel', 'font_size', $_POST['perihel_font_size']);
		set_pconfig(local_user(), 'perihel', 'line_height', $_POST['perihel_line_height']);
		set_pconfig(local_user(), 'perihel', 'resolution', $_POST['perihel_resolution']);


	}
}


function theme_admin(&$a){
	$font_size = get_config('perihel', 'font_size' );
	$line_height = get_config('perihel', 'line_height' );
	$resolution = get_config('perihel', 'resolution' );


	return perihel_form($a,$font_size, $line_height, $resolution);
}

function theme_admin_post(&$a){
	if (isset($_POST['perihel-settings-submit'])){
		set_config('perihel', 'font_size', $_POST['perihel_font_size']);
		set_config('perihel', 'line_height', $_POST['perihel_line_height']);
		set_config('perihel', 'resolution', $_POST['perihel_resolution']);

	}
}


function perihel_form(&$a, $font_size, $line_height, $resolution, $color){
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

	));
	return $o;
}
