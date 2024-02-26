<?php

namespace App\myclasses\words;
use Illuminate\Support\Facades\Storage;

class localAudioSaver {

    public function save($url, $filename, $folder) {

        $fileInfo = pathinfo($url);

        $path = $folder.'/'.$filename.'.'.$fileInfo['extension'];

        Storage::disk('local')->put($path, file_get_contents($url));
        return '/files/'.$path;
    }

}
