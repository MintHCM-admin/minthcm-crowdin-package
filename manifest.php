<?php
/******************************************
 * MintHCM Translations
 * @URL: https://crowdin.com/project/minthcm
 * @author MintHCM Community via Crowdin
 ******************************************/
$manifest = array(
    'name' => 'English US',
    'description' => 'Translation: https://crowdin.com/project/minthcm',
    'type' => 'langpack',
    'is_uninstallable' => 'Yes',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'MintHCM Community',
    'version' => '3.1.2',
    'published_date' => '2022-12-20',
);
$installdefs = array(
    'id' => 'en_us',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    ),
);