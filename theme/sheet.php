<?php
header('Content-Type: text/css');

$star = "*";
$defaults = array(
	'cgdw' => '36', // Cal box width (calbox)
	'cgdwk' => '31', // Cal box width (calbox)
	'cgdh' => '30', // Cal box height (calbox)
	'cgdl' => '30', // Cal box line-height (calbox)
	'cgfs' => '12', // Cal box font size (calbox)
	'cgdec' => '#888', // Empty date color (calbox)
	'cgddc' => '#888', // Disabled date color (calbox)
	'dcw' => '77', // button width (datebox)
	'dsiw' => '74', // input width (datebox)
	'width' => '280', // Master Width
	'fw' => '77', // width (flipbox)
	'fwl' => '260', // lens width (flipbox)
	'fh' => '30', // cell heigh (flipbox)
	'fhl' => '40', // lens height (flipbox)
	'fch' => '125', // content height (flipbox)
	'fcsh' => '120', // scroller height (flipbox)
	'ssyw' => 84,
	'ssyl' => 30,
	'ssyh' => 30,
	'ssyf' => 14,
	'ssmw' => 51,
	'ssml' => 30,
	'ssmh' => 30,
	'ssmf' => 12,
	'ssdw' => 32,
	'ssdl' => 20,
	'ssdh' => 38,
	'ssdf' => 14,
	'sshw' => 32,
	'sshl' => 22,
	'sshh' => 24,
	'sshf' => 14,
	'swdf' => 10
);

$use = array();

foreach ( $defaults as $key => $value ) {
	if ( isset($_REQUEST[$key]) ) {
		$use[$key] = $_REQUEST[$key];
	} else {
		$use[$key] = $value;
	}
}

echo "/{$star} jQuery Mobile Framework : plugin to provide a date and time picker.\n";
echo " {$star} Copyright (c) JTSage\n";
echo " {$star} CC 3.0 Attribution.  May be relicensed without permission/notification.\n";
echo " {$star} https://github.com/jtsage/jquery-mobile-datebox\n";
echo " {$star}/\n";

echo "\n\n/{$star} Base input element Styles {$star}/\n";

echo ".ui-input-datebox { width: 97%; background-image: none; padding: .4em; line-height: 1.4; font-size: 16px; display: block; padding-top: 0px; padding-bottom: 0px; } \n";
echo ".ui-input-datebox { min-height: 38px; } \n";
echo ".ui-input-datebox .ui-btn-icon-notext { margin-top: 5px !important; margin-bottom: 5px !important; }\n";
echo ".ui-input-datebox input { width: 100% !important; padding: 0 !important; margin-top: 5px !important; margin-right: -40px !important; border: 1px solid transparent !important; vertical-align: middle; display: inline-block !important; background-color: transparent; zoom: 1; *display: inline; }\n";
echo ".ui-input-datebox input:focus { outline: none;}\n";
echo ".ui-input-datebox .ui-btn-text {display: none;}\n\n";

echo "@media all and (min-width: 450px){\n";
echo "  .ui-input-datebox { width: 60%; display: inline-block; zoom:1; *display: inline; }\n";
echo "}\n";

echo "\n\n/{$star} Calendar Mode Styles {$star}/\n";
echo ".ui-datebox-gridheader { text-align: center; }\n";
echo ".ui-datebox-gridheader h4 { text-align: center; display: inline-block; margin-top: 10px; margin-bottom: 10px; zoom:1; *display: inline;}\n";
echo ".ui-datebox-gridplus { float: right; }\n";
echo ".ui-datebox-gridminus { float: left; }\n";
echo ".ui-datebox-gridplus-rtl { float: left; }\n";
echo ".ui-datebox-gridminus-rtl { float: right; }\n";
echo ".ui-datebox-gridrow { margin-left: 5px; margin-right: 5px; }\n";
echo ".ui-datebox-grid { clear: both; margin-bottom: 5px; }\n";
echo ".ui-datebox-griddate { width: {$use['cgdw']}px; height: {$use['cgdh']}px; display: inline-block; vertical-align: middle; text-align: center; line-height: {$use['cgdl']}px; font-weight: bold; font-size: {$use['cgfs']}px; zoom:1; *display: inline;}\n";
echo ".ui-datebox-griddate { width: {$use['cgdwk']}px; height: {$use['cgdh']}px; display: inline-block; vertical-align: middle; text-align: center; line-height: {$use['cgdl']}px; font-weight: bold; font-size: {$use['cgfs']}px; zoom:1; *display: inline;}\n";
echo ".ui-datebox-griddate-empty { border: 1px solid transparent; color: {$use['cgdec']}; }\n";
echo ".ui-datebox-griddate-label { height: 15px !important; line-height: 15px !important; color: black;}\n";
echo ".ui-datebox-griddate-disable { color: {$use['cgddc']}; }\n";

