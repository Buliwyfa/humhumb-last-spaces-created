<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'lastspaces',
    'class' => 'humhub\modules\lastspaces\Module',
    'namespace' => 'humhub\modules\lastspaces',
    'events' => [
        ['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\lastspaces\Module', 'onSidebarInit']],
    ],
];
?>
