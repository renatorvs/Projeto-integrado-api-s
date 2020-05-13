<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

require_once 'lib/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
	'app_id' => '1481731325344201',
	'app_secret' => '87a2bcbf7f03eca47ef391bbef895d78',
	'default_graph_version' => 'v2.9',
	//'default_access_token' => '{access-token}', // optional
]);

unset($_SESSION['face_access_token']);

$helper = $fb->getRedirectLoginHelper();
//var_dump($helper);
$permissions = ['email']; // Optional permissions

try {
	if (isset($_SESSION['face_access_token'])) {
		$accessToken = $_SESSION['face_access_token'];
	} else {
		$accessToken = $helper->getAccessToken();
	}

} catch (Facebook\Exceptions\FacebookResponseException $e) {
	// When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}

if (!isset($accessToken)) {
	$url_login = 'http://localhost/Projeto-integrado_api/fastbook/login.php';
	$loginUrl = $helper->getLoginUrl($url_login, $permissions);
} else {
	$url_login = 'http://localhost/Projeto-integrado_api/fastbook/login.php';
	$loginUrl = $helper->getLoginUrl($url_login, $permissions);
	//Usuário ja autenticado
	if (isset($_SESSION['face_access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['face_access_token']);
	} //Usuário não está autenticado
	else {
		$_SESSION['face_access_token'] = (string) $accessToken;
		$oAuth2Client = $fb->getOAuth2Client();
		$_SESSION['face_access_token'] = (string) $oAuth2Client->getLongLivedAccessToken($_SESSION['face_access_token']);
		$fb->setDefaultAccessToken($_SESSION['face_access_token']);
	}

	try {
		// Returns a `Facebook\FacebookResponse` object
		$response = $fb->get('/me?fields=name , email, picture');
		$user = $response->getGraphUser();

		$_SESSION['session_id'] = $user['id'];
		$_SESSION['nome'] = $user['name'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['picture'] = $user['picture']['url'];
		$_SESSION['img'] = $user['picture'];
		$_SESSION['logado'] = true;
		header("Location: livro.php");
		// }
	} catch (Facebook\Exceptions\FacebookResponseException $e) {
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch (Facebook\Exceptions\FacebookSDKException $e) {
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

}