<p class="required">
	<label>
		{t _enter_captcha}:
	</label>

	<fieldset class="container">
		<input type="text" class="text captcha" name="captcha" />
		<img src="{link controller=captcha}" class="captcha" style="margin: 5px 0;" />
		{error for="captcha"}<div class="errorText">{$msg}</div>{/error}
	</fieldset>

</p>