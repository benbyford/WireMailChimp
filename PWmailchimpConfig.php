<?php

class PWmailchimpConfig extends ModuleConfig {

	/*
	* Admin settings
	*/
	public function getDefaults() {
		return array(
			"api_key" => "",
			"api_list" => ""
		);
	}
	public function getInputfields() {

		$inputfields = parent::getInputfields();

		$f = $this->modules->get('InputfieldText');
		$f->name = 'api_key';
		$f->label = 'Mailchimp api key';
		$inputfields->add($f);

		$f = $this->modules->get('InputfieldText');
		$f->name = 'api_list';
		$f->label = 'Mailchimp list ID for new subscribers';
		$inputfields->add($f);

		return $inputfields;
	}
}
