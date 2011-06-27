<?php

ClassLoader::import('module.captcha.application.helper.validator.CaptchaCheck');

class CaptchaValidation extends ValidatorPlugin
{
	public function process()
	{
		$enabledForms = array_intersect_key(include dirname(dirname(__FILE__)) . '/forms/forms.php', $this->application->getConfig()->get('CAPTCHA_FORMS'));

		if (array_search($this->validator->getName(), $enabledForms) !== false)
		{
			$this->validator->addCheck('captcha', new IsNotEmptyCheck($this->application->translate('_captcha_empty')));
			$this->validator->addCheck('captcha', new CaptchaCheck($this->application->translate('_captcha_wrong')));
		}
	}
}

?>