<?php

namespace  App\myclasses\training;


class wordTrainingCounter extends aWordTraining {

    public function getStartTrainingCount() {

        return $this->startTraining()->count();
    }

    public function getContsTrainingCount() {

        return $this->constTraining()->count();
    }

    public function getRepeatTrainingCount() {

        return $this->repeateTraining()->count();
    }

}
