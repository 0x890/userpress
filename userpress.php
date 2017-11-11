<?php

#wordpress username detector v.1
#author : Noureddine Bellounis
#Feel free to use / reuse
#some strings are encoded (no skiddies)

$site = $argv[1];
$url = $site.base64_decode('L3dwLWpzb24vd3AvdjIvdXNlcnMv');
$ch = curl_init( $url);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

$response = curl_exec( $ch );

curl_close( $ch );
$json = $response;
$user = json_decode($json);

if ($user != '') {

	echo base64_decode('VXNlcm5hbWUgZm9yIA==') . $site . base64_decode('IGlzID0g') . $user[0]->name."\n";

}

else {
	
	echo base64_decode('Q2FuJ3QgZmluZCB1c2VybmFtZSBmb3Ig').$site."\n";
}

?>
