<?php

ClassLoader::import("framework.request.validator.check.Check");
ClassLoader::import("module.captcha.application.model.CaptchaImage");

/**
 * Checks if captcha has been entered correctly
 *
 * @author Integry Systems
 */
class CaptchaCheck extends Check
{
	public function isValid($value)
	{
		$image = new CaptchaImage();
		return $image->isValid($value);
	}
}

?>