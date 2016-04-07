<?php

use yii\helpers\Html;
use yii\helpers\Url;

humhub\modules\lastspaces\Assets::register($this);
?>
<div class="panel panel-default" id="lastspaces-panel">

    <!-- Display panel menu widget -->
    <?php humhub\widgets\PanelMenu::widget(array('id' => 'lastspaces-panel')); ?>

    <div class="panel-heading">
        <?php echo Yii::t('LastspacesModule.base', 'Last <strong>spaces</strong> created'); ?>
    </div>
    <div class="panel-body">
        <?php
        foreach ($spaces as $space) {
            ?>

            <?php echo \humhub\modules\space\widgets\Image::widget([
                'space' => $space,
                'width' => 40,
                'link' => true,
                'htmlOptions' => [
                    'style' => 'margin-bottom: 5px;',
                ],
                'linkOptions' => [
                    'class' => 'tt',
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                    'title' => Html::encode($space->name),
                ]
            ]); ?>

            <?php
        }

        echo "<hr />";

        echo Html::a(Yii::t('LastspacesModule.base', 'Get a list'), array('/directory/directory/spaces'), array('class' => 'btn btn-xl btn-info'));

        ?>

    </div>
</div>

