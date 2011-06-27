<?php

/**
 *  Handles CAPTCHA image generation
 *
 *  @author Integry Systems
 *  @package module.captcha.application.controller
 */
class CaptchaController extends BaseController
{
	public function index()
	{
		ob_end_clean();
		$path = ClassLoader::getRealPath('module.captcha.library.securimage.securimage_show') . '.php';
		chdir(dirname($path));
		include $path;

		exit;
	}

	public function inputBlock()
	{
		$enabledForms = array_intersect_key($this->config->get('CAPTCHA_FORMS'), include dirname(dirname(dirname(__FILE__))) . '/forms/forms.php');
		return new BlockResponse();
	}
}

?>