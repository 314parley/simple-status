<?php
function check($url){
$http = curl_init($url);
$result = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
curl_close($http);
return $http_status;
}

if(check("http://www.314chan.org/lestatus.php") == '314'){
	echo "Main:".'<img src="./green.php" />'.'<br>';
}else{
	echo "Main:".'<img src="./red.php" /><br>';
}

if(check("http://www.314chan.org/lestatus.php") == '314'){
	echo "Main:".'<img src="./green.php" /><br>';
}else{
	echo "Main:".'<img src="./red.php" /><br>';
}
?>