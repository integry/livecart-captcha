<?php

$forms = array_intersect_key($this->getApplication()->getConfig()->get('CAPTCHA_FORMS'), include dirname(dirname(dirname(__FILE__))) . '/forms/forms.php');
$out = array();
foreach ($forms as $block => $validator)
{
	$out[$block] = array('*' => 'captcha->input');
}

return $out;

?>