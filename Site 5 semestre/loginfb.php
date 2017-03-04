<?php
	$fb = new Facebook\Facebook([
  		'app_id' => '1718757535116582', // Replace {app-id} with your app id
  		'app_secret' => '14baa32b0df9ee1da9f74b2dd64339ff',
  		'default_graph_version' => 'v2.2',
  	]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>