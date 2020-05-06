<?php

namespace app\controllers\admin;

use app\controllers\ContainerController;
use app\models\admin\Admin;
use app\validate\admin\Login;

class AdminLoginController extends ContainerController {

	public function store() {

		$login = validate(Login::class);

		if ($login->hasErrors()) {
			flash($login->getErrors());

			return redirect('/admin');
		}

		auth(new Admin);

		redirect('/painel');

	}

}