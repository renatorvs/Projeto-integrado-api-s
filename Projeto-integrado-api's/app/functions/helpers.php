<?php

use app\classes\Flash;
use app\classes\Login;
use app\classes\Redirect;
use app\models\admin\Admin;
use app\models\Model;
use app\validate\Sanitize;
use app\validate\Validate;
use app\models\portal\User;

function dd($dump) {
	var_dump($dump);

	die();
}

function toJson($data) {
	header('Content-Type: application/json');
	echo json_encode($data);
}

function validate($validate) {
	$validate = new $validate();

	$validate->validate();

	return $validate;
}

function request($field = null) {

	$sanitized = new Sanitize;
	if (!is_null($field)) {
		return $sanitized->sanitized()->$field;
	}

	return $sanitized->sanitized();
}

function auth(Model $model) {
	return (new Login)->login($model);
}

function redirect($target) {
	return Redirect::redirect($target);
}

function back() {
	return Redirect::back();
}

function flash($messages) {
	return Flash::add($messages);
}

function guest() {
	return (new Login)->guest(new User());
}

// function guestAdmin() {
// 	return (new Login)->guest(new Admin);
// }