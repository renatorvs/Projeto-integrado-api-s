<?php

use app\classes\User as UserClass;
use app\models\portal\User;

$this->functions[] = $this->functionToView('message', function ($key, $type = 'danger') {
	return (new app\classes\Flash)->get($key, $type);
});

$this->functions[] = $this->functionToView('user', function () {
	return (new UserClass())->user(new User);
});