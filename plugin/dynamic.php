<?php

$forms = include dirname(dirname(__FILE__)) . '/forms/forms.php';
$out = array();

$plugin = array('class' => 'CaptchaValidation', 'path' => dirname(__file__) . '/CaptchaValidation.php');

foreach ($forms as $validator)
{
	$out[strtolower('validator/' . $validator)][] = $plugin;
}

return $out;

?>