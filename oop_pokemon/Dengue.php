<?php

require_once('Pokemon.php');


class Dengue extends Pokemon
{
    public function cry()
    {
        echo 'デングー';
        echo '<br>';
    }

    public function attack()
    {
        $this->thunderVolt();
    }

    private function thunderVolt()
    {
        echo 'デング熱感染';
        echo 'ぽりぽり';
        echo '<br>';
    }
}