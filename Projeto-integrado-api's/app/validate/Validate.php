<?php

namespace app\validate;

abstract class Validate {

	private $errors = [];

	public function required($fields) {

		$this->fieldsIsArray($fields);

		if (empty($fields)) {
			foreach ($_POST as $key => $value) {
				$this->isEmpty($key);
			}
			return;
		}

		foreach ($fields as $key => $field) {
			$this->isEmpty($field);
		}

	}

	public function email($fields) {
		$this->fieldsIsArray($fields);

		foreach ($fields as $key => $field) {
			if (!filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
				$this->errors[$field][] = "Esse email é inválido";
			}
		}

	}

	public function max($fields) {
		$this->fieldsIsArray($fields);

		foreach ($fields as $key => $length) {
			if (strlen($_POST[$key]) > $length) {
				$this->errors[$key][] = "O campo deve ter no máximo {$length} caracteres";
			}
		}

	}

	public function unique($fields) {
		$this->fieldsIsArray($fields);

		foreach ($fields as $key => $model) {
			$model = new $model;
			if ($model->find($key, $_POST[$key])) {
				$this->errors[$key][] = "O campo já tem um valor cadastrado com o que você digitou";
			}
		}

	}

	public function hasErrors() {
		return !empty($this->errors);
	}

	public function getErrors() {
		return $this->errors;
	}

	private function isEmpty($field) {
		if (empty($_POST[$field])) {
			$this->errors[$field][] = 'Esse campo é obrigatóro';
		}
	}

	private function fieldsIsArray($fields) {
		if (!is_array($fields)) {
			throw new Exception('Validação precisa ser um array no required');
		}
	}

}