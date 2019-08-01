<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_tags.php

    MediaWiki API Demos
    Demo of `Tags` module: Get the first three change tags and their hitcounts.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "query",
    "format" => "json",
    "list" => "tags",
    "tgprop" => "hitcount",
    "tglimit" => "3"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );

foreach( $result["query"]["tags"] as $k => $v ) {
    echo( $v["name"] . "\n" );
}