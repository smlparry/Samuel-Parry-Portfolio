<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

define('SITE_URL', $_SERVER["SERVER_NAME"] . '/');
define('BASEPATH', realpath(CRAFT_BASE_PATH . '/../') . '/');

return array(
    '*' => array(

        // General Config Settings
        'cpTrigger' => 'manage',
        'omitScriptNameInUrls' => true,

        // Can use these variables in the craft dashboard with {siteUrl} or {basePath}
        'environmentVariables' => array(
            'siteUrl'  => SITE_URL,
            'basePath' => BASEPATH
        ),

        // Create a custom variable that we can use for an environment conditional
        // We set the environment in index.php: live, dev, or local
        // This setting assumes we set the environment name in our index.php file
        'env' => CRAFT_ENVIRONMENT

    ),
    'live' => array(

        // Custom settings for the live site
        'devMode' => false

    ),
    'dev' => array(

        // Custom settings for the developer mode of the site
        'devMode' => true,

    )

);
