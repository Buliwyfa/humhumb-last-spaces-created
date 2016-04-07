<?php

namespace humhub\modules\lastspaces;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];
    public $css = [
        'lastspaces.css',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }

}
