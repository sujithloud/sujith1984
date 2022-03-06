<?php
header("content-type: video/mp2t");
$ts = $_GET['stream'];
$wmsAuthSign = $_GET['wmsAuthSign'];
$nimblesessionid = $_GET['nimblesessionid'];
$link = $ts."?nimblesessionid=".$nimblesessionid."&wmsAuthSign=".$wmsAuthSign;
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: stagefright/1.2 (Linux;Android 9)\r\n"
    ]
];
$context = stream_context_create($opts);
$chunks = file_get_contents($link, false, $context);
echo $chunks;
