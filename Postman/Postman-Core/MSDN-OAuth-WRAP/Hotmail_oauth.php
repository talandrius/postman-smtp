<?php
/*
  @author		:	Giriraj Namachivayam
	@date 		:	Mar 20, 2013
	@demourl	:	http://ngiriraj.com/socialMedia/oauthlogin/msn.php
	@document	:	http://ngiriraj.com/work/hotmail-connect-by-using-oauth/
	@license	: 	Free to use, 
	@History	:	V1.0 - Released oauth 2.0 service providers login access	
	@oauth2		:	Support following oauth2 login
					Bitly
					Wordpress
					Paypal
					Facebook
					Google
					Microsoft(MSN,Live,Hotmail)
					Foursquare
					Box
					Reddit
					Yammer
					Yandex		
					
	https://gist.github.com/kayalshri/5262641
	
*/
include "socialmedia_oauth_connect.php";

$oauth = new socialmedia_oauth_connect();
$oauth->provider="Microsoft";
// $oauth->client_id = "xxxxxxxxxxxxxxxxxxxxxxx";
// $oauth->client_secret = "xxxxxxxxxxxxxxxxxxxxxx";
$oauth->client_id = "000000004813ED53";
$oauth->client_secret = "8zkzgNYbwYrppdtGITRqz9fJR2B6clie";

// $oauth->scope="wl.basic wl.emails wl.birthday wl.skydrive wl.photos";
$oauth->scope="wwl.emails";

// $oauth->redirect_uri  ="http://ngiriraj.com/socialMedia/oauthlogin/msn.php";
$oauth->redirect_uri  ="http://computer.com/~jasonhendriks/wordpress/wp-admin/options-general.php";

$oauth->Initialize();

$code = ($_REQUEST["code"]) ?  ($_REQUEST["code"]) : "";

if(empty($code)) {
	$oauth->Authorize();
}else{
	$oauth->code = $code;
#	print $oauth->getAccessToken();
	$getData = json_decode($oauth->getUserProfile());
	$oauth->debugJson($getData);
}


?>