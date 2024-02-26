<?php

namespace App\myclasses\training;
use Illuminate\Support\Facades\DB;

class patternTraining {

    protected $lang;

    public function __construct($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Get patterns list with filter
     * @param $filter
     * @return mixed
     */
    public function getPatternList($filter) {

        $query = DB::table('patterns')->select('id', 'name', 'number', 'repeatt', 'training_count')->where(['lang' => $this->lang]);

        if($filter['search']) {

            $search_value = '%' . trim($filter['search']) . '%';
            $query->where('name', 'like',  $search_value )
            ->orWhere('number', 'like',  $search_value);
        }

        $query = $this->addPatternOrder($filter['sort'], $query);


        $res = $query->get();
        return $res;
    }

    /**
     * Get sorting for patterns
     * @param $sortCode
     * @param $query
     * @return mixed
     */
    private function addPatternOrder(string $sortCode, $query) {

        switch($sortCode) {
            case 'id_desc': $query->orderBy('id', 'desc'); break;
            case 'id_ask': $query->orderBy('id', 'asc'); break;
            case 'repeatt_desc': $query->orderBy('repeatt', 'asc'); break;
            case 'trained_max': $query->orderBy('training_count', 'desc'); break;
            case 'trained_min': $query->orderBy('training_count', 'asc'); break;
        }

        return $query;
    }

}
