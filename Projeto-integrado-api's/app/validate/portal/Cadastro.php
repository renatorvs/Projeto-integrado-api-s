<?php

namespace app\validate\portal;

use app\models\admin\Admin;
use app\validate\Validate;

class cadastro extends Validate {

	public function validate() {
		$this->required([]);
		$this->email(['email']);
		$this->unique(['email' => Admin::class]);
	}

}