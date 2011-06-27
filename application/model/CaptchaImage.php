<?php

ClassLoader::importNow('module.captcha.library.securimage.securimage');

/**
 *  Create CAPTCHA image and validate input
 *
 *  @author Integry Systems
 *  @package module.captcha.application.controller
 */
class CaptchaImage
{
	public function __construct()
	{
		$this->captcha = new Securimage();
	}

	public function isValid($enteredCode)
	{
		return $this->captcha->check($enteredCode);
	}
}

?>