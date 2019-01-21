<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,

        // Whether generated URLs should omit "index.php" and have trailing slashes
        'omitScriptNameInUrls' => true,
        'addTrailingSlashesToUrls'         => true,

        // Control Panel trigger word
        'cpTrigger' => 'cms',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        // Use Project Config File for best practice in data migration
        'useProjectConfigFile' => true,

        // Set fuzzy search by default
        'defaultSearchTermOptions' => array(
            'subLeft' => true,
            'subRight' => true,
        ),

        'generateTransformsBeforePageLoad' => true,
    ],

    // Dev environment settings
    'dev' => [
        // Base site URL
        'siteUrl' => null,

        // Dev Mode (see https://craftcms.com/support/dev-mode)
        'devMode' => true,
    ],

    // Staging environment settings
    'staging' => [
        // Base site URL
        'siteUrl' => null,
    ],

    // Production environment settings
    'production' => [
        // Base site URL
        'siteUrl' => null,
    ],
];
