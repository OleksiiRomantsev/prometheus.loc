<?php

namespace  App\myclasses\training;


abstract class aTrainingFinish {

    protected $model;

    public function __invoke()
    {
        if($this->model->learned == 0) {
            // начальная тренировка
            $this->startTraining();


        } elseif($this->model->const_done == 0) {
            // закрепление
            $this->constTraining();

        } else {
            // повторение
            $this->repeatTraining();

        }
    }

    protected function startTraining() {

        $this->model->learned = 1;
        $this->model->const_count = 0;
        $this->model->const_time = $this->getConstTime();
        $this->model->repeat_count = $this->repeat_count;
        $this->model->save();

    }

    protected function constTraining() {

        $this->model->const_count++;
        if($this->model->const_count >= config('app.const_training_max')) {
            $this->model->const_done = 1;
            $this->model->repeat = 1;
        } else {
            $this->model->const_time = $this->getConstTime();
        }

        $this->model->save();
    }

    protected function repeatTraining() {

        $this->model->repeat_count++;
        if($this->model->repeat_count < 7) {
            $this->model->repeat = 1;
        } else {
            $this->model->repeat = $this->model->repeat_count * 2;
        }

        $this->model->save();
    }

    /**
     * Переписал с учетом кривой забывания
     * @return false|string
     * Всего на 3 повторения (consolidation). Это позволяет избежать лишней нагрузки и довольно быстро прогресировать. + более серьёздно относится к повторениям
     * Первые три повторения (5 сек., 25 сек, и 2 мин.) уходят в стартовую тренировку.
     */
    protected function getConstTime() {

        switch($this->model->const_count) {
            case 0:
                $time = time() + 10 * 60; // 10 минут
                break;
            case 1:
                $time = time() + 3600; // 1h
                break;
            case 2:
                $time = time() + (5 * 3600); // 5h
                break;
        }

        return date('Y-m-d H:i:s', $time);
    }
}
