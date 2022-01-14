<?php
$id = $_GET['cid'];
$data = json_decode(file_get_contents(base64_decode("c29ueS5qc29u")), true);

foreach($data["channels_list"] as $keys => $values) {
	foreach ($values["stream_list"] as $stream) {
	    if ($stream["stream_id"] == $id) {
	        $main = $stream["stream_url"];
}}}
$u = "vQnblZXZvkWYzN3LzQDN6QXZu5yajlGbjVGbiV3bk5yZuMHZhJWdw9yL6MHc0RHa";
$g = strrev($u);
$a=base64_decode($g);
$abc=base64_decode("L21hc3Rlci5tM3U4");
$ab=$a.$main.$abc;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ab);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$html = curl_exec($ch);
$ad = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
curl_close($ch);
header("location:".$ad);