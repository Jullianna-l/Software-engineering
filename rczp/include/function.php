<?php


function CroppedThumbnail($imgSrc,$thumbnail_width,$thumbnail_height,$rt,$del=1) { //$imgSrc is a FILE - Returns an image resource.
    //getting the image dimensions

    include_once ('image.class.php');
    $image = new Image();
    $rt2 = $image->thumb($imgSrc,$thumbnail_width,$thumbnail_height,1);

    $rt3=explode("/",$rt2['path']);

    $tst=$rt3[count($rt3)-1];

    if($del){
        @unlink($imgSrc);
    }

    return $tst;



}



