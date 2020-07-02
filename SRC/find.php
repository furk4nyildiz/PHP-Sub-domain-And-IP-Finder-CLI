<?php 
echo "
\t  _____                      ______           
\t / ____|                    |  ____|          
\t| |     __ _ _ __ ___  _ __ | |__   __ _  ___ 
\t| |    / _` | '_ ` _ \| '_ \|  __| / _` |/ _ \
\t| |___| (_| | | | | | | |_) | |___| (_| |  __/
\t \_____\__,_|_| |_| |_| .__/|______\__, |\___|
\t                      | |           __/ |     
\t                      |_|          |___/             

";


$str = "\t\e[31mGithub /furk4nyildiz - /yunemse48 - /burakyusuf\e[39m\n
Example : php find.php -s -d google.com
Example : php find.php -m -d google.com,yandex.com,bing.com,example.com
-s \t single search
-m \t multi search
-d \t domain\n\n";

$dizi = explode(" ", $str);

foreach ($dizi as $d) {
	$d = $d . " ";
	for ($i=0; $i < strlen($d) ; $i++) { 
		echo $d[$i];
		usleep(30000);
	}
}

include 'sf.php';
if(trim($argv[1]) == "-s"){
	echo "Single Starting... \n";
	if(trim($argv[2]) =="-d"){
		if(trim($argv[3] != null)){
			subfinder(trim($argv[3]));
		}
	}
}else if(trim($argv[1]) == "-m"){
	echo "Multi Starting... \n";
	if(trim($argv[2]) =="-d"){
		if(trim($argv[3] != null)){
			$split = explode(",", $argv[3]);
			for ($i=0; $i < count($split) ; $i++) { 
				subfinder(trim($split[$i]));
			}
		}
	}
}

?>
