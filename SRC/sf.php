<?php 
echo "\e[36m";
error_reporting(0);
$sublist = array();
$list = "subdomainlist.txt";
$file = fopen($list, "r+");
while(!feof($file)){
	array_push($sublist, trim(fgets($file)));
}

function subfinder($site){
	global $sublist;
	foreach ($sublist as $domain) {
		$sub = ("http://".$domain.".".$site."/");
		$var = get_headers(trim($sub));
		if(!empty($var)){
			$safurl = explode("/", $sub)[2];
			echo "\e[32m[~] (Sub Domain Find) ".$safurl." - (" . gethostbyname($safurl) . ")\n";
		}
	}
}

?>