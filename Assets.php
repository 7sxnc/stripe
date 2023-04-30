<?php

namespace humhub\modules\stripe;

use Yii;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $css = [
      'stripe.css'
    ];

    public $js = [
        'goal.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
