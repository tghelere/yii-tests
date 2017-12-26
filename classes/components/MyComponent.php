<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 26/12/17
 * Time: 08:45
 */

namespace app\classes\components;


use yii\base\Component;

class MyComponent extends Component
{
    public $string;

    public function printString()
    {
        echo $this->string;
    }

}