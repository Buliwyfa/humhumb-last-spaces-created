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

            <a href="<?php echo $space->getUrl(); ?>">
                <img src="<?php echo $space->getProfileImage()->getUrl(); ?>"  class="img-rounded tt img_margin" height="40"
                     width="40" alt="40x40" data-src="holder.js/40x40" style="width: 40px; height: 40px;" data-toggle="tooltip"
                     data-placement="top" title=""
                     data-original-title="<?php echo Html::encode($space->name); ?>">
            </a>

            <?php
        }

        echo "<hr />";

        echo Html::a(Yii::t('LastspacesModule.base', 'Get a list'), Url::to(['/directory/directory/spaces']), array(
            'class' => 'btn btn-info'
        ));
        ?>
    </div>
</div>

