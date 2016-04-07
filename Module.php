<?php

namespace humhub\modules\lastspaces;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;

class Module extends \humhub\components\Module
{

    /**
     * On build of the dashboard sidebar widget, add the lastspaces widget if module is enabled.
     *
     * @param type $event            
     */
    public static function onSidebarInit($event)
    {
        if (Yii::$app->hasModule('lastspaces')) {

            $event->sender->addWidget(widgets\Sidebar::className(), array(), array(
                'sortOrder' => 550
            ));
        }
    }

    public function getConfigUrl()
    {
        return Url::to(['/lastspaces/config/config']);
    }

    /**
     * Enables this module
     */
    public function enable()
    {
        if (!Yii::$app->hasModule('lastspaces')) {
            // set default config values
            Setting::Set('noSpaces', 5, 'lastspaces');
        }
        parent::enable();
    }

}

?>
