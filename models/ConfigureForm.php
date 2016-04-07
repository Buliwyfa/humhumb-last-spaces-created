<?php

namespace humhub\modules\lastspaces\models;

use Yii;

class ConfigureForm extends \yii\base\Model
{

    public $noSpaces;

    public function rules()
    {
        return array(
            array('noSpaces', 'required'),
            array('noSpaces', 'integer', 'min' => 0, 'max' => 50),
        );
    }

    public function attributeLabels()
    {
        return array(
            'noSpaces' => Yii::t('LastspacesModule.base', 'The number of last spaces that will be shown.'),
        );
    }

}
