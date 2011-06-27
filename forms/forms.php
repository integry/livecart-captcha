<?php

$res = array();
foreach (glob(dirname(__file__) . '/*') as $file)
{
	if (realpath(__file__) != realpath($file))
	{
		$out = include $file;

		if (is_array($out))
		{
			$res = array_merge($res, $out);
		}
	}
}

return $res;

?>