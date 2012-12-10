<?php
	$line_height=false;
	$perihel_font_size=false;
	$resolution=false;
	$color=false;
	$site_line_height = get_config("perihel","line_height");
	$site_perihel_font_size = get_config("perihel", "font_size" );
	$site_resolution = get_config("perihel", "resolution" );
	$site_color = get_config("perihel", "color" );
	
	
	if (local_user()) {
		$line_height = get_pconfig(local_user(), "perihel","line_height");
		$perihel_font_size = get_pconfig(local_user(), "perihel", "font_size");
		$resolution = get_pconfig(local_user(), "perihel", "resolution");
		$color = get_pconfig(local_user(), "perihel", "color");
	}
	
	if ($line_height===false) $line_height=$site_line_height;
	if ($line_height===false) $line_height="1.3";
	if ($perihel_font_size===false) $perihel_font_size=$site_perihel_font_size;
	if ($perihel_font_size===false) $perihel_font_size="13";
	if ($resolution===false) $resolution=$site_resolution;
	if ($resolution===false) $resolution="normal";
	if ($color===false) $color=$site_color;
	if ($color===false) $color="perihel";
	
	if($color == "perihel") {
	if($resolution == "normal") {	
	if (file_exists("$THEMEPATH/style.css")){
		echo file_get_contents("$THEMEPATH/style.css");
	}

	if($perihel_font_size == "16"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 16px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 16px;
  					}
		";  
   }
   if($perihel_font_size == "15"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 15px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 15px;
  					}
		";
	}	
	if($perihel_font_size == "14"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 14px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 14px;
  					}
		";
	}
	if($perihel_font_size == "13.5"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 13.5px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 13.5px;
  					}
		";
	}
	if($perihel_font_size == "13"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 13px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 13px;
  					}
		";
	}
	if($perihel_font_size == "12.5"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 12.5px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 12.5px;
  					}
		";
	}
	if($perihel_font_size == "12"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 12px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 12px;
  					}
		";
	}
	if($line_height == "1.5"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.5;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.5;
  					}
		";
	}	
	if($line_height == "1.4"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.4;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.4;
  					}
		";
	}
	if($line_height == "1.3"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.3;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.3;
  					}
		";
	}
	if($line_height == "1.2"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.2;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.2;
  					}
		";
	}
	if($line_height == "1.1"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.1;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.1;
  					}
		";
	}
	}
	
	if($resolution == "wide") {	
	if (file_exists("$THEMEPATH/style.css")){
		echo file_get_contents("$THEMEPATH/style.css");
	}
	if($perihel_font_size == "16"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 16px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 16px;
  					}
		";  
   }
   
	if($perihel_font_size == "15"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 15px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 15px;
  					}
		";
	}
	if($perihel_font_size == "14"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 14px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 14px;
  					}
		";
	}
	if($perihel_font_size == "13.5"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 13.5px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 13.5px;
  					}
		";
	}
	if($perihel_font_size == "13"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 13px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 13px;
  					}
		";
	}
	if($perihel_font_size == "12.5"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 12.5px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 12.5px;
  					}
		";
	}
	if($perihel_font_size == "12"){
		echo "
			.wall-item-container .wall-item-content {
  					font-size: 12px;
  					}
  					
			.wall-item-photo-container .wall-item-content {
  					font-size: 12px;
  					}
		";
	}
	if($line_height == "1.5"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.5;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.5;
  					}
		";
	}	
	if($line_height == "1.4"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.4;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.4;
  					}
		";
	}
	if($line_height == "1.3"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.3;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.3;
  					}
		";
	}
	if($line_height == "1.2"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.2;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.2;
  					}
		";
	}
	if($line_height == "1.1"){
		echo "
			.wall-item-container .wall-item-content {
  					line-height: 1.1;
  					}
  					
			.wall-item-photo-container .wall-item-content {
 					line-height: 1.1;
  					}
		";
	}
	}
	}
	
