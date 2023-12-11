<?php

function convertEmoticonToImage($message)
{
    $emoticons = [
        ':))' => '<img src="' . url('images/1.png') . '" alt="" style="width: 20px; height: 20px;">',
        ':3'  => '<img src="' . url('images/2.png') . '" alt="" style="width: 20px; height: 20px;">',
        ':P'  => '<img src="' . url('images/3.png') . '" alt="" style="width: 20px; height: 20px;">',
        ':C'  => '<img src="' . url('images/4.png') . '" alt="" style="width: 20px; height: 20px;">',
        ';)'  => '<img src="' . url('images/5.png') . '" alt="" style="width: 20px; height: 20px;">',
    ];

    foreach ($emoticons as $emoticon => $imageTag) {
        $message = str_replace($emoticon, $imageTag, $message);
    }

    return $message;
}
