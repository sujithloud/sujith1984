<?php

error_reporting(0);

//header("Content-Type: application/vnd.apple.mpegurl");

$id = $_GET['id'];

$data = json_decode(file_get_contents("redbox_channels.json"), true);



foreach($data["channels_list"] as $keys => $values) {

	foreach ($values["stream_list"] as $stream) {

	    if ($stream["stream_id"] == $id) {

	        $blink = $stream["stream_url"];



$burl = str_replace("playlist.m3u8", "", $blink);

}}}

$opts = array(

  'http'=>array(

    'method'=>"GET",

    'header'=>"User-Agent: Dalvik/2.1.0 (Linux; U; Android 7.1.2; SM-G977N Build/LMY48Z)\r\n" .

              "authorization: Basic eWFyYXBuYWthYW1rYXJvOnR1bmduYWtpYWthcm8=\r\n"

  )

);



$context = stream_context_create($opts);

$basetoken = file_get_contents('http://135.181.2.111:8800/fio/3b.rbt/', false, $context);

$token = file_get_contents(base64_decode("aHR0cHM6Ly9pbmRzdHJlYW0ueHl6L3JlZGJveGFwaS5waHA/d21zQXV0aFNpZ249").$basetoken);



$link = $blink.$token;

$e = file_get_contents($link);

preg_match("/(?=chunks.m3u8).*/", $e, $m);

$f = file_get_contents($burl.$m[0]);

$g = preg_replace("/l_/", "stream.php?stream=".$burl."l_", str_replace(".ts?", ".ts&", $f));

if(strpos($g, "EXTM3U") !== false) {

echo $g;

} else {

$relink = "https://mallutvapp.com/redbox/redbox.php?id=".$id."&e=.m3u8";

header("Location: ".$relink);

}