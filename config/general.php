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
      
      // URL
        'omitScriptNameInUrls' => true,
        'addTrailingSlashesToUrls' => true,
      
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
        'useEmailAsUsername' => true,
        'timezone' => 'Europe/London',
      
       //Aliases parsed in sites’ settings, volumes’ settings, and Local volumes’ settings
      'aliases' => [
          '@assetPath' => getenv('ASSETS_PATH'),
          '@assetUrl' => getenv('ASSETS_URL'),
      ],
    
    ],
  
  // Dev environment settings
    'local' => [
        'siteUrl' => null,
        'devMode' => true,
        'isSystemLive' => true,
        'allowUpdates' => true,
        'allowAdminChanges' => true,
        'backupOnUpdate' => true,
        'enableTemplateCaching' => false,
        'testToEmailAddress' => 'terry@amasci.co.uk',
    ],
  
  // Staging environment settings
    'staging' => [
        'siteUrl' => null,
        'allowUpdates' => false,
        'backupOnUpdate' => false,
        'devMode' => false,
        'allowAdminChanges' => false,
        'isSystemLive' => false,
        'enableTemplateCaching' => false,
        'testToEmailAddress' => 'terry@amasci.co.uk',
    ],
  
  // Production environment settings
    'production' => [
        'siteUrl' => null,
        'allowUpdates' => false,
        'backupOnUpdate' => false,
        'enableTemplateCaching' => true,
        'devMode' => false,
        'allowAdminChanges' => false,
        'isSystemLive' => true,
    ],
];
