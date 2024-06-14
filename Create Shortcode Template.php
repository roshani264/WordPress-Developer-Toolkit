<?php

/**
 * [Shortcode Name here]
 *	Replace shortcode name with anything you want!
 */
function func_roshani_shortcode($atts){
	$out = "";
	$atts = shortcode_atts([
	// You can use any one as needed
	   'variable1' => 'value1',
		'variable2' => 'value2',
		'variable3' => 'value3',
		'variable4' => 'value4',
		'variable5' => 'value5'
		
	], $atts, $tag);
		
		$variable1 = $atts["variable1"];
		$variable2 = $atts["variable2"];
		$variable3 = $atts["variable3"];
	
	ob_start();
?>
		
<!-- Add your HTML / CSS / JS code here! -->
<!-- And you can also embed a " . $variable1 . " here " -->
<?php
	$out.= ob_get_contents();
	ob_end_clean();
	return $out;
}
add_shortcode("roshani_shortcode","func_roshani_shortcode");
