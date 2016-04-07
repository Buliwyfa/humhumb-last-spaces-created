<?php

namespace humhub\modules\lastspaces\widgets;

use humhub\models\Setting;
use humhub\modules\lastspaces\models\LastSpaces;

class Sidebar extends \humhub\components\Widget
{

    public function run()
    {
        $spaces = LastSpaces::find()->limit((int) Setting::Get('noSpaces', 'lastspaces'))->all();
        if (count($spaces) == 0) {
            return;
        }

        return $this->render('sidebar', array(
                    'spaces' => $spaces
        ));
    }

}

?>
