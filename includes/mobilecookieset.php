<?php

$detect = new Mobile_Detect;
$url = 'http://localhost:8888/mobiled/mobile/';

if ( $detect->isMobile() && !$detect->isTablet() ){
	if(isset($_COOKIE['mobile_redirect'])){
		echo "<!-- Demobilized. -->";
	}
	if(!isset($_COOKIE['mobile_redirect']) ){
		setcookie("mobile_redirect", 1, time() + 3600 );
		//if (isset($_COOKIE['mobile_redirect'])) {
			header('Location: '. $url);
			//echo '<meta http-equiv="Refresh" content="1;URL= '.$url.'" />';
		//}
	} 
	
	else { return null; }
}
else{
	return null;
}
//if 
 // else{ if (isset($_REQUEST['testing'])){ print "<!-- Cookies are disabled. -->";} else{
 // 	setcookie("mobile_redirect", '1', 0, '/');
 // 	header("Location: $SERVER[PHP_SELF]?testing=1");
 // }}

?>