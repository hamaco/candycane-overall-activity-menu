<?php

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_overall_activity_menu','0.0.1');

$menuContainer = ClassRegistry::getObject('MenuContainer');
$menuContainer->addTopMenu(
    array(
        'url'     => '/projects/activity',
        'caption' => __('Overall activity'),
        'logged'  => true,
        'admin'   => false
    )
);
