<?php
$fb = new Facebook\Facebook([
  'app_id' => '{642963862396213}', // Replace {app-id} with your app id
  'app_secret' => '{bfad6a33b4d4c25f952780e8b8b0da13}',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://example.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>