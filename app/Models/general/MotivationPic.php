<?php
namespace App\Models\general;

class MotivationPic {

    protected $path;

    public function __construct()
    {
        $this->path = DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR.'pic'.DIRECTORY_SEPARATOR;
    }

    public function __invoke(int $all, int $learned)
    {

        try {

            if($all == 0) throw new \DivisionByZeroError();
            $img = (int)floor($learned * 251 / $all);

        } catch(\DivisionByZeroError $e) {
            $img = 0;
        }

        if($img > 251) $img = 251;

        $img_str = (string)$img;

        switch(strlen($img_str)) {
            case 1: $img_str = '0'.$img_str;
            case 2: $img_str = '0'.$img_str;
            case 3: $img_str .= '.jpg';
        }

        return $this->path.$img_str;
    }
}
