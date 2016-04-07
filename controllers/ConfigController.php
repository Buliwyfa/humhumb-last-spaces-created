<?php

namespace humhub\modules\lastspaces\controllers;

use Yii;
use humhub\modules\lastspaces\models\ConfigureForm;
use humhub\models\Setting;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.lastspaces.controllers
 * @author Guillaume Ponty
 */
class ConfigController extends \humhub\modules\admin\components\Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionConfig()
    {
        $form = new ConfigureForm();
        $form->noSpaces = Setting::Get('noSpaces', 'lastspaces');
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->noSpaces = Setting::Set('noSpaces', $form->noSpaces, 'lastspaces');
            return $this->redirect(['/lastspaces/config/config']);
        }

        return $this->render('config', array('model' => $form));
    }

}

?>
