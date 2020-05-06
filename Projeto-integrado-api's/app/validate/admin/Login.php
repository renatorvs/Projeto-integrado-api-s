<?php

namespace app\validate\admin;

use app\models\admin\Admin;
use app\validate\Validate;

class Login extends Validate {

	public function validate() {
		$this->required(['email', 'password']);
		// $this->email(['email']);
		// $this->max(['email' => 3]);
		// $this->unique(['email' => Admin::class]);
	}

}