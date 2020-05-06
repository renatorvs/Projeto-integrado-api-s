<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\admin\Admin;
use app\validate\portal\Cadastro;

class CadastroController extends ContainerController {

	public function index() {

		$this->view([
			'title' => 'Cadastro',
		], 'portal.cadastro');

	}

	public function show() {

	}

	public function create() {

	}

	public function store() {

		toJson($_POST);

		$login = validate(Cadastro::class);

		if ($login->hasErrors()) {
			flash($login->getErrors());

			return back();
		}

		$admin = new Admin;

		$admin->insert(request()->hash());

		auth($admin);

		redirect('/');

	}

	public function edit($id) {

	}

	public function update($id) {

	}

	public function destroy($id) {

	}

}
