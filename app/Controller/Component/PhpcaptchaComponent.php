<?php
class PhpcaptchaComponent extends Component {
	var $Controller = null;
	
	function startup(Controller $controller) {
		App::import('Vendor', 'phpcaptcha/securimage');
		$this->Controller = $controller;
	}
	
	function show() {
		$options = array(
			'text_color' => '#000000',
			'code_length' => 4,
			//'captcha_type' => 1,
			'noise_level' => 1,
			'noise_color' => '#e9e9e9'
			
		);
		$phpcaptcha = new Securimage($options);
		
		$phpcaptcha->show();
		
		exit;
	}
	
	function play() {
		$phpcaptcha = new Securimage();
		$phpcaptcha->outputAudioFile();
		exit;
	}
}
?>
