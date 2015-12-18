<?php

if ($_SERVER['HTTP_HOST'] == 'www.api.embassy-pub.ro'){
	$redirect_page = 'http://www.api.embassy-pub.ro/public';
}else{
	$redirect_page = 'http://localhost/restfull-api/public';
}
$redirect = true;

if($redirect === true){
    header('Location: '.$redirect_page);
}