echo "\n\n/{$star} Android Mode Styles {$star}/\n";
echo ".ui-datebox-header h4 { margin-top: 5px; margin-bottom: 5px; text-align: center; }\n";
echo ".ui-datebox-controls { text-align: center; }\n";
echo ".ui-datebox-controls div { width: {$use['dcw']}px; text-align: center; display: inline-block; zoom: 1; *display: inline;}\n";
echo ".ui-datebox-scontrols { text-align: center; }\n";
echo ".ui-datebox-scontrols div { width: 55px; text-align: center; display: inline-block; zoom: 1; *display: inline;}\n";
echo ".ui-datebox-scontrols .ui-datebox-sinput { width: 68px; }\n";
echo ".ui-datebox-scontrols .ui-datebox-sinput input { width: 48px; text-align: center; margin-left: 3px; }\n";
echo ".ui-datebox-input { width: {$use['dsiw']}px !important; margin-left: 1px; margin-right: 1px; text-align: center !important; display: inline-block !important; zoom:1; *display: inline; }\n";

echo "\n\n/{$star} Slide Mode Styles {$star}/\n";
echo ".ui-datebox-slide { width: {$use['width']}px; margin-left: auto; margin-right: auto;}\n";
echo ".ui-datebox-sliderow-d { margin-bottom: 5px; text-align: center; height: 40px; width: {$use['width']}px; overflow: hidden;}\n";
echo ".ui-datebox-sliderow-ym { margin-bottom: 5px; text-align: center; height: 32px; width: {$use['width']}px; overflow: hidden;}\n";
echo ".ui-datebox-sliderow-hi { text-align: center; height: 32px; width: {$use['width']}px; overflow: hidden;}\n";
echo ".ui-datebox-sliderow-int { display: inline-block; white-space: nowrap;}\n";
echo ".ui-datebox-slideyear { text-align: center; display: inline-block; zoom:1; *display:inline; width: {$use['ssyw']}px; vertical-align: middle; line-height: {$use['ssyl']}px; height: {$use['ssyh']}px; font-size: {$use['ssyf']}px; font-weight: bold; }\n";
echo ".ui-datebox-slidemonth { text-align: center; display: inline-block; zoom:1; *display:inline; width: {$use['ssmw']}px; vertical-align: middle; line-height: {$use['ssml']}px; height: {$use['ssmh']}px; font-size: {$use['ssmf']}px; font-weight: bold; }\n";
echo ".ui-datebox-slideday { text-align: center; display: inline-block; zoom:1; *display:inline; width: {$use['ssdw']}px; vertical-align: middle; line-height: {$use['ssdl']}px; height: {$use['ssdh']}px; font-size: {$use['ssdf']}px; font-weight: bold; }\n";
echo ".ui-datebox-slidehour { text-align: center; display: inline-block; zoom:1; *display:inline; width: {$use['sshw']}px; vertical-align: middle; line-height: {$use['sshl']}px; height: {$use['sshh']}px; font-size: {$use['sshf']}px; font-weight: bold; }\n";
echo ".ui-datebox-slidemins { text-align: center; display: inline-block; zoom:1; *display:inline; width: {$use['sshw']}px; vertical-align: middle; line-height: {$use['sshl']}px; height: {$use['sshh']}px; font-size: {$use['sshf']}px; font-weight: bold; }\n";
echo ".ui-datebox-slidearrow { text-align: center; display: inline-block; zoom:1; *display:inline; width: 10px; vertical-align: middle; line-height: 38px; height: 38px; font-size: 10px; font-weight: bold; }\n";
echo ".ui-datebox-slidewday { font-size: {$use['swdf']}px; font-weight: normal; }\n";

echo "\n\n/{$star} Flip Mode Styles {$star}/\n";
echo ".ui-datebox-flipcontent { text-align: center; height: {$use['fch']}px; margin-bottom: -{$use['fhl']}px;}\n";
echo ".ui-datebox-flipcontent div { margin-left: 3px; margin-right: 3px; width: {$use['fw']}px; height: {$use['fcsh']}px; display: inline-block; text-align: center; zoom: 1; *display: inline; overflow: hidden;}\n";
echo ".ui-datebox-flipcenter { border: 1px solid #eee; height: ${use['fhl']}px; margin-left: 10px; width: {$use['fwl']}px; margin-right: auto; margin-left: auto; position: relative; top: -45px;}\n";
echo ".ui-datebox-flipcontent ul { list-style-type: none; display: inline; }\n";
echo ".ui-datebox-flipcontent li { height: {$use['fh']}px; }\n";
echo ".ui-datebox-flipcontent li span { margin-top: 7px; display: block; }\n";

echo "\n\n/{$star} Shared Styles {$star}/\n";
echo ".ui-datebox-container { border: 5px solid #111 !important; width: {$use['width']}px; }\n";
echo ".ui-datebox-screen { position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; }\n";
echo ".ui-datebox-screen-modal { background-color: black; -moz-opacity: 0.8; opacity:.80; filter: alpha(opacity=80); }\n";
echo ".ui-datebox-hidden { display: none; }\n";
echo ".ui-dialog .ui-datebox-container { border: none !important; }\n";
echo ".ui-datebox-collapse a { display: inline-block; width: 45% }\n";
echo "\n.ui-datebox-inline { margin-top: 5px; border: 5px solid #111111 !important; margin-left: auto; margin-right: auto; text-align: center; }\n";
echo ".ui-datebox-inlineblind { margin-top: 5px; border: 5px solid #111111 !important; margin-left: auto; margin-right: auto; text-align: center; }\n";
