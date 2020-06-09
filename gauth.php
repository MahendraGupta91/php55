<?php
/* Google App Client Id */
define('CLIENT_ID', '779418364273-35dsikhnlcgjnjuqu15q2hriun0snmr4.apps.googleusercontent.com');

/* Google App Client Secret */
define('CLIENT_SECRET', 'TTwpltMZ_VFtvrRsz0IQmzWY');

/* Google App Redirect Url */
define('CLIENT_REDIRECT_URL', 'http://localhost:8000/gauth.php');
class GoogleLoginApi
{
	public function GetAccessToken($client_id, $redirect_uri, $client_secret, $code) {	
		$url = 'https://www.googleapis.com/oauth2/v4/token';			
		
		$curlPost = 'client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code';
		$ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		
		curl_setopt($ch, CURLOPT_POST, 1);		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);	
		$data = json_decode(curl_exec($ch), true);
		$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new Exception('Error : Failed to receieve access token');
			
		return $data;
	}

	public function GetUserProfileInfo($access_token) {	
		$url = 'https://www.googleapis.com/oauth2/v2/userinfo?fields=name,email,gender,id,picture,verified_email';			
		
		$ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '. $access_token));
		$data = json_decode(curl_exec($ch), true);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new Exception('Error : Failed to get user information');
			
		return $data;
	}
}


// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
                session_start();
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
	}
	catch(Exception $e) {
            
		//echo $e->getMessage();
                    $_SESSION["ERROR"]="User Information".$e->getMessage();
                    header('Location: differencing_error.php');
                    exit(); 
	}
}
        $_SESSION["AuthorName"]= $user_info['name'];
        $_SESSION["ID"]= $user_info['id'];
	$_SESSION["EmailId"]= $user_info['email'];
	$_SESSION["VerificationFlag"]= $user_info['verified_email'] == true ? 'Yes' : 'No';
        $_SESSION["ProfileImgUrl"]= $user_info['picture'];
        $_SESSION["googleUserFlag"]=TRUE;
         header('Location: php_files/GoogleUserProfileCreator.php');
         //echo 'Hello';
?>