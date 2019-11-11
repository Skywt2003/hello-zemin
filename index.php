<?php

function get_quote() {
	$quotes = explode( "\n", file_get_contents("quotes.txt"));
	return $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ];
}

$chosen = get_quote();

if ($_GET['encode'] == "js"){
    echo '(function zemin(){var zemin="'.$chosen.'";var dom=document.querySelector("#zemin");Array.isArray(dom)?dom[0].innerText=zemin:dom.innerText=zemin;})()';
} else if ($_GET['encode'] == "img"){
    $size = 12;
    $font ="./SourceHanSerifCN-Heavy.otf";
    $img = imagecreate(500, 36);
    imagecolorallocate($img, 0xff, 0xff, 0xff);
    $black = imagecolorallocate($img, 0, 0, 0);
    imagettftext($img, $size, 0, 5, 25, $black, $font, $chosen);
    header('Content-Type: image/gif');
    imagegif($img);
} else {
    echo $chosen;
}

?>