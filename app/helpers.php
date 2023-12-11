<?php

function convertEmoticonToImage($message)
{
    $emoticons = [
        ':))' => '<img src="' . url('images/1.png') . '" alt="">',
        ':3'  => '<img src="' . url('images/2.png') . '" alt="">',
        ':P'  => '<img src="' . url('images/3.png') . '" alt="">',
        ':C'  => '<img src="' . url('images/4.png') . '" alt="">',
        ';)'  => '<img src="' . url('images/5.png') . '" alt="">',
    ];

    foreach ($emoticons as $emoticon => $imageTag) {
        $message = str_replace($emoticon, $imageTag, $message);
    }

    return $message;
}
