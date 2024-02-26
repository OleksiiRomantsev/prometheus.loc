<?php

namespace App\myclasses\words;


abstract class aAudio implements iAudio {

    protected function sendRequest($url) {

        $options = array (
            'https' => array('method' => 'GET'),
        );

        $context = stream_context_create($options);
        $html = @file_get_contents($url, false, $context);
        return $html;
    }

}